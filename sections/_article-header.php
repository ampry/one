<section class="article-header">
    <div class="c">
        <div class="grid-50">
            <div class="col-3-5">
                <? the_category(); ?>
                <h1><? the_title(); ?></h1>
                <? get_template_part('partials/_byline'); ?>
            </div><!-- col -->
            <div class="col-2-5">
                <? get_template_part('partials/_featured-image'); ?>
                <? get_template_part('partials/_featured-image-caption'); ?>
            </div><!-- col -->
        </div><!-- grid-50 -->
    </div><!-- c -->
</section><!-- article-header -->