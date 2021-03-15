<?php

    $getTaxonomyData = get_sub_field("choose_staff_category_to_display");
    $get_selectRole_info = get_term_by( 'id', $getTaxonomyData, 'cpt_tax_staff_categories' );
    $get_selectRole_name = $get_selectRole_info->slug;

    if ( $getTaxonomyData == '' ) {
        $query = new WP_Query( array(
            'post_type' => 'cpt_staff',
            'posts_per_page' => -1,
            'paged' => 1,
            'order' => 'ASC',
            'orderby' => 'menu_order'
        ));
    } else {
        $query = new WP_Query( array(
            'post_type' => 'cpt_staff',
            'posts_per_page' => -1,
            'cpt_tax_staff_categories' => $get_selectRole_name,
            'paged' => 1,
            'order' => 'ASC',
            'orderby' => 'menu_order'
        ));
    }

    $counter = 1;

    echo '<div class="container clearfix">';
        echo '<ul class="staff-list">'; 
            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post();

                    $title = get_the_title();
                    $teaching_title = get_field('info')['teaching_title'];
                    $education = get_field('info')['education'];
                    $form = get_field('info')['form'];
                    $tag_line = get_field('info')['tag_line'];
                    $bio = get_field('info')['bio'];
                    $image = get_field('media')['staff_member_photo'];
        
                    include(get_stylesheet_directory() . "/template-parts/tiles/staff-member-tile-01.php");
                    $counter++;
        
                endwhile; wp_reset_postdata();
            else : endif;
        echo '</ul>';
    echo '</div>';
?>