<?php
/**
 * lix functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lix
 */


ini_set('UPLOAD_MAX_SIZE', '64M'); 
ini_set('POST_MAX_SIZE', '64M'); 
ini_set('MAX_EXECUTION_SITE', '300');


if ( ! function_exists( 'lix_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function lix_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on lix, use a find and replace
	 * to change 'lix' to the name of your theme in all the template files.
	 */
    //CSS
 //   add_editor_style( array( 'css/editor-style.css', twentysixteen_fonts_url() ) );

	load_theme_textdomain( 'lix', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'lix' ),
		'menu' => __( 'header_menu', 'lix' ),
		'left_menu' => __( 'left_menu', 'lix' )
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
	add_theme_support( 'custom-background', apply_filters( 'lix_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'lix_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lix_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lix_content_width', 640 );
}
add_action( 'after_setup_theme', 'lix_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lix_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'lix' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'lix' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'lix_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

//wp_enqueue_style( 'main-style', get_stylesheet_uri() );
function lix_scripts() {
    // Load our main stylesheet.
     wp_enqueue_style( 'lix-style', get_stylesheet_uri(), array(), null );
	 wp_enqueue_script( 'lix-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );	
	 wp_enqueue_script( 'lix-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	 wp_enqueue_script( 'new', get_template_directory_uri() . '/js/new.js', array( 'jquery' ) );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lix_scripts');

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




function my_jquery_method(){
 wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'my_jquery_method' );
/*1*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
add_action('wp_enqueue_scripts', 'cssmenumaker_scripts_styles' );
function cssmenumaker_scripts_styles() {
wp_enqueue_style( 'cssmenu-styles', get_template_directory_uri() . '/cssmenu/styles.css');
wp_enqueue_script('cssmenu-scripts', get_template_directory_uri() . '/cssmenu/script.js');
}

class CSS_Menu_Maker_Walker extends Walker {

var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );

function start_lvl( &$output, $depth = 0, $args = array() ) {
$indent = str_repeat("\t", $depth);
$output .= "\n$indent

\n";
}
function end_lvl( &$output, $depth = 0, $args = array() ) {
$indent = str_repeat("\t", $depth);
$output .= "$indent

\n";
}

function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

global $wp_query;
$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
$class_names = $value = '';
$classes = empty( $item->classes ) ? array() : (array) $item->classes;

/* Add active class */
if(in_array('current-menu-item', $classes)) {
$classes[] = 'active';
unset($classes['current-menu-item']);
}

/* Check for children */
$children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
if (!empty($children)) {
$classes[] = 'has-sub';
}

$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

$output .= $indent . '
';

$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) .'"' : '';
$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) .'"' : '';
$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) .'"' : '';
$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';

$item_output = $args->before;
$item_output .= '';
$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
$item_output .= '';
$item_output .= $args->after;

$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
}

function end_el( &$output, $item, $depth = 0, $args = array() ) {
$output .= "

\n";
}
}

