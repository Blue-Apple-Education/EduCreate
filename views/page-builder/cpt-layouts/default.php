<?php
/* Template Name: Page Builder
 * Description: EduCreate Template for: ACF PRO Flexible Content Page Builder
 * @package Wordpress
 * @since 2021
 *
 */ ?>
<div class="flexible-content-wrap two-columns single-postclearfix container">
    <div class="row">
        <div class="col-lg-4 side-bar">
            <?php  /* include(get_stylesheet_directory() . "/views/page-builder/cpt-layouts/single-post-sidebar.php"); */ ?>
        </div>
        <div class="col-lg-8 single-post-main">
            <?php include(get_stylesheet_directory() . "/views/page-builder/cpt-layouts/single-post-content.php"); ?><p>
                to</p>
        </div>
    </div>
</div>