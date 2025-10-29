<? get_header(); ?>
    <? while (have_posts()) : the_post(); ?>
        <? get_template_part('sections/_breadcrumbs'); ?>
        <? get_template_part('sections/_article-header'); ?>
        <main>
        	<div class="c">
                <div class="grid-40">
                    <div class="col-2-3">
                        <div class="content">
                            <? the_content(); ?>
                        </div><!-- content -->
                    </div><!-- col-2-3 -->
                    <div class="col-1-3">
                        Sidebar.
                    </div><!-- col-1-3 -->
                </div><!-- grid-40 -->
    		</div><!-- c -->
    	</main>
    <? endwhile; ?>
<? get_footer(); ?>