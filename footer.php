		<footer>
			<div class="c">
				<div class="grid-20">
					<div class="col-2-5">
						<a class="logo" href="<?= get_home_url(); ?>">
		                    <?= wp_get_attachment_image(get_field('logo_white', 'option'), 'full'); ?>
		                </a><!-- logo -->
					</div><!-- col-2-5 -->
					<div class="col-1-5">


					</div><!-- col-1-5 -->



				</div><!-- grid-20 -->
			</div><!-- c -->
		</footer>

		<section class="copyright">
			<div class="c">
				<p>Test.</p>
				<? wp_nav_menu(array('menu' => 'Copyright', 'container'  => false, 'menu_class' => 'menu'));?>
			</div><!-- c -->

		</section><!-- copyright -->

		<? wp_footer(); ?>
	</body>
</html>