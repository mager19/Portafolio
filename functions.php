<?php
/**
 * wiltonwings functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wiltonwings
 */

if ( ! function_exists( 'wiltonwings_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wiltonwings_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on wiltonwings, use a find and replace
	 * to change 'wiltonwings' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wiltonwings', get_template_directory() . '/languages' );

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
	add_image_size( 'imagen-post-actual', 1280, 400, true );
	add_image_size( 'imagen-post-anteriores', 400, 300, true );
	add_image_size( 'imagen-portafolio-destacada', 1280, 100, true );
	add_image_size( 'imagen-portafolio-secundaria', 600, 200, true );
	add_image_size( 'imagen-post-testimonio', 1280, 550, true );

	// This theme uses wp_nav_menu() in one location.
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'principal' => esc_html__( 'principal', 'portafolio' ),
		
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
	add_theme_support( 'custom-background', apply_filters( 'wiltonwings_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'wiltonwings_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wiltonwings_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wiltonwings_content_width', 640 );
}
add_action( 'after_setup_theme', 'wiltonwings_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wiltonwings_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wiltonwings' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wiltonwings' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wiltonwings_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wiltonwings_scripts() {
	wp_enqueue_style( 'portafolio-style', get_stylesheet_uri() );

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css' );
	wp_enqueue_style( $handle, $src, $deps, $ver, $media );
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Hind|Titillium+Web', false );
	
	wp_enqueue_script( 'wiltonwings-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, 'all' );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), true, 'all' );
	wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/js/slick.min.js', array(), false, 'all' );	
	wp_enqueue_script( 'scroll', get_template_directory_uri() . '/js/jquery-scrolltofixed-min.js', array(), true, 'all' );

	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js');


	wp_enqueue_script( 'wiltonwings-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wiltonwings_scripts' );

function wpdocs_custom_excerpt_length() {
    return 50;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length' );


function new_excerpt_more( $more ) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

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
