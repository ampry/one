<div class="byline">
	<a class="byline-image" href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>">
		<?= wp_get_attachment_image(get_field('image', 'user_' . get_the_author_meta('ID')), 'thumbnail'); ?>
	</a><!-- byline-image -->
	<p class="byline-author">Written by <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>"><?= get_the_author('display_name'); ?></a></p>
	<p class="byline-date">Updated <? the_modified_time('F j, Y'); ?></p>
</div><!-- byline -->