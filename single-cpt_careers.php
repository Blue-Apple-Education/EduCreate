<?php

/**
 * Get header
 */
get_header();

/**
 * LOAD HERO NARROW
 */
include(get_stylesheet_directory() . "/views/page-builder/page-builder-modules/hero-narrow.php");


/**
 * LOAD PAGE CONTENT - TWO COLUMNS 
 */
include(get_stylesheet_directory() . "/views/page-builder/cpt-layouts/single-layout-content-columns.php");


/**
 * LOAD PAGE FLEXIBLE CONTENT CONTENT - FULL WIDTH 
 */
include(get_stylesheet_directory() . "/views/page-builder/cpt-layouts/single-layout-full-width-flexible.php");


/**
 * Get footer
 */
get_footer();