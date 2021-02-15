<?php
/* Template Name: Page Builder
 * Description: EduCreate Template for: ACF PRO Flexible Content Page Builder
 *
 * @package Wordpress
 * @since 2021
 *
 */

// ID of the current item in the WordPress Loop
$id = get_the_ID();

// check if the flexible content field has rows of data
if (have_rows('page_builder', $id)) :

    // loop through the selected ACF layouts and display the matching partial
    while (have_rows('page_builder', $id)) : the_row();

        get_template_part('page-builder/page-builder-modules/' . get_row_layout());

    endwhile;

elseif (get_the_content()) :

// no layouts found

endif;
// IMPORTANT - reset the $post object so the rest of the page works correctly
wp_reset_postdata();

echo '</div>';