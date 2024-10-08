<?php

/**
 * blog-site-template-master functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package blog-site-template-master
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function blog_site_template_master_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on blog-site-template-master, use a find and replace
		* to change 'blog-site-template-master' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('blog-site-template-master', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	//Custom Menu
	register_nav_menus(
		array(
			'home-menu' => esc_html__('Home Menu')
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'blog_site_template_master_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'blog_site_template_master_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function blog_site_template_master_content_width()
{
	$GLOBALS['content_width'] = apply_filters('blog_site_template_master_content_width', 640);
}
add_action('after_setup_theme', 'blog_site_template_master_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function blog_site_template_master_widgets_init()
{
	register_sidebar(
		array(
			'name' 				=> esc_html__('Footer Sidebar', 'blog-site-template-master'),
			'id' 				=> 'footer_widget',
			'description' 		=> esc_html__('Add widget here from footer', 'blog-site-template-master'),
			'before_title'		=> '<div class="footer__title footer__nav-title">
										<h5 class="footer__title-text">',
			'after_title'		=> '</h5>
									</div>',
		)
	);
	register_sidebar(
		array(
			'name' 				=> esc_html__('Footer Client Email', 'blog-site-template-master'),
			'id' 				=> 'footer_client_email_widget',
			'description' 		=> esc_html__('Display the Email from Footer', 'blog-site-template-master'),
		)
	);
}
add_action('widgets_init', 'blog_site_template_master_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function blog_site_template_master_scripts()
{
	$losciend_version = wp_get_theme()->get('Version');
	//Styles
	wp_enqueue_style('blog-site-template-master-style', get_stylesheet_uri(), array('losciend-bootstrap'), _S_VERSION);
	wp_style_add_data('blog-site-template-master-style', 'rtl', 'replace');

	wp_register_style('losciend-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '5.1.3');
	wp_enqueue_style('losciend-bootstrap');

	wp_register_style('losciend-animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '4.1.1');
	wp_enqueue_style('losciend-animate');

	wp_register_style('losciend-utils', get_template_directory_uri() . '/assets/css/utils.css', array(), $losciend_version);
	wp_enqueue_style('losciend-utils');

	wp_register_style('losciend-main-page', get_template_directory_uri() . '/assets/css/components/main-page.css', array(), $losciend_version);
	wp_enqueue_style('losciend-main-page');

	wp_register_style('services', get_template_directory_uri() . '/assets/css/components/services-page.css', array(), $losciend_version);
	wp_enqueue_style('services');

	wp_register_style('custom-form', get_template_directory_uri() . '/assets/css/components/custom-form.css', array(), $losciend_version);
	wp_enqueue_style('custom-form');

	wp_register_style('losciend-font-poppins', 'https://api.fontshare.com/v2/css?f[]=poppins@300,400,500,600,800,900&display=swap', array(), '2');
	wp_enqueue_style('losciend-font-poppins');

	//Scripts
	wp_register_script('losciend-Jquery.min', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '3.6.0', true);
	wp_enqueue_script('losciend-Jquery.min');

	wp_register_script('losciend-main', get_template_directory_uri() . '/assets/js/main.js', array(), $losciend_version, true);
	wp_enqueue_script('losciend-main');

	wp_register_script('losciend-anime.min', get_template_directory_uri() . '/assets/js/anime.min.js', array(), $losciend_version, true);
	wp_enqueue_script('losciend-anime.min');

	wp_register_script('losciend-wow.min', get_template_directory_uri() . '/assets/js/wow.min.js', array(), $losciend_version, true);
	wp_enqueue_script('losciend-wow.min');

	wp_enqueue_script('blog-site-template-master-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'blog_site_template_master_scripts');

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Adding ACF Custom Widgets for Footer Pages and Posts.
 */
include_once get_template_directory() . '/inc/plugins/acf/custom-widgets-footer-post-page.php';

/**
 * Adding ACF Custom Widgets for Footer Links
 */
include_once get_template_directory() . '/inc/plugins/acf/custom-widgets-links.php';
