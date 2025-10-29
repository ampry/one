<?

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_post_type_support('page', 'excerpt');

// Remove emoji scripts from header
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Remove comments from admin
add_action('admin_menu', function() {
    remove_menu_page('edit-comments.php');
});

// Scripts
wp_enqueue_script('app', get_template_directory_uri() .'/assets/js/app.js', ['jquery'], '2.7', true);



/**
 * GitHub Auto-Updater for WordPress Theme
 * 
 * Make sure to replace:
 *  - $theme_slug with your theme folder name
 *  - $repo_owner and $repo_name with your GitHub repo details
 * Optional: If private repo, add a personal access token.
 */

add_filter( 'pre_set_site_transient_update_themes', 'github_theme_auto_update' );

function github_theme_auto_update( $transient ) {

    if ( empty( $transient->checked ) ) {
        return $transient;
    }

    $theme_slug = 'one'; // Folder name of your theme
    $theme_data = wp_get_theme( $theme_slug );

    $repo_owner = 'ampry';
    $repo_name  = 'one';
    $branch     = 'main'; // Branch to track

    // GitHub API URL for latest commit on branch
    $api_url = "https://api.github.com/repos/$repo_owner/$repo_name/branches/$branch";

    $response = wp_remote_get( $api_url, [
        'headers' => [
            'Accept'     => 'application/vnd.github.v3+json',
            'User-Agent' => 'WordPress/' . get_bloginfo( 'version' ),
            // 'Authorization' => 'token YOUR_PERSONAL_ACCESS_TOKEN', // Only for private repos
        ],
        'timeout' => 20,
    ] );

    if ( is_wp_error( $response ) ) {
        return $transient;
    }

    $data = json_decode( wp_remote_retrieve_body( $response ) );

    if ( empty( $data->commit->sha ) ) {
        return $transient;
    }

    $remote_sha = $data->commit->sha;
    $remote_version = substr( $remote_sha, 0, 7 ); // Short SHA as version

    // If GitHub SHA is different than current theme version
    if ( version_compare( $theme_data->get( 'Version' ), $remote_version, '<' ) ) {
        $transient->response[ $theme_slug ] = [
            'theme'       => $theme_slug,
            'new_version' => $remote_version,
            'url'         => "https://github.com/$repo_owner/$repo_name",
            'package'     => "https://github.com/$repo_owner/$repo_name/archive/$branch.zip",
        ];
    }

    return $transient;
}

// Optional: force WordPress to recognize new version immediately
add_filter( 'themes_api', 'github_theme_force_update', 10, 3 );
function github_theme_force_update( $res, $action, $args ) {

    $theme_slug = 'one';
    $repo_owner = 'ampry';
    $repo_name  = 'one';
    $branch     = 'main';

    if ( isset( $args->slug ) && $args->slug === $theme_slug ) {
        $res = (object) [
            'name'        => $theme_slug,
            'slug'        => $theme_slug,
            'new_version' => substr( github_get_latest_commit_sha( $repo_owner, $repo_name, $branch ), 0, 7 ),
            'package'     => "https://github.com/$repo_owner/$repo_name/archive/$branch.zip",
        ];
    }

    return $res;
}

// Helper function to get latest SHA
function github_get_latest_commit_sha( $owner, $repo, $branch ) {
    $url = "https://api.github.com/repos/$owner/$repo/branches/$branch";
    $response = wp_remote_get( $url, [
        'headers' => [
            'Accept'     => 'application/vnd.github.v3+json',
            'User-Agent' => 'WordPress/' . get_bloginfo( 'version' ),
        ],
    ]);

    if ( is_wp_error( $response ) ) return false;

    $data = json_decode( wp_remote_retrieve_body( $response ) );
    return $data->commit->sha ?? false;
}
