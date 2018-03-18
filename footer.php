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
						<div class="row-footer row d-flex align-items-center">
							<div class="col-md-2">
								<a title="Eclipse footer logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
									<svg class="e-footer-logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="1773.75 2506.836 83.327 75.662"><defs><style>.a{fill:#fff;}.b{fill:url(#a);}.c{fill:#7bc043;}</style><linearGradient id="a" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox"><stop offset="0" stop-color="#00c0f2"/><stop offset="0.132" stop-color="#0bc0e2"/><stop offset="0.389" stop-color="#28c0b9"/><stop offset="0.742" stop-color="#56c077"/><stop offset="1" stop-color="#7bc043"/></linearGradient></defs><g transform="translate(1773.739 2506.824)"><g transform="translate(0.011 0.012)"><path class="a" d="M187.448,130.483H161.129c.67,5.93,4.905,10.638,11.642,10.638,4.314,0,7.6-1.812,9.022-4.787h4.984c-1.812,5.319-7.269,8.747-14.125,8.747-9.5,0-16.154-7.21-16.154-16.43,0-9.16,6.658-16.351,16.154-16.351,8.885,0,15.07,6.855,15.149,16.213,0,.67,0,1.34-.059,1.95h-.3Zm-26.319-3.566h22c-.532-6.264-4.511-10.638-10.638-10.638C165.976,116.279,161.8,121.047,161.129,126.917Z" transform="translate(-125.672 -90.18)"/><path class="b" d="M74.631,45.693a30.039,30.039,0,1,1-.079-16.154h.2a37.83,37.83,0,1,0,.1,16.154Z" transform="translate(-0.011 -0.012)"/></g><g transform="translate(74.848 12.891)"><path class="c" d="M371.041,83.648h-1.324v3.561h-.593V83.648H367.8V83.1h3.241Zm5.2,3.56h-.593V83.785h0l-1.369,3.424h-.365l-1.369-3.424h0v3.424h-.593V83.146h.913l1.278,3.1,1.278-3.1h.867v4.063Z" transform="translate(-367.8 -83.1)"/></g></g></svg>
								</a>
							</div>
							<div class="col-md-7">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
										'menu_class'	=> 'footer-menu'
									) );
								?>
							</div>
							<div class="col-md-3">
								<a href="https://www.sba.gov/business-guide/grow-your-business/women-owned-businesses" target="_blank"><img class="sba" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/sba_wosb_logo.svg" alt="SBA Woman Owned Small Business logo"></a>
							</div>
						</div>
						<hr class="hr-one">
						<div class="row-footer-two d-flex align-items-center">
							<div class="col-12">
								<ul class="social-media">
									<li>
										<a href="#"><span class="fa-3x fa-fw fa-layers" style="color: #33cc99;">
											<i class="far fa-circle"></i>
											<i class="fab fa-facebook-f" data-fa-transform="shrink-8 fa-border"></i>
										</span></a>
									</li>
									<li>
										<a href="#"><span class="fa-3x fa-fw fa-layers" style="color: #33cc99;">
											<i class="far fa-circle"></i>
											<i class="fab fa-linkedin-in" data-fa-transform="shrink-8 fa-border"></i>
										</span></a>
									<li>
									<a href="#"><span class="fa-3x fa-fw fa-layers" style="color: #33cc99;">
											<i class="far fa-circle"></i>
											<i class="fab fa-twitter" data-fa-transform="shrink-8 fa-border"></i>
									</span></a>
								</ul>
								<small>&copy;<?php echo date('Y'); ?> Eclipse. All rights reserved.</small>
							</div>
						</div>
					</div>
				</footer>
			</div> <!-- closing #content div -->
		<?php wp_footer(); ?>
	</body>
</html>
