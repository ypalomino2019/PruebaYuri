<?php
/**
 * prueba1 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package prueba1
 */

if ( ! function_exists( 'prueba1_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function prueba1_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on prueba1, use a find and replace
		 * to change 'prueba1' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'prueba1', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'prueba1' ),
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
		add_theme_support( 'custom-background', apply_filters( 'prueba1_custom_background_args', array(
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
add_action( 'after_setup_theme', 'prueba1_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function prueba1_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'prueba1_content_width', 640 );
}
add_action( 'after_setup_theme', 'prueba1_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function prueba1_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'prueba1' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'prueba1' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'prueba1_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function prueba1_scripts() {

	wp_enqueue_style( 'prueba1-style', get_stylesheet_uri() );

	wp_enqueue_script( 'prueba1-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
}
add_action( 'wp_enqueue_scripts', 'prueba1_scripts' );

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

function prueba1_bootstrap() {

	//   <!-- Main Stylesheet File -->

		// <!-- Bootstrap CSS File -->
		wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/lib/animate/animate.min.css', 
		array(), wp_get_theme()->get('5.2.2'));

		wp_enqueue_style( 'custom-style1', get_stylesheet_directory_uri() . '/lib/font-awesome/css/font-awesome.min.css', 
		array(), wp_get_theme()->get('1.0.0'));

		wp_enqueue_style( 'custom-style2', get_stylesheet_directory_uri() . '/lib/ionicons/css/ionicons.min.css', 
		array(), wp_get_theme()->get('1.0.0'));

		wp_enqueue_style( 'custom-style3', get_stylesheet_directory_uri() . '/lib/magnific-popup/magnific-popup.css', 
		array(), wp_get_theme()->get('1.0.0'));
		
		// wp_enqueue_style( 'custom-style4', get_stylesheet_directory_uri() . 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', 
		// array(), '4.1.3');


	//   <!-- Google Fonts -->

	// wp_enqueue_style( 'custom-style7', get_stylesheet_directory_uri() . 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i', 
	// array(), wp_get_theme()->get('1.0.0'));
  

	//   <!-- Bootstrap CSS File -->
	wp_enqueue_style( 'custom-style8', get_stylesheet_directory_uri() . '/lib/bootstrap/css/bootstrap.min.css', 
	array(), wp_get_theme()->get('4.3.1'));
	
}
add_action( 'wp_enqueue_scripts', 'prueba1_bootstrap' );

function dcms_insertar_js(){
    
    wp_register_script('miscript', get_stylesheet_directory_uri(). '/lib/jquery/jquery.min.js', array('jquery'), '1', true );
	wp_enqueue_script('miscript');
	
	wp_register_script('miscript2', get_stylesheet_directory_uri(). '/lib/jquery/jquery-migrate.min.js', array('jquery'), '1', true );
	wp_enqueue_script('miscript');
	
	wp_register_script('miscript3', get_stylesheet_directory_uri(). '/lib/bootstrap/js/bootstrap.bundle.min.js', array('bootstrap'), '1', true );
	wp_enqueue_script('miscript');
	
	wp_register_script('miscript4', get_stylesheet_directory_uri(). '/lib/easing/easing.min.js', array('jquery'), '1', true );
	wp_enqueue_script('miscript');
	
	wp_register_script('miscript5', get_stylesheet_directory_uri(). 'lib/wow/wow.min.js', array('jquery'), '1', true );
	wp_enqueue_script('miscript');
	
	wp_register_script('miscript6', get_stylesheet_directory_uri(). '/lib/superfish/hoverIntent.js', array('jquery'), '1', true );
	wp_enqueue_script('miscript');
	
	wp_register_script('miscript7', get_stylesheet_directory_uri(). '/lib/superfish/superfish.min.js', array('jquery'), '1', true );
	wp_enqueue_script('miscript');
	
	wp_register_script('miscript8', get_stylesheet_directory_uri(). '/lib/magnific-popup/magnific-popup.min.js', array('jquery'), '1', true );
	wp_enqueue_script('miscript');
	
	wp_register_script('miscript9', get_stylesheet_directory_uri(). 'contactform/contactform.js', array('jquery'), '1', true );
    wp_enqueue_script('miscript');
	
	wp_register_script('miscript10', get_stylesheet_directory_uri(). 'js/main.js', array('jquery'), '1', true );
    wp_enqueue_script('miscript');
}

add_action("wp_enqueue_scripts", "dcms_insertar_js");
