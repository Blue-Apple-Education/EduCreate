<?php
/* Template Name: CPT-Careers */
$post_id = get_the_ID();

$category = get_field('category');
$closing_date = get_field('closing_date');
$application = get_field('application');
$media = get_field('media');
$post_header_image = get_field('post_header_image');
$post_featured_image = get_field('post_featured_image');
$post_content_image = get_field('post_content_image');
$school_logo = get_field('school_logo');

?>
<div class="flexible-content-wrap two-columns single-postclearfix container-fluid">
    <div class="row">

        <div class="col-lg-4 side-bar">
            <?php include(get_stylesheet_directory() . "/views/page-builder/get-postobject-flexible-content.php"); ?>
        </div>

        <div class="col-lg-8 single-post-main">
            <!-- Add in vacancies slider from design when given -->
            <h2 class="post-title"><?php the_title(); ?></h2>

            <p>Post ID: <?php echo $post_id; ?></p>
            <h2><?php echo $preview; ?></h2>

            <!-- TODO - Add File Download Option for linked file -->
            <p><?php /* echo $application; */ ?></p>

            <div class="featured-image">
                <img src="<?php echo esc_url($media['post_featured_image']['url']); ?>"
                    alt="<?php echo esc_attr($media['post_featured_image']['alt']); ?>">
            </div>

            <div class="header-image">
                <img src="<?php echo esc_url($media['post_header_image']['url']); ?>"
                    alt="<?php echo esc_attr($media['post_header_image']['alt']); ?>">
            </div>


            <div class="content-image">
                <img src="<?php echo esc_url($media['post_content_image']['url']); ?>"
                    alt="<?php echo esc_attr($media['post_content_image']['alt']); ?>">
            </div>
            <!-- END -->

            <p><?php the_field('preview'); ?></p>
            <p><?php the_field('school_name'); ?></p>
            <div class="school-logo">
                <img src="<?php echo esc_url($school_logo['url']); ?>"
                    alt="<?php echo esc_attr($school_logo['alt']); ?>">
            </div>

        </div>
        <!-- END - MAIN  -->
    </div>
</div>

<!-- Style For Module -->
<style>
.featured-image-bg {
    background-image: url()
}
</style>
<!-- END STYLE -->