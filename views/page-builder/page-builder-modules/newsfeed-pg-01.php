<?php
echo '<div class="container">';

$choose_category = get_sub_field('choose_category');
$get_category_info = get_term_by('id', $choose_category, 'cpt_tax_newsfeed_categories');
$get_category_name = $get_category_info->slug;
$number_of_posts = 6;
$tile = 1;

if ($choose_category == '') {
    $query = new WP_Query(array(
        'post_type' => 'cpt_newsevents',
        'post_status' => 'publish',
        'posts_per_page' => $number_of_posts,
        'paged' => 1,
        'order' => 'ASC'
    ));
} else {
    $query = new WP_Query(array(
        'post_type' => 'cpt_newsevents',
        'cpt_tax_newsfeed_categories' => $get_category_name,
        'post_status' => 'publish',
        'posts_per_page' => $number_of_posts,
        'paged' => 1,
        'order' => 'ASC'
    ));
}

$counter = 1;

echo '<ul class="newsfeed-0' . $tile . '">';

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();

        $postID = get_the_ID();
        $media = get_field('media');
        $file = get_field('file');

        $image = $media['post_featured_image']['url'];
        $title = get_the_title();
        $preview = get_field('preview');

        $buttonText = get_field('preview_button_text');

        echo '<li class="newsfeed-tile-01">';
        include(get_stylesheet_directory() . "/views/page-builder/partial/newsfeed-tile-01.php");
        echo '</li>';

        $counter++;

        global $wp_query;
    endwhile;
    wp_reset_postdata();
else : endif;

echo '</ul>';
echo '</div>';