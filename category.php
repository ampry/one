<? get_header(); ?>
    <? get_template_part('sections/_breadcrumbs'); ?>
    <? get_template_part('sections/_category-header'); ?>
    <main>
    	<div class="c">
            <? while (have_posts()) : the_post(); ?>
                <? get_template_part('partials/_article-block'); ?>
            <? endwhile; ?>
		</div><!-- c -->
	</main>
<? get_footer(); ?>`