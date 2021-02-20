<?php

// Header
get_header();

// Internal Hero
include get_stylesheet_directory() . "/views/page-builder/page-builder-modules/internal-hero.php";

// Custom Post Type Template
include get_stylesheet_directory() . "/views/page-builder/cpt-layouts/news-events.php";

// Footer
get_footer();