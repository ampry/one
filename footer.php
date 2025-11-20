		<footer>
			<div class="c">
				<div class="grid-20">
					<div class="col-2-5">
						<a class="logo" href="<?= get_home_url(); ?>">
		                    <?= wp_get_attachment_image(get_field('logo', 'option'), 'full'); ?>
		                </a><!-- logo -->
		                <p><? the_field('site_description', 'option'); ?></p>
		                <? get_template_part('partials/_cta'); ?>
					</div><!-- col-2-5 -->
					<div class="col-3-5">
						<div class="grid-20 clear-col-3 footer-sections">
							<? while (have_rows('sections', 'option')): the_row(); ?>
								<div class="col-1-3">
									<h5><?= get_sub_field('name'); ?></h5>
									<ul>
										<? foreach (get_sub_field('links') as $post_object): ?>
								            <li> <a href="<?= get_permalink($post_object->ID); ?>"><?= get_the_title($post_object->ID); ?></a></li>
								        <? endforeach; ?>
									</ul>
								</div><!-- col-1-3 -->
							<? endwhile; ?>
						</div><!-- grid-20 -->
					</div><!-- col-3-5 -->
				</div><!-- grid-20 -->
			</div><!-- c -->
		</footer>
		<section class="copyright">
			<div class="c">
				<p>© <?= date('Y') ?> <? bloginfo('name'); ?> All Rights Reserved</p>
				<? wp_nav_menu(array('menu' => 'Copyright', 'container'  => false, 'menu_class' => 'menu'));?>
			</div><!-- c -->
		</section><!-- copyright -->
		<? wp_footer(); ?>
	</body>
</html>