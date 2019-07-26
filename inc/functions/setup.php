<?php 

/**
 *
 * @global int $content_width
 */
function necrowolf_theme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'necrowolf_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'necrowolf_theme_content_width', 0 );

if ( ! function_exists( 'necrowolf_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function necrowolf_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on necrowolf-theme, use a find and replace
		 * to change 'necrowolf-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'necrowolf-theme', get_template_directory() . '/languages' );

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
		add_theme_support( 'title-tag' );
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu_superior' => esc_html__( 'Menu superior theme Necrowolf', 'necrowolf-theme' ),
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
		add_theme_support( 'custom-background', apply_filters( 'necrowolf_theme_custom_background_args', array(
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

/**
 * Carga de javascripts y estilos.
 */
function necrowolf_theme_scripts() {
	if( !is_admin() ) {
		wp_enqueue_style( 'necrowolf-theme-bootstrap', get_template_directory_uri() . '/css/bootstrap.css', false, '4.4.1');
		wp_enqueue_style( 'necrowolf-theme-font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array( 'necrowolf-theme-bootstrap' ), '20120208');
		wp_enqueue_style( 'necrowolf-theme-owl', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.min.css', array( 'necrowolf-theme-font-awesome' ), '20120208');
		wp_enqueue_style( 'necrowolf-theme-style', get_template_directory_uri() . '/style.css', array( 'necrowolf-theme-owl' ), '20120208' );
		
		wp_enqueue_style( 'necrowolf-theme-responsivas', get_template_directory_uri() . '/css/responsivas.css', array( 'necrowolf-theme-style' ), '20120208');

		wp_enqueue_script( 'necrowolf-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

		wp_enqueue_script( 'necrowolf-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
		
		wp_enqueue_script( 'jquery-necrowolf', get_template_directory_uri() . '/js/jquery-3.2.1.min.js');
		wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.js', array( 'jquery-necrowolf' ), '20120208', true );
		wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array( 'popper' ), '20120208', true );
		wp_enqueue_script( 'stellar-necrowolf', get_template_directory_uri() . '/js/stellar.js', array( 'bootstrap-js' ), '20120208', true );
		wp_enqueue_script( 'timer-necrowolf', get_template_directory_uri() . '/js/timer.js', array( 'stellar-necrowolf' ), '20120208', true );
		wp_enqueue_script( 'owl-necrowolf', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.min.js', array( 'timer-necrowolf' ), '20120208', true );
		wp_enqueue_script( 'del-tema', get_template_directory_uri() . '/js/del-tema.js', array( 'owl-necrowolf' ), '20120208', true );

	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
?>