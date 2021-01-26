<?php

// Register Image select fields
add_action('acf/register_fields', 'register_fields');
function my_register_fields()
{
    include_once('acf-image-select/acf-image-select.php');
}

// Remove empty p tags from editor
function remove_empty_p($content)
{
    $content = force_balance_tags($content);
    $content = preg_replace('#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content);
    $content = preg_replace('~\s?<p>(\s|&nbsp;)+</p>\s?~', '', $content);
    return $content;
}
add_filter('the_content', 'remove_empty_p', 20, 1);
remove_filter('acf_the_content', 'wpautop');

//Remove WPAUTOP from ACF TinyMCE Editor
function acf_wysiwyg_remove_wpautop()
{
    remove_filter('acf_the_content', 'wpautop');
}
add_action('acf/init', 'acf_wysiwyg_remove_wpautop');

//Default image field
add_action('acf/render_field_settings/type=image', 'add_default_value_to_image_field');
function add_default_value_to_image_field($field)
{
    acf_render_field_setting($field, array(
        'label'            => 'Default Image',
        'instructions'        => 'Appears when creating a new post',
        'type'            => 'image',
        'name'            => 'default_value',
    ));
}


add_filter('acf/load_value/type=image', 'reset_default_image', 10, 3);
function reset_default_image($value, $post_id, $field)
{
    if (!$value) {
        $value = $field['default_value'];
    }

    return $value;
}