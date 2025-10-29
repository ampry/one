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