<?php

/* Template Name: CPT-News Events */
$post_id = get_the_ID();

$preview = get_field('preview');
$file = get_field('file');
$media = get_field('media');
$post_featured_image = get_field('post_featured_image');

?>
<div class="flexible-content-wrap two-columns single-postclearfix container">
    <div class="row">
        <div class="col-lg-4 side-bar">
            <?php include(get_stylesheet_directory() . "/views/page-builder/get-postobject-flexible-content.php"); ?>
        </div>
        <div class="col-lg-8 single-post-main">


            <h2 class="post-title"><?php the_title(); ?></h2>
            <p>Post ID: <?php echo $post_id; ?></p>
            <h2><?php echo $preview; ?></h2>
            <p><?php /* echo $file; */ ?></p>


            <div class="featured-image">
                <img src="<?php echo esc_url($media['post_featured_image']['url']); ?>"
                    alt="<?php echo esc_attr($media['post_featured_image']['alt']); ?>">
            </div>
        </div>
    </div>
</div>

<style>
.featured-image-bg {
    background-image: url()
}
</style>