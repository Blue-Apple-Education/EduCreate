<?php
    $number_of_slides_to_show = get_sub_field('number_of_slides_to_show');
    $title = get_sub_field('title');
    
    $choose_category = get_sub_field('choose_category');
    $get_category_info = get_term_by( 'id', $choose_category, 'cpt_tax_newsfeed_categories' );
    $get_category_name = $get_category_info->slug;

    if ( $get_category_name == '' ) {
        $query = new WP_Query( array(
            'post_type' => 'cpt_newsevents',
            'posts_per_page' => $number_of_slides_to_show,
            'order' => 'ASC'
        ));
    } else {
        $query = new WP_Query( array(
            'post_type' => 'cpt_newsevents',
            'posts_per_page' => $number_of_slides_to_show,
            'cpt_tax_newsfeed_categories' => $get_category_name,
            'posts_per_page' => -1,
            'paged' => 1,
            'order' => 'ASC'
        ));
    }

    $counter = 0;
    $carousel = 'carouselNavOn';

    if ( $query->have_posts() ) :
        while ( $query->have_posts() ) : $query->the_post();

        $counter++;

        endwhile; wp_reset_postdata();
    else : endif;

    if ( $counter <= 4 ) {
        $carousel = 'carouselNavOff';
    }
    
    echo '<div class="container">';

        if( $title ):
            echo '<div class="title-wrap">';
                echo '<span>'. $title .'</span>';
            echo '</div>';
        endif;

        echo '<ul class="carousel-newsfeed-02 '. $carousel .'">';
        
            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post();
    
                    $postID = get_the_ID();
                    $media = get_field('media'); 
                    $file = get_field('file'); 
                    
                    $image = $media['post_featured_image']['url'];
                    $title = get_the_title();
                    $preview = get_field('preview');
                    $load_type = 'viewport_check_fast';
                    $overlay_colour = '';

                    echo '<li class="slide newsfeed-tile-02 flexbox column">';
                        include(get_stylesheet_directory() . "/template-parts/tiles/newsfeed-tile-02.php");
                        echo '<div style="clear:both;"></div>';    
                    echo '</li>';

                $counter++;

                endwhile; wp_reset_postdata();
            else : endif;

        echo '</ul>';
        echo '<div style="clear:both;"></div>';

    echo '</div>';
    echo '<div style="clear:both;"></div>';
?>