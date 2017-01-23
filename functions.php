<?php
/**
 * deliver functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package deliver
 */

if ( ! function_exists( 'deliver_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function deliver_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on deliver, use a find and replace
	 * to change 'deliver' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'deliver', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in two location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'deliver' ),
	) );

	register_nav_menus( array(
		'footer' => esc_html__( 'Footer Menu', 'deliver' ),
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
	// add_theme_support( 'custom-background', apply_filters( 'deliver_custom_background_args', array(
	// 	'default-color' => 'ffffff',
	// 	'default-image' => '',
	// ) ) );

	// Add theme support for selective refresh for widgets.
	//add_theme_support( 'customize-selective-refresh-widgets' );


	
}
endif;
add_action( 'after_setup_theme', 'deliver_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function deliver_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'deliver_content_width', 640 );
}
add_action( 'after_setup_theme', 'deliver_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function deliver_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'deliver' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'deliver' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name' => 'Footer Area 1',
		'id' => 'footer-area-1',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => 'Footer Area 2',
		'id' => 'footer-area-2',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => 'Footer Area 3',
		'id' => 'footer-area-3',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
}
add_action( 'widgets_init', 'deliver_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function deliver_scripts() {
	wp_enqueue_style( 'deliver-style', get_stylesheet_uri() );

	wp_enqueue_script( 'deliver-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'deliver-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'colorbox', get_template_directory_uri() . '/assets/js/jquery.colorbox.js', array(), false, true );

	wp_enqueue_script( 'bxslider', get_template_directory_uri() . '/assets/js/jquery.bxslider.min.js', array(), false, true );

	wp_enqueue_script( 'theme', get_template_directory_uri() . '/assets/js/theme.js', array( 'jquery' ), '1.0.0' );

	wp_enqueue_script( 'skrollr', get_template_directory_uri() . '/assets/js/skrollr.min.js', array(), false, true );





	wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');

	wp_enqueue_style( 'colorboxcss', get_template_directory_uri() . '/assets/css/colorbox.css');

	wp_enqueue_style( 'bxslider', get_template_directory_uri() . '/assets/css/jquery.bxslider.css');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'deliver_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/includes/functions/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/functions/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
//require get_template_directory() . '/includes/functions/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/functions/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
//require get_template_directory() . '/includes/functions/jetpack.php';


function footer_script(){ ?>
<script>
    jQuery(document).ready(function() { 
       jQuery(".group1").colorbox({rel:'group1'});
    });

    jQuery(document).ready(function(){
	  jQuery('.bxslider').bxSlider({
	  	auto: true,
  		autoControls: true
	  });
	});
	
</script>




<?php
}
 
add_action('wp_footer', 'footer_script'); ?>
