<?php

$postObject = get_the_ID();
$post = $postObject;
setup_postdata($post);

echo '<div class="flexible-content-wrap">';
echo '<div class="flexible-content-column">';

// GET ACF FLEXIBLE ROWS
$flexIndex = 1;

// echo $postObject;

if (have_rows('content', $postObject)) :
    while (have_rows('content', $postObject)) : the_row();

        echo '<section class="flexible-content row-' . get_row_layout() . ' row-index-' . $flexIndex . '">';

        // if ( $anchor_tag != '' ) {
        //     echo '<div class="anchorLink" id="'.$anchor_tag.'"></div>';
        // }

        $file = get_stylesheet_directory() . "/views/page-builder/page-builder-modules/" . get_row_layout() . ".php";
        include($file);

        echo '</section>';

        $flexIndex++;

    endwhile;
endif;

$flex_name = false;

echo '</div>';
echo '</div>';

wp_reset_postdata(); 
// IMPORTANT - reset the $post object so the rest of the page works correctly