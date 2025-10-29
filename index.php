<? get_header(); ?>
    <section class="hero" style="background-image: url('<?= get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>');">
        <div class="c">
            <h1><? the_title(); ?></h1>
        </div><!-- c -->
    </section><!-- hero -->

    <main>
    	<div class="c">
            <div class="content">
                <? the_content(); ?>
            </div><!-- content -->
		</div><!-- c -->
	</main>
<? get_footer(); ?>
