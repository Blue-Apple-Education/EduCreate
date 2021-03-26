<?php
    /**
    * Get header
    */
    get_header();

    $hero_title = 'News letter';
    $desktopImageURL = get_field('archive_page_header_image', 'option')['url'];
    $tabletImageURL = $desktop_image;
    $mobileImageURL = $desktop_image;
    include(get_stylesheet_directory() . "/template-parts/layouts/archive-hero-narrow.php");

    /**
    * LOAD PAGE CONTENT - TWO COLUMNS
    */
    include(get_stylesheet_directory() . "/views/page-builder/cpt-layouts/single-layout-taxonomy-content.php");

    /**
    * Get footer
    */
    get_footer();
