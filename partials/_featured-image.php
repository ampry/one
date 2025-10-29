<div class="featured-image">
    <? if ( has_post_thumbnail()): ?>
        <? the_post_thumbnail($args['size'] ?? 'large'); ?>
    <? endif; ?>
</div><!-- featured-image -->