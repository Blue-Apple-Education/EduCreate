<?php

    $no_career_vacancies = get_field('no_career_vacancies', 'options')['url'];
    $no_vacancies_text = get_sub_field('no_vacancies_text');
    $link = get_sub_field('no_vacancies_link');
    
    $category = get_sub_field('category');
    $get_category_info = get_term_by( 'id', $category, 'cpt_tax_career_cat' );
    $get_category_name = $get_category_info->slug;

    if ( $category == '' ) {
        $query = new WP_Query( array(
            'post_type' => 'cpt_careers',
            'posts_per_page' => -1,
            'paged' => 1,
            'order' => 'ASC'
        ));
    } else {
        $query = new WP_Query( array(
            'post_type' => 'cpt_careers',
            'cpt_tax_career_cat' => $get_category_name,
            'posts_per_page' => -1,
            'paged' => 1,
            'order' => 'ASC'
        ));
    }

    $counter = 0;
    $navShow = '';

    if ( $query->have_posts() ) :
        while ( $query->have_posts() ) : $query->the_post();
                
            $counter++;
            
        endwhile; wp_reset_postdata();
    else : endif;

    if ( $counter == 1 || $counter == 0 ) {
        $navShow = 'hide';
    }

    echo '<div class="vacancies-carousel">';
        echo '<div class="button-row navigation-arrows '. $navShow .'">';
            echo '<button class="button button--previous"><svg xmlns="http://www.w3.org/2000/svg" width="12.746" height="23.094" viewBox="0 0 12.746 23.094"><path id="DOWN_ARROW" data-name="DOWN ARROW" d="M2.4,12.467,12.746,22.815l-1.2,1.2L0,12.467,11.547.919l1.2,1.2Z" transform="translate(0 -0.919)" fill="#fff" fill-rule="evenodd"/></svg></button>';
            echo '<button class="button button--next"><svg xmlns="http://www.w3.org/2000/svg" width="12.746" height="23.094" viewBox="0 0 12.746 23.094"><path id="DOWN_ARROW" data-name="DOWN ARROW" d="M2.4,12.467,12.746,22.815l-1.2,1.2L0,12.467,11.547.919l1.2,1.2Z" transform="translate(12.746 24.013) rotate(180)" fill="#fff" fill-rule="evenodd"/></svg></button>';
        echo '</div>';

        echo '<div class="vacancies-carousel-content-navigation">';
            echo '<div class="button-row js-vacancy-buttons">';
                echo '<ol class="flickity-page-dots button-group button-group--cells">';
                    $counter = 1;
                    if ( $query->have_posts() ) :
                        while ( $query->have_posts() ) : $query->the_post();
                                
                            $getTitle = get_the_title();
                            $title = str_replace(array("\r\n", "\r", "\n"), "<br />", $getTitle);

                            if ( $counter == 1 ) {
                                echo '<li class="carousel-button is-selected">';
                                    echo '<span class="slide-number font">0'. $counter .'</span>';
                                    echo '<span class="slide-title font">'. $title .'</span>';
                                echo '</li>';
                            } else {
                                echo '<li class="carousel-button">';
                                    echo '<span class="slide-number font">0'. $counter .'</span>';
                                    echo '<span class="slide-title font">'. $title .'</span>';
                                echo '</li>';
                            }

                            $counter++;
                        endwhile; wp_reset_postdata();
                    else : endif;
                echo '</ol>';
            echo '</div>';
        echo '</div>';

        echo '<div class="vacancies-carousel-content-wrap">';
            echo '<div class="vacancies-carousel-content">';

                if ( $query->have_posts() ) :
                    while ( $query->have_posts() ) : $query->the_post();
                        /**
                        * Get slide content
                        */
                        $title = get_the_title();
                        $paragraph = get_field('preview');
                        $link = get_field('link');
                        $getDate = get_field('closing_date');
                        $application = get_field('application');

                        echo '<div class="slide-container">';
                            echo '<div class="fill-container flexbox alignCenter row">';
                                echo '<div class="flexboxitem block midLeft pageCenter">';
                                    echo '<div class="block content-wrap viewport_check viewport_check-up">';

                                        echo '<p class="vac-title">Apply for a role</p>';
    
                                        echo '<div class="line-wrap">';
                                            echo '<span class="vac-title-line"></span>';
                                        echo '</div>';

                                        if( $title ):
                                            echo '<span class="title large caps white">'. $title .'</span>';
                                        endif;

                                        if( $paragraph ):
                                            echo '<p class="paragraph white largeSpacing">'. $paragraph .'</p>';
                                        endif;

                                        if( $getDate ):
                                            echo '<p class="closing-date-text">Closing Date</p>';
                                            echo '<p class="closing-date">'. $getDate .'</p>';
                                        endif;

                                        if( $application != '' ) {
                                            echo '<div class="button-wrap">';
                                                echo '<a target="_blank" href="'. $application['url'] .'" class="button large-button ghost-white button--ujarak button--border-thin button--text-thick"><span>DOWNLOAD APPLICATION</span></a>';
                                            echo '</div>';
                                        } else {
                                            echo '<div class="button-wrap">';
                                                echo '<a href="'. get_the_permalink() .'" class="pageLoader button large-button ghost-white button--ujarak button--border-thin button--text-thick"><span>FIND OUT MORE</span></a>';
                                            echo '</div>';
                                        }

                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';

                    endwhile; wp_reset_postdata();
                else: 
                    /*------------------------------------*\
                        NO CAREERS AVAILABLE
                    \*------------------------------------*/
                        
                    echo '<div class="slide-container">';
                        echo '<div class="fill-container flexbox alignCenter row">';
                            echo '<div class="flexboxitem block midLeft pageCenter">';
                                echo '<div class="block content-wrap viewport_check viewport_check-up">';
                                    echo '<p class="vac-title">Job Vacancies</p>';
                                    echo '<div class="line-wrap">';
                                        echo '<span class="vac-title-line"></span>';
                                    echo '</div>';
                                        echo '<span class="title large caps white">NO VACANCIES</span>';
                                        
                                        echo '<div class="no-vacs">'. apply_filters('the_content', $no_vacancies_text) .'</div>';
                                        
                                        if( $link['url'] != '' ) {
                                            echo '<div class="button-wrap">';
                                                echo '<a href="'. $link['url'] .'" class="pageLoader vacancy-button button large-button ghost-white button--ujarak button--border-thin button--text-thick"><span>'. $link['title'] .'</span></a>';
                                            echo '</div>';
                                        }

                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';                
                endif;

            echo '</div>';
        echo '</div>';

        echo '<div class="vacancies-carousel-image">';

            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post();
                
                    /**
                    * Set image resolutions
                    */
                    $desktopRatio = '3840x2160';
                    $tabletRatio = '1668x2224';
                    $mobileRatio = '828x1792';
  
                    /**
                    * Get images
                    */
                    $media = get_field('media');
                    $desktopImageURL = $media['post_featured_image']['url'];
                    
                    echo '<div class="slide-container">';
                        echo '<div class="background-container">';
                            echo '<div class="overlay"></div>';
                            include(get_stylesheet_directory() . "/views/partial/hero-background-image.php");
                        echo '</div>';
                    echo '</div>';

                endwhile; 
                wp_reset_postdata();
            else: 
                /*------------------------------------*\
                    NO CAREERS AVAILABLE
                \*------------------------------------*/

                /**
                * Set image resolutions
                */
                $desktopRatio = '3840x2160';
                $tabletRatio = '1668x2224';
                $mobileRatio = '828x1792';

                echo '<div class="slide-container">';
                    echo '<div class="background-container">';
                        echo '<div class="overlay"></div>';
                        echo '<div class="background-images">';
                            echo '<img class="background-mobile fill-container" srcset="'. aq_resize( $no_career_vacancies, 1920, 1200, true, true, true ) .'" alt="background image" />';
                            echo '<img class="background-tablet fill-container" srcset="'. aq_resize( $no_career_vacancies, 1920, 1200, true, true, true ) .'" alt="background image" />';
                            echo '<img class="background-desktop fill-container" srcset="'. aq_resize( $no_career_vacancies, 1920, 1200, true, true, true ) .'" alt="background image" />';
                            echo '<div class="background-ie fill-container background-image animated slow fadeIn" style="background-image: url('. aq_resize( $no_career_vacancies, 1920, 1200, true, true, true ) .')"></div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';

            endif;
        echo '</div>';
    echo '</div>';
?>