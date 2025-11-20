<? $link = get_field('cta', 'option'); ?>
<? if ($link): ?>
    <a class="cta" href="<?= esc_url($link['url']); ?>" target="<?= esc_attr($link['target'] ?: '_self'); ?>">
        <?= esc_html($link['title']); ?>
    </a>
<? endif; ?>