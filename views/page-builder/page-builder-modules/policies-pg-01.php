<?php
    echo '<div class="flexible-content policies viewport_check viewport_check-up">';

        $getTaxonomyData = get_sub_field("choose_policy_category_to_display");
        $get_category_name = $getTaxonomyData->slug;

        $show_search_bar = get_sub_field("show_search_bar");
        $list_style_type = get_sub_field("list_style_type");
        
        $add_policies = get_sub_field("add_policies");


        $query = new WP_Query( array(
            'post_type' => 'cpt_policies',
            'posts_per_page' => -1,
            'cpt_tax_policies' => $get_category_name,
            'orderby'=> 'title',
            'order' => 'ASC'
        ));

        $counter = 1;

        if ($show_search_bar == 1 ) {
            echo '<div class="policies-search">';
                echo '<div class="container clearfix">';
                    echo '<div class="search-wrapper">';
                        echo '<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17s-17-7.626-17-17S14.61,6,23.984,6z"/><g></svg>';
                        echo '<input type="text" class="quicksearch viewport_check viewport_check-up" name="search" placeholder="Search for a policy" data-search>';
                    echo '</div>';    
                echo '</div>';    
            echo '</div>';
        }

        echo '<div class="policies-grid style-type-'. $list_style_type .' clearfix">';
            echo '<div class="container clearfix">';
                echo '<ul class="policies-list-'. $list_style_type .' clearfix">'; 

                if ( $get_category_name ) {
                    if ( $query->have_posts() ) :
                        while ( $query->have_posts() ) : $query->the_post();

                            $title = get_the_title();
                            $upload_file = get_field('upload_file');

                            include(get_stylesheet_directory() . "/template-parts/tiles/policy-tile.php");
                            $counter++;
                
                        endwhile; wp_reset_postdata();
                    else : endif;
                }

                if ( $add_policies ) {
                    foreach( $add_policies as $file ):

                        include(get_stylesheet_directory() . "/template-parts/tiles/policy-tile-gallery.php");
                        $counter++;
                    endforeach;
                }

                echo '</ul>';

                echo '<div class="no-policies content-wrap"><span class="title">Sorry, we don\'t seem to have that policy.</span></div>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
?>