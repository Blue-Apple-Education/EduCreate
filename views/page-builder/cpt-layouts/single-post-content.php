<?php

/*POST SETTNGS*/

$thisPostType = get_post_type();


$media = get_field('media');
/**
 * LOAD PAGE CONTENT - PARAGRAPH
 */

include(get_stylesheet_directory() . "/views/page-builder/get-flexible-content.php");