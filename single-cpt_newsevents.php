<?php

$branding_colours = get_field('branding_colours', 'option');
$primary = $branding_colours['primary'];

// Header
get_header();

// // Internal Hero
// include get_stylesheet_directory() . "/views/page-builder/page-builder-modules/internal-hero.php";
echo'<div style="height:200px;background:#fff;"></div>';
?>
<style>
.header {
    background-color: <?php echo $primary;?>!important;
  }
</style>
<?php

// Custom Post Type Template
include get_stylesheet_directory() . "/views/page-builder/cpt-layouts/news-events.php";

// Footer
get_footer();
