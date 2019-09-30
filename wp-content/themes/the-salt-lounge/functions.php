<?php
/**
 * The Salt Lounge functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package The_Salt_Lounge
 */

if ( ! function_exists( 'the_salt_lounge_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function the_salt_lounge_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on The Salt Lounge, use a find and replace
		 * to change 'the-salt-lounge' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'the-salt-lounge', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'the-salt-lounge' ),
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
		add_theme_support( 'custom-background', apply_filters( 'the_salt_lounge_custom_background_args', array(
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
add_action( 'after_setup_theme', 'the_salt_lounge_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function the_salt_lounge_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'the_salt_lounge_content_width', 640 );
}
add_action( 'after_setup_theme', 'the_salt_lounge_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function the_salt_lounge_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'the-salt-lounge' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'the-salt-lounge' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'the_salt_lounge_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function the_salt_lounge_scripts() {
	wp_enqueue_style( 'the-salt-lounge-style', get_stylesheet_uri() );
	
	wp_enqueue_script('jquery');
			
	wp_enqueue_script('salt-lounge-images-loaded', '//unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js', array(), '20151215', true);
	
	if(is_front_page()) {

	wp_enqueue_script('salt-lounge-slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), '20151215', true);
	
	}
	
	wp_enqueue_script( 'the-salt-lounge-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'salt-lounge-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '20151215', true );
	
	wp_enqueue_script( 'jquery-ui-accordion' );
	
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'the_salt_lounge_scripts' );

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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Enqueue fonts.
 */
function wpb_add_google_fonts() {
wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Lato|Varela+Round|Shrikhand|Saira+Condensed|Bad+Script', false ); 
}
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );


// Remove Top Admin Bar
add_filter('show_admin_bar', '__return_false');

// ACF Options
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();	
}

// Image Sizes
add_image_size( 'service-image', 740, 493, true);
add_image_size( 'event-pic', 1000, 600, true);
add_image_size( 'staff', 300, 400, true);
add_image_size( 'profile-pic', 400, 400, true);
add_image_size( 'other-services', 500, 250, true);


/*
function revcon_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Events';
    $submenu['edit.php'][5][0] = 'Events';
    $submenu['edit.php'][10][0] = 'Add Event';
    $submenu['edit.php'][16][0] = 'Events Tags';
}
function revcon_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Events';
    $labels->singular_name = 'Event';
    $labels->add_new = 'Add Event';
    $labels->add_new_item = 'Add Events';
    $labels->edit_item = 'Edit Event';
    $labels->new_item = 'Event';
    $labels->view_item = 'View Event';
    $labels->search_items = 'Search Events';
    $labels->not_found = 'No Events found';
    $labels->not_found_in_trash = 'No Events found in Trash';
    $labels->all_items = 'All Events';
    $labels->menu_name = 'Events';
    $labels->name_admin_bar = 'Events';
}
 
add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );
*/


function benefits_shortcode() {
        if( have_rows('benefits', '6') ):
	            $benefits .= '<ul class="benefits">';
            while ( have_rows('benefits', '6') ) : the_row();
		        	$benefits .= '<li><span class="pink-diamond"><i class="fas fa-check-circle"></i></span>'
		        	. get_sub_field('single_benefit', '6'). '</li>';
            endwhile;
                $benefits .= '</ul> ';
        endif;
    return $benefits;       
}
add_shortcode('benefits', 'benefits_shortcode');



// Zenodi
function is_wplogin(){
    $ABSPATH_MY = str_replace(array('\\','/'), DIRECTORY_SEPARATOR, ABSPATH);
    return ((in_array($ABSPATH_MY.'wp-login.php', get_included_files()) || in_array($ABSPATH_MY.'wp-register.php', get_included_files()) ) || (isset($_GLOBALS['pagenow']) && $GLOBALS['pagenow'] === 'wp-login.php') || $_SERVER['PHP_SELF']== '/wp-login.php');
}

if ( !is_admin() && !is_wplogin() ) {
	include('OpportunityAPI.php');
}