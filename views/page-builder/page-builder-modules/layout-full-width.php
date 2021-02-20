<?php
$full_width_content = get_sub_field('full_width_content');
$enable_animation = get_sub_field('enable_animation');

$animation = '';
if ($enable_animation == 1) {
    $animation = 'viewport_check viewport_check-up';
}

echo '<div class="flex-one-column-wrap clearfix">';
echo '<div class="flex-column ' . $animation . '">';
$postObject = $full_width_content;
include get_stylesheet_directory() . "/views/page-builder/get-postobject-flexible-content.php";
echo '</div>';
echo '</div>';