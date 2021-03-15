<?php /* Custom EDUCREATE Functions */

// Link Global Styles
function my_custom_css_styles()
{
    /* Global Styles */
    wp_enqueue_style(
        'global-styles',
        get_template_directory_uri() . ('/assets/css/global-styles.css')
    );
}
add_action('wp_enqueue_scripts', 'my_custom_css_styles');

// Acf Settings
require_once get_stylesheet_directory() . "/config/acf-settings.php";
require_once get_stylesheet_directory() . "/config/acf-layout-images.php";
// require_once(get_stylesheet_directory() . "/config/acf-layouts.php");

// WP-ADMIN THEME SUPPORT
require_once get_stylesheet_directory() . "/config/admin-menu.php";

// Plugin Installation and Activaton
require_once get_template_directory() . '/lib/educreate-plugins.php';

// GET CPTUI Fields
require get_stylesheet_directory() . "/config/cptui-settings.php";

// UIKIT menu WALKER generation
function register_navwalker()
{
    require_once get_template_directory() . '/views/partial/navigation/bootstrapMenuWalker.php';
}
add_action('after_setup_theme', 'register_navwalker');


// Load Javascript
function load_js_script()
{
    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js');
}
add_action('wp_enqueue_scripts', 'load_js_script');



    /*
    * LOAD THIRD PARTY SCRIPTS
    */
    require_once(get_stylesheet_directory() . "/assets/scripts/aq_resizer.php");
    require_once(get_stylesheet_directory() . "/assets/scripts/aq_resizer_srcset.php");


// require_once(get_stylesheet_directory() . "/config/dashboard.php");

/* Custom post types. */
function register_post_types()
{
    // GET CPTUI Fields
    require "config/cptui-settings.php";
}

/** This is where you can register custom taxonomies. */
function register_taxonomies()
{
}

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

/*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
add_theme_support(
    'html5',
    array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    )
);

/*
     * Enable support for Post Formats.
     *
     * See: https://codex.wordpress.org/Post_Formats
     */
add_theme_support(
    'post-formats',
    array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'audio',
    )
);

add_theme_support('menus');


/** This Would return 'foo bar!'.
 *
 * @param string $text being 'foo', then returned 'foo bar!'.
 */
function myfoo($text)
{
    $text .= ' bar!';
    return $text;
}

function admin_bar()
{
    if (is_user_logged_in()) {
        add_filter('show_admin_bar', '__return_true', 1000);
    }
}
add_action('init', 'admin_bar');


// Navigation Menus
if (function_exists('register_nav_menus')) {
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu', 'EduCreate'),
            'header-menu' => __('Header Menu', 'EduCreate'),
            'modal-menu' => __('mobile Modal menu', 'EduCreate'),
            'off-canvas-menu' => __('offCanvas menu', 'EduCreate'),
            'footer-menu' => __('Footer Menu', 'EduCreate'),
        )
    );
}




function selected_class($classes, $item)
{
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'active';
    }
    return $classes;
}
