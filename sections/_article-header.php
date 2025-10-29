<section class="article-header">
    <div class="c">
        <div class="grid-50">
            <div class="col-1-2">
                <? the_category(); ?>
                <h1><? the_title(); ?></h1>
                <? get_template_part('partials/_byline'); ?>
            </div><!-- col-1-2 -->
            <div class="col-1-2">
                <? get_template_part('partials/_featured-image'); ?>
            </div><!-- col-1-2 -->
        </div><!-- grid-50 -->
    </div><!-- c -->
</section><!-- article-header -->