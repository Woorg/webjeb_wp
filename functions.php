<?php
/**
 * webjeb functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package webjeb
 */

if ( ! function_exists( 'webjeb_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function webjeb_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on webjeb, use a find and replace
	 * to change 'webjeb' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'webjeb', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'webjeb' ),
	) );

	register_nav_menus( array(
		'menu-2' => esc_html__( 'Portfolio', 'webjeb' ),
	) );

	register_nav_menus( array(
		'menu-3' => esc_html__( 'Blog', 'webjeb' ),
	) );

	register_nav_menus( array(
		'menu-4' => esc_html__( 'Portfolio type of site', 'webjeb' ),
	) );

	add_filter('show_admin_bar','__return_false');

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
	add_theme_support( 'custom-background', apply_filters( 'webjeb_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'webjeb_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function webjeb_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'webjeb_content_width', 640 );
}
add_action( 'after_setup_theme', 'webjeb_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function webjeb_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'webjeb' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'webjeb' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'webjeb_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function webjeb_scripts() {
	wp_enqueue_style( 'webjeb-style', get_stylesheet_uri() );
	wp_enqueue_style( 'app', get_template_directory_uri() . '/assets/styles/app.min.css' );

	wp_enqueue_script('shiv', get_template_directory_uri() . '/assets/scripts/html5shiv.js');
	wp_enqueue_script('jquery', array(''), '', true);
	wp_enqueue_script('app', get_template_directory_uri() . '/assets/scripts/app.min.js', array('jquery'), '', true);


	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'webjeb_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/**
 * Customr code
 */

// remove unnecessary words from title

add_filter( 'get_the_archive_title', function ($title) {

	if ( is_category() ) {

			$title = single_cat_title( '', false  );

		} elseif ( is_tag() ) {

			$title = single_tag_title( '', false  );

		} elseif ( is_author() ) {

			$title = '<span class="vcard">' . get_the_author() . '</span>' ;

		} elseif ( is_archive() ) {

			$title = single_tag_title( '', false  );

		}

	return $title;

});

// Add options page

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

}

// disable top bar

add_filter('show_admin_bar', '__return_false');


// excerpt

// function webjeb_excerpt_length($length) {
// 	return 100;
// }
// add_filter('excerpt_length', 'webjeb_excerpt_length');

function webjeb_excerpt_more($more) {
	global $post;
	return '<div class="article__more"><a href="'. get_permalink($post->ID) . '" class="article__more-link">подробнее</a></div>';
}
add_filter('excerpt_more', 'webjeb_excerpt_more');






