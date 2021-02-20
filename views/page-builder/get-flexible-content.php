<?php
/* Template Name: Page Builder
 * Description: EduCreate Template for: ACF PRO Flexible Content Page Builder
 * @package Wordpress
 * @since 2021
 *
 */

// override $post
// $post = $postObject;
// setup_postdata( $post );

echo '<div class="flexible-content-wrap clearfix">';

// ID of the current item in the WordPress Loop
$id = get_the_ID();

// check if the flexible content field has rows of data
if (have_rows('content', $id)):

    // loop through the selected ACF layouts and display the matching module
    while (have_rows('content', $id)): the_row();

        echo '<section class="flexible-content ' . get_row_layout() . ' ">';

        echo '<div class="Module">';
        echo 'Module: ' . get_row_layout();
        echo '</div>';

        $file = get_stylesheet_directory() . "/views/page-builder/page-builder-modules/" . get_row_layout() . ".php";
        include $file;

        echo '</section>';

    endwhile;

elseif (get_the_content()):

// no layouts found
endif;

// IMPORTANT - reset the $post object so the rest of the page works correctly
wp_reset_postdata();

echo '</div>';