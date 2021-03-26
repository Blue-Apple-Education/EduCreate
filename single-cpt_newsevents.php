<?php

// Header
get_header();

// // Internal Hero
// include get_stylesheet_directory() . "/views/page-builder/page-builder-modules/internal-hero.php";
echo'<div style="height:200px;background:#fff;"></div>';
?>
<style>
.header {
    background-color: #66afdb!important;
  }
</style>
<?php

// Custom Post Type Template
include get_stylesheet_directory() . "/views/page-builder/cpt-layouts/news-events.php";

// Footer
get_footer();
