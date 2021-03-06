<?php
/**
 * eclipse functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package eclipse
 */

if ( ! function_exists( 'eclipse_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function eclipse_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on eclipse, use a find and replace
		 * to change 'eclipse' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'eclipse', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'eclipse' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'eclipse_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'eclipse_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function eclipse_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'eclipse_content_width', 640 );
}
add_action( 'after_setup_theme', 'eclipse_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function eclipse_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'eclipse' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'eclipse' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Job Sidebar', 'eclipse' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'eclipse' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'eclipse_widgets_init' );




// function add_defer_attribute($tag, $handle) {
// 	// add script handles to the array below
// 	$scripts_to_defer = array('font-awesome');

// 	foreach($scripts_to_defer as $defer_script) {
// 	   if ($defer_script === $handle) {
// 		  return str_replace(' src', ' defer="defer" src', $tag);
// 	   }
// 	}
// 	return $tag;
//  }

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

/**
 * Enqueue scripts and styles.
 */
function eclipse_scripts() {
	wp_enqueue_style( 'eclipse-main', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '', 'all' );
	wp_enqueue_style( 'nunito-font', 'https://fonts.googleapis.com/css?family=Nunito:300,400,400i,700,800,900');
	// wp_enqueue_style( 'eclipse-css', get_template_directory_uri() . '/css/eclipse.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '', 'all');
	wp_enqueue_style( 'eclipse', get_stylesheet_uri(), array(), '5.1', 'all' );
	wp_enqueue_script( 'font-awesome', 'https://use.fontawesome.com/releases/v5.0.8/js/all.js', array(), '1.0', true );

	wp_enqueue_script( 'eclipse-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	//wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBfhGal5eycVtPAe3PTex49a_53ffncxEU&callback=initMap', array('jquery'), '1.0', true);
	wp_enqueue_script( 'aos-script', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '1.0', true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.1', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'eclipse_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


// WordPress Admin Bar
//de-register _admin_bar_bump_cb default behavior
function my_filter_head() {
	remove_action('wp_head', '_admin_bar_bump_cb');
  }
  add_action('get_header', 'my_filter_head');
