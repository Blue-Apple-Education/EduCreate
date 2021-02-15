<?php

/**
 * Post Type: Newsfeed.
 */
$newsfeed_labels = [
    "name" => __("Newsfeed", "custom-post-type-ui"),
    "singular_name" => __("Newsfeed", "custom-post-type-ui"),
];

$newsfeed_args = [
    "label" => __("Newsfeed", "custom-post-type-ui"),
    "labels" => $newsfeed_labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => ["slug" => "news/newsfeed", "with_front" => true],
    "query_var" => true,
    "menu_position" => 35,
    "menu_icon" => "dashicons-format-aside",
    "supports" => ["title"],
];

register_post_type("cptnewsevents", $newsfeed_args);


/**
 * Post Type: Careers.
 */
$careers_labels = [
    "name" => __("Careers", "custom-post-type-ui"),
    "singular_name" => __("Career", "custom-post-type-ui"),
];

$careers_args = [
    "label" => __("Careers", "custom-post-type-ui"),
    "labels" => $careers_labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => true,
    "rewrite" => ["slug" => "careers", "with_front" => true],
    "query_var" => true,
    "menu_icon" => "dashicons-admin-users",
    "supports" => ["title"],
];

register_post_type("cptcareers", $careers_args);

/**
 * Post Type: Staff.
 */

$staff_labels = [
    "name" => __("Staff", "custom-post-type-ui"),
    "singular_name" => __("Staff", "custom-post-type-ui"),
];
$staff_args = [
    "label" => __("Staff", "custom-post-type-ui"),
    "labels" => $staff_labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => false,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => ["slug" => "our-staff", "with_front" => true],
    "query_var" => true,
    "menu_icon" => "dashicons-admin-users",
    "supports" => ["title"],
];

register_post_type("cptstaff", $staff_args);

/**
 * Post Type: Policies.
 */
$policies_labels = [
    "name" => __("Policies", "custom-post-type-ui"),
    "singular_name" => __("Policy", "custom-post-type-ui"),
];

$policies_args = [
    "label" => __("Policies", "custom-post-type-ui"),
    "labels" => $policies_labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => false,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => ["slug" => "policies", "with_front" => true],
    "query_var" => true,
    "menu_icon" => "dashicons-media-default",
    "supports" => ["title"],
];

register_post_type("cptpolicies", $policies_args);


/**
 * Post Type: CTA's.
 */
$cta_labels = array(
    'name'                  => _x('cta', 'Post Type General Name', 'educreate'),
    'singular_name'         => _x('cta', 'Post Type Singular Name', 'educreate'),
    'menu_name'             => __('CTAs', 'educreate'),
    'name_admin_bar'        => __('CTAs', 'educreate'),
    'archives'              => __('Item Archives', 'educreate'),
    'attributes'            => __('CTA Attributes', 'educreate'),
    'parent_item_colon'     => __('Parent CTA:', 'educreate'),
    'all_items'             => __('All CTAs', 'educreate'),
    'add_new_item'          => __('Add New Item', 'educreate'),
    'add_new'               => __('Add CTA', 'educreate'),
    'new_item'              => __('New CTA', 'educreate'),
    'edit_item'             => __('Edit CTA', 'educreate'),
    'update_item'           => __('Update CTA', 'educreate'),
    'view_item'             => __('View CTA', 'educreate'),
    'view_items'            => __('View CTAs', 'educreate'),
    'search_items'          => __('Search CTA', 'educreate'),
    'not_found'             => __('Not found', 'educreate'),
    'not_found_in_trash'    => __('Not found in Trash', 'educreate'),
    'featured_image'        => __('Featured Image', 'educreate'),
    'set_featured_image'    => __('Set featured image', 'educreate'),
    'remove_featured_image' => __('Remove featured image', 'educreate'),
    'use_featured_image'    => __('Use as featured image', 'educreate'),
    'insert_into_item'      => __('Insert into item', 'educreate'),
    'uploaded_to_this_item' => __('Uploaded to this item', 'educreate'),
    'items_list'            => __('Items list', 'educreate'),
    'items_list_navigation' => __('Items list navigation', 'educreate'),
    'filter_items_list'     => __('Filter items list', 'educreate'),
);
$cta_rewrite = array(
    'slug'                  => 'post_type',
    'with_front'            => false,
    'pages'                 => false,
    'feeds'                 => true,
);
$cta_args = array(
    'label'                 => __('cta', 'educreate'),
    'description'           => __('Call To Action', 'educreate'),
    'labels'                => $cta_labels,
    'supports'              => array('title', 'thumbnail', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats'),
    'taxonomies'            => array('category', 'post_tag'),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-megaphone',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => false,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'rewrite'               => $cta_rewrite,
    'capability_type'       => 'post',
);
register_post_type('cptcta', $cta_args);