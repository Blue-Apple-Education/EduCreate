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

/* Admin Menu Settings */
require_once get_stylesheet_directory() . "/config/admin-menu.php";
// require_once(get_stylesheet_directory() . "/config/dashboard.php");

/* This is where you can register custom post types. */
function register_post_types()
{
    // GET CPTUI Fields
    require "config/cptui-settings.php";
}

/** This is where you can register custom taxonomies. */
function register_taxonomies()
{
}

function theme_supports()
{
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
}

/** This Would return 'foo bar!'.
 *
 * @param string $text being 'foo', then returned 'foo bar!'.
 */
function myfoo($text)
{
    $text .= ' bar!';
    return $text;
}