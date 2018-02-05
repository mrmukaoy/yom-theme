<?php
/**
 * yom-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package yom-theme
 */

if ( ! function_exists( 'yom_setup' ) ) {
	function yom_setup() {
		/*
		 * Make theme available for translation.
		 */
		load_theme_textdomain( 'yom', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
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
			'primary' => esc_html__( 'Primary', 'yom' ),
		) );

		// Enable support for Post Formats.
		add_theme_support( 'post-formats', array(
			// 'gallery',
			'quote',
			'status',
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
		add_theme_support( 'custom-background', apply_filters( 'yom_custom_background_args', array(
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
} // endif;
add_action( 'after_setup_theme', 'yom_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function yom_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'yom_content_width', 640 );
}
add_action( 'after_setup_theme', 'yom_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function yom_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'yom' ),
		'id'            => 'sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'yom' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'yom' ),
		'id'            => 'footer',
		'description'   => esc_html__( 'Add widgets here.', 'yom' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'yom_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function yom_scripts() {
	$this_theme = wp_get_theme();
	$this_version = $this_theme->get( 'Version' );

	wp_enqueue_style( 'yom-style', get_stylesheet_uri(), array(), $this_version );

	// Base Googe Font style + script.
	wp_register_style( 'googleFonts', 'https://fonts.googleapis.com/css?family=Neuton|Kalam' );
	wp_enqueue_style( 'googleFonts' );

	wp_enqueue_script( 'yom-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'yom-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'yom_scripts' );

/**
 * Customize the title tag
 */
function yom_document_title_separator( $sep ) {
	// separator
	$sep = '|';
	return $sep;
}
add_filter( 'document_title_separator', 'yom_document_title_separator' );

function yom_override_post_title( $title ) {
	// If on the home or front page, skip the page title.
	if ( is_home() || is_front_page() ) {
		$title['title'] = '';
		$title['site'] = get_bloginfo( 'name' );
	}
	// Remove the site "tagline" altogether
	$title['tagline'] = '';
	return $title;
}
add_filter( 'document_title_parts', 'yom_override_post_title' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/_inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/_inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/_inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/_inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/_inc/jetpack.php';
}
