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
					<div class="row">
						<div class="col-12">
							<img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/eclipse_footer_logo.svg" alt="Eclipse footer logo">
						</div>
					</div>
				</div>
			</footer>

			</div>
		<?php wp_footer(); ?>
	</body>
</html>
