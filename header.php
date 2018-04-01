<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eclipse
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

	<aside class="off-canvas-menu">
		<nav>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav>
	</aside>

	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'eclipse' ); ?></a>

		<div class="main">

		<header class="navbar flex-row" id="masthead" class="site-header">
			<div class="navbar-brand site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 167.92 36.47"><defs><linearGradient id="linear-gradient" x1="-112.18" y1="668.28" x2="-111.18" y2="668.28" gradientTransform="matrix(36.07, 0, 0, -36.47, 4046.57, 24389.01)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#00c0f2"/>
							<stop offset="0.13" stop-color="#0bc0e2"/><stop offset="0.39" stop-color="#28c0b9"/><stop offset="0.74" stop-color="#56c077"/><stop offset="1" stop-color="#7bc043"/></linearGradient></defs><title>Eclipse Global Resources</title><path d="M29.92,19.42H17.11a5.48,5.48,0,0,0,5.6,5.13,4.55,4.55,0,0,0,4.36-2.31h2.4c-.89,2.55-3.5,4.21-6.82,4.21a7.65,7.65,0,0,1-7.8-7.5c0-.14,0-.28,0-.42a7.64,7.64,0,0,1,7.42-7.86h.38c4.27,0,7.27,3.32,7.3,7.83A9,9,0,0,1,29.92,19.42ZM17.11,17.7H27.73c-.27-3-2.17-5.13-5.14-5.13A5.44,5.44,0,0,0,17.11,17.7Z" transform="translate(-0.02 -0.03)" style="fill:#19164e"/>
							<path d="M52.56,21.05h2.31a6.85,6.85,0,0,1-7,5.43,7.91,7.91,0,0,1,0-15.81,6.8,6.8,0,0,1,7,5.43H52.56a4.55,4.55,0,0,0-4.75-3.38,5.53,5.53,0,0,0-5.58,5.5c0,.11,0,.23,0,.34a5.55,5.55,0,0,0,5.22,5.87h.35A4.59,4.59,0,0,0,52.56,21.05Z" transform="translate(-0.02 -0.03)" style="fill:#19164e"/><path d="M68.08,26.07H65.85V3h2.2V26.07Z" transform="translate(-0.02 -0.03)" style="fill:#19164e"/><path d="M80.09,5.36a1.55,1.55,0,0,1,3.09,0,1.47,1.47,0,0,1-1.46,1.48h-.11a1.44,1.44,0,0,1-1.52-1.36ZM82.7,26.07H80.5v-15h2.2Z" transform="translate(-0.02 -0.03)" style="fill:#19164e"/><path d="M110.53,18.56a7.8,7.8,0,0,1-7.67,7.92h-.1a7.6,7.6,0,0,1-5.43-2.1v9.73h-2.2v-23h2.2v1.72a7.57,7.57,0,0,1,5.43-2.11,7.78,7.78,0,0,1,7.77,7.8Zm-2.2,0a5.86,5.86,0,0,0-5.8-5.93h0a6,6,0,0,0-5.16,2.79v6.32a6,6,0,0,0,5.16,2.78,5.87,5.87,0,0,0,5.81-5.93Z" transform="translate(-0.02 -0.03)" style="fill:#19164e"/>
							<path d="M122.46,21.41c.44,2.05,2.05,3.29,5,3.29,2.44,0,4.1-1,4.1-2.67,0-1.33-1.07-2.13-2.61-2.37l-3.41-.59c-2.5-.39-4.45-1.49-4.45-4,0-2.7,2.4-4.45,6-4.45,3.05,0,6.23,1.34,6.5,4.78h-2.05c-.3-2-1.93-3-4.45-3-2.37,0-3.82,1-3.82,2.49,0,1.13.8,2,3,2.34l3,.54c2.17.35,4.48,1.3,4.48,4.15s-2.64,4.63-6.29,4.63c-3.88,0-6.5-1.72-7-5.13h2.08Z" transform="translate(-0.02 -0.03)" style="fill:#19164e"/><path d="M158.8,19.42l-.12-.06v.06H146a5.5,5.5,0,0,0,5.6,5.14,4.58,4.58,0,0,0,4.36-2.32h2.4c-.89,2.55-3.5,4.21-6.82,4.21a7.65,7.65,0,0,1-7.8-7.5c0-.14,0-.28,0-.42a7.64,7.64,0,0,1,7.37-7.89h.43c4.27,0,7.27,3.32,7.3,7.83A5,5,0,0,1,158.8,19.42ZM146,17.7h10.62c-.27-3-2.17-5.13-5.14-5.13A5.46,5.46,0,0,0,146,17.7Z" transform="translate(-0.02 -0.03)" style="fill:#19164e"/><path d="M36,22a14.47,14.47,0,1,1,0-7.8H36a18.22,18.22,0,1,0,.06,7.8Z" transform="translate(-0.02 -0.03)" style="fill:url(#linear-gradient)"/><path d="M163.09,10.93h-1.25v3.32h-.53V10.93h-1.24v-.47h3Zm4.85,3.26h-.53V11h0l-1.3,3.2h-.36l-1.3-3.2h0v3.2h-.53V10.4h.83l1.18,2.9,1.18-2.9h.83Z" transform="translate(-0.02 -0.03)" style="fill:#19164e"/></svg>
					</a>
				</h1>
			<?php else : ?>
				<p class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 167.92 36.47"><defs><linearGradient id="linear-gradient" x1="-112.18" y1="668.28" x2="-111.18" y2="668.28" gradientTransform="matrix(36.07, 0, 0, -36.47, 4046.57, 24389.01)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#00c0f2"/>
							<stop offset="0.13" stop-color="#0bc0e2"/><stop offset="0.39" stop-color="#28c0b9"/><stop offset="0.74" stop-color="#56c077"/><stop offset="1" stop-color="#7bc043"/></linearGradient></defs><title>Eclipse Global Resources</title><path d="M29.92,19.42H17.11a5.48,5.48,0,0,0,5.6,5.13,4.55,4.55,0,0,0,4.36-2.31h2.4c-.89,2.55-3.5,4.21-6.82,4.21a7.65,7.65,0,0,1-7.8-7.5c0-.14,0-.28,0-.42a7.64,7.64,0,0,1,7.42-7.86h.38c4.27,0,7.27,3.32,7.3,7.83A9,9,0,0,1,29.92,19.42ZM17.11,17.7H27.73c-.27-3-2.17-5.13-5.14-5.13A5.44,5.44,0,0,0,17.11,17.7Z" transform="translate(-0.02 -0.03)" style="fill:#19164e"/>
							<path d="M52.56,21.05h2.31a6.85,6.85,0,0,1-7,5.43,7.91,7.91,0,0,1,0-15.81,6.8,6.8,0,0,1,7,5.43H52.56a4.55,4.55,0,0,0-4.75-3.38,5.53,5.53,0,0,0-5.58,5.5c0,.11,0,.23,0,.34a5.55,5.55,0,0,0,5.22,5.87h.35A4.59,4.59,0,0,0,52.56,21.05Z" transform="translate(-0.02 -0.03)" style="fill:#19164e"/>
							<path d="M68.08,26.07H65.85V3h2.2V26.07Z" transform="translate(-0.02 -0.03)" style="fill:#19164e"/>
							<path d="M80.09,5.36a1.55,1.55,0,0,1,3.09,0,1.47,1.47,0,0,1-1.46,1.48h-.11a1.44,1.44,0,0,1-1.52-1.36ZM82.7,26.07H80.5v-15h2.2Z" transform="translate(-0.02 -0.03)" style="fill:#19164e"/><path d="M110.53,18.56a7.8,7.8,0,0,1-7.67,7.92h-.1a7.6,7.6,0,0,1-5.43-2.1v9.73h-2.2v-23h2.2v1.72a7.57,7.57,0,0,1,5.43-2.11,7.78,7.78,0,0,1,7.77,7.8Zm-2.2,0a5.86,5.86,0,0,0-5.8-5.93h0a6,6,0,0,0-5.16,2.79v6.32a6,6,0,0,0,5.16,2.78,5.87,5.87,0,0,0,5.81-5.93Z" transform="translate(-0.02 -0.03)" style="fill:#19164e"/>
							<path d="M122.46,21.41c.44,2.05,2.05,3.29,5,3.29,2.44,0,4.1-1,4.1-2.67,0-1.33-1.07-2.13-2.61-2.37l-3.41-.59c-2.5-.39-4.45-1.49-4.45-4,0-2.7,2.4-4.45,6-4.45,3.05,0,6.23,1.34,6.5,4.78h-2.05c-.3-2-1.93-3-4.45-3-2.37,0-3.82,1-3.82,2.49,0,1.13.8,2,3,2.34l3,.54c2.17.35,4.48,1.3,4.48,4.15s-2.64,4.63-6.29,4.63c-3.88,0-6.5-1.72-7-5.13h2.08Z" transform="translate(-0.02 -0.03)" style="fill:#19164e"/>
							<path d="M158.8,19.42l-.12-.06v.06H146a5.5,5.5,0,0,0,5.6,5.14,4.58,4.58,0,0,0,4.36-2.32h2.4c-.89,2.55-3.5,4.21-6.82,4.21a7.65,7.65,0,0,1-7.8-7.5c0-.14,0-.28,0-.42a7.64,7.64,0,0,1,7.37-7.89h.43c4.27,0,7.27,3.32,7.3,7.83A5,5,0,0,1,158.8,19.42ZM146,17.7h10.62c-.27-3-2.17-5.13-5.14-5.13A5.46,5.46,0,0,0,146,17.7Z" transform="translate(-0.02 -0.03)" style="fill:#19164e"/><path d="M36,22a14.47,14.47,0,1,1,0-7.8H36a18.22,18.22,0,1,0,.06,7.8Z" transform="translate(-0.02 -0.03)" style="fill:url(#linear-gradient)"/><path d="M163.09,10.93h-1.25v3.32h-.53V10.93h-1.24v-.47h3Zm4.85,3.26h-.53V11h0l-1.3,3.2h-.36l-1.3-3.2h0v3.2h-.53V10.4h.83l1.18,2.9,1.18-2.9h.83Z" transform="translate(-0.02 -0.03)" style="fill:#19164e"/>
						</svg>
					</a>
				</p>
			<?php endif; ?>

			</div>
			<!-- .site-branding -->
			<ul class="navbar-nav flex-row">
				<li class="button-nav"><a class="link-button" href="http://localhost/eclipse/opportunities">opportunities</a></li>
				<li><a id="nav-toggle"><span></span></a></li>
			</ul>
			<!-- <a id="nav-toggle" class="mobile-button"><span></span></a> -->
		</header><!-- #masthead -->

		<div id="content">
