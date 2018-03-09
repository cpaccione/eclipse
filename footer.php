<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eclipse
 */

?>
			<footer>
				<div class="container">
					<!-- <div class="row"> -->
						<nav class="navbar navbar-expand">
							<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="eclipse-footer-logo" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/eclipse_footer_logo.svg" alt="Eclipse footer logo"></a>
							<!-- <div class="collapse navbar-collapse"> -->
								<?php
									wp_nav_menu( array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
										'menu_class' => 'navbar-nav'
									) );
								?>
							<!-- </div> -->
						</nav>
					<!-- </div> -->
				</div>
			</footer>

			</div>
		<?php wp_footer(); ?>
	</body>
</html>
