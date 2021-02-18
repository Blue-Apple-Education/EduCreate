<?php /* Internal Hero */
$post_id = get_the_ID();
$media = get_field('media');
$post_featured_image = get_field('post_featured_image');
?>

<div class="uk-cover-container">
    <img src="<?php echo esc_url($media['post_featured_image']['url']); ?>"
        alt="<?php echo esc_attr($media['post_featured_image']['alt']); ?>" uk-cover>
    <p>Test Internal Hero</p>
</div>