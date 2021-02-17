<?php

/**
 * Get header
 */
get_header();

/**
 * LOAD HERO NARROW
 */
include(get_stylesheet_directory() . "/views/page-builder/page-builder-modules/internal-hero.php");


/**
 * LOAD PAGE CONTENT - TWO COLUMNS 
 */
// include(get_stylesheet_directory() . "/views/page-builder/cpt-layouts/single-layout-content-columns.php.");


/**
 * LOAD PAGE FLEXIBLE CONTENT CONTENT - FULL WIDTH 
 */
include(get_stylesheet_directory() . "/views/page-builder/cpt-layouts/news-events.php");


/**
 * Get footer
 */
get_footer();