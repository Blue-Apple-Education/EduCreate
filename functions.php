<?php /* Custom EDUCREATE Functions */

// Link Global Styles
    /* Global Styles */
    wp_enqueue_style(
        'global-styles',
        get_template_directory_uri() . ('/assets/css/global-styles.css'),
        'plugin-styles',
        get_template_directory_uri() . ('/assets/css/plugin-styles.min.css')
    );


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

// navigation Menus
require_once(get_stylesheet_directory() . "/config/theme-menus.php");

// Animate Characters
require_once(get_stylesheet_directory() . "/config/animate-characters.php");

// Load Javascript

    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js');
    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/lib.js');

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




function selected_class($classes, $item)
{
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'active';
    }
    return $classes;
}


/* Hex2rgba */
function hex2rgba($color, $opacity = false)
{
    $default = 'rgb(0,0,0)';

    //Return default if no color provided
    if (empty($color)) {
        return $default;
    }

    //Sanitize $color if "#" is provided
    if ($color[0] == '#') {
        $color = substr($color, 1);
    }

    //Check if color has 6 or 3 characters and get values
    if (strlen($color) == 6) {
        $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
    } elseif (strlen($color) == 3) {
        $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
    } else {
        return $default;
    }

    //Convert hexadec to rgb
    $rgb =  array_map('hexdec', $hex);

    //Check if opacity is set(rgba or rgb)
    if ($opacity) {
        if (abs($opacity) > 1) {
            $opacity = 1.0;
        }
        $output = 'rgba('.implode(",", $rgb).','.$opacity.')';
    } else {
        $output = 'rgb('.implode(",", $rgb).')';
    }

    //Return rgb(a) color string
    return $output;
}
