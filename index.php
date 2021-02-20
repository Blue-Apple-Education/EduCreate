<?php
/* Template Name: Page Builder */

/**
 * Get header
 */
get_header();

/**
 * Get flexible content and side bar
 */
include get_stylesheet_directory() . "/views/page-builder/get-flexible-content.php";

/**
 * Get footer
 */
get_footer();