<?php
/* Change Menu */
function wpse_custom_menu_order($menu_ord)
{
    if (!$menu_ord) {
        return true;
    }

    return array(
        // Dashboards
        'index.php',

        // WP Customisation
        'upload.php',
        'simple_history_page',

        // PAGE CONTENT
        'nestedpages',
        'edit.php?post_type=cpt_cta_content',

        // BLOG
        'edit.php?post_type=cpt_newsevents',
        'edit.php?post_type=cptpolicies',
        'edit.php?post_type=cptcta',

        // Page Content
        'edit.php?post_type=cptstaff',
        'edit.php?post_type=cptcareers',
        'edit.php?post_type=cptpolicies',
        'edit.php?post_type=ajde_events',
        'mec-intro',
        'wpcf7',
        'es_dashboard',

        // THEME SETTINGS
        'wpens-list',
        'themes.php',
        'plugins.php',
        'users.php',
        'tools.php',
        'options-general.php',
        'theme-settings',

        // THEME PLUGINS
        'activity_log_page',
        'edit.php?post_type=acf-field-group',
        'cptui_main_menu',
        'video-tutorials',
        'wps_overview_page',
        'monsterinsights_reports',

        // SITE PLUGINS
        'wpseo_dashboard',
        'edit.php?post_type=cookielawinfo',
        'smush',
        'separator-last',
        'eventon',
        'aiowpsec',
        'itsec',
    );
}
add_filter('custom_menu_order', 'wpse_custom_menu_order', 10, 1);
add_filter('menu_order', 'wpse_custom_menu_order', 10, 1);

/**
 * Remove menu items for all users
 */

function remove_menu_pages()
{
    $user = wp_get_current_user();
    $user_email = $user->user_email;
    if (!in_array($user_email, array(
        'stefan@blueappleuk.com',
        'david@blueappleuk.com',
        'blueapplemaster@blueappleuk.com',
        'dean@blueappleuk.com',
        'mark@blueappleuk.com'
    ), true)) {

        // if ( $cpt_schools === true ) {
        //     remove_menu_page( 'edit.php?post_type=cpt_schools');
        // }

        // remove_menu_page( 'edit.php?post_type=acf-field-group' );
        // remove_menu_page( 'admin.php?page=acf-options-theme-settings' );
        // remove_menu_page( 'edit.php?post_type=cookielawinfo' );

        // CUSTOM MENU
        // remove_menu_page( 'index.php');
        // remove_menu_page( 'separator1');
        // remove_menu_page( 'upload.php');
        // remove_menu_page( 'nav-menus.php');

        // CPT's
        // remove_menu_page( 'edit.php?post_type=cpt_staff');
        // remove_menu_page( 'edit.php?post_type=cpt_careers');
        // remove_menu_page( 'edit.php?post_type=cpt_policies');
        // remove_menu_page( 'edit.php?post_type=cpt_schools');
        // remove_menu_page( 'edit.php?post_type=cpt_newsevents');
        // remove_menu_page( 'edit.php?post_type=cpt_newsletter');
        // remove_menu_page( 'edit.php?post_type=ajde_events');
        // remove_menu_page( 'wpcf7');

        // THEME SETTINGS
        remove_menu_page('themes.php');
        remove_menu_page('plugins.php');
        // remove_menu_page( 'users.php');
        remove_menu_page('tools.php');
        remove_menu_page('options-general.php');
        // remove_menu_page( 'theme-settings');
        // remove_menu_page('edit-comments.php');

        // THEME PLUGINS
        remove_menu_page('edit.php?post_type=acf-field-group');
        remove_menu_page('cptui_main_menu');

        // SITE PLUGINS
        // remove_menu_page( 'wpseo_dashboard');
        remove_menu_page('edit.php?post_type=cookielawinfo');
        remove_menu_page('smush');
        remove_menu_page('separator-eventon');
        remove_menu_page('separator2');
        remove_menu_page('separator-last');
        remove_menu_page('eventon');
        remove_menu_page('aiowpsec');
        remove_menu_page('itsec');
        remove_menu_page('theme-my-login');
        remove_menu_page('wpcf7');
        remove_menu_page('sucuriscan');
    }


    // OLD CPT 
    remove_menu_page('edit.php?post_type=cpt_page_content');
    remove_menu_page('edit.php?post_type=cpt_sidebar_content');
    remove_menu_page('wpforms-overview');
};

add_action('admin_menu', 'remove_menu_pages', 999);