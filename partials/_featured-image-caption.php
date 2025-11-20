<? if (has_post_thumbnail()): ?>
    <? $thumb = get_post(get_post_thumbnail_id()); ?>
    <? if (!empty($thumb->post_excerpt)): ?>
        <p class="featured-image-caption"><?= esc_html($thumb->post_excerpt); ?></p>
    <? endif; ?>
<? endif; ?>