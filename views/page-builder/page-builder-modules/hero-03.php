<?php

    $carouselSlides = get_sub_field('carousel_slides');
    $cta_links = get_sub_field('cta_links');
    $hero_decal_overlay = get_sub_field('hero_decal_overlay');
    $page_down_icon = get_sub_field('page_down_icon');

    $get_emergency_notification = get_sub_field('emergency_notification');
    $emergency_display_frequency = get_sub_field('emergency_display_frequency');
    $emergency_notification_onoff = get_sub_field('emergency_notification_onoff');
    
    $emergency_button_text = get_sub_field('emergency_button_text');
    $emergency_button_colour = get_sub_field('emergency_button_colour');
    $hide_button_on_close = get_sub_field('hide_button_on_close');

    
    $counter = 0;
    $emergency_counter = 0;
    $navShow = '';

    if($carouselSlides) {
        foreach($carouselSlides as $slide) {            
            $counter++;
        }
    }

    if ( $counter == 1 ) {
        $navShow = 'hide';
    }

    echo '<div class="hero-carousel">';
        echo '<div class="hero-carousel-content-navigation '. $navShow .'">';
            echo '<div class="button-row js-hero-buttons">';
                echo '<ol class="flickity-page-dots button-group button-group--cells">';
                    $counter = 1;
                    if($carouselSlides) {
                        foreach($carouselSlides as $slide) {
                            
                            $title = $slide['content']['title'];

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
                        }
                    }
                echo '</ol>';
            echo '</div>';
        echo '</div>';

        echo '<div class="hero-carousel-content-wrap">';
            echo '<div class="hero-carousel-content">';
                if($carouselSlides) {
                    foreach($carouselSlides as $slide) {
                        /**
                        * Get slide content
                        */
                        $title_image = $slide['content']['title_image']['url'];
                        $title = $slide['content']['title'];
                        $paragraph = $slide['content']['paragraph'];
                        $link = $slide['content']['link'];

                        echo '<div class="slide-container">';
                            echo '<div class="fill-container flexbox alignCenter row">';
                                echo '<div class="flexboxitem block midLeft pageCenter">';
                                    echo '<div class="block content-wrap">';
                                        if( $title || $title_image ):
                                            echo '<div class="title-wrap">';
                                                if( $title_image ):
                                                    echo '<img class="content-img" src="'. $title_image .'" alt="tile image">';
                                                endif;
                                                if( $title ):
                                                    echo '<h1 id="animate-letters" class="guide title large caps white">'. animate_characters( $title ) .'</h1>';
                                                endif;
                                            echo '</div>';
                                        endif;

                                        if( $paragraph ):
                                            echo '<p class="paragraph-carousel white largeSpacing">'. $paragraph .'</p>';
                                        endif;

                                        echo '<div class="button-wrap">';
                                            if( $link ):
                                                echo '<a href="'. $link['url'] .'" class="cta-button pageLoader button large-button bt-primary button--ujarak button--border-thin button--text-thick"><span>'. $link['title'] .'</span></a>';
                                            endif;

                                            if( $emergency_notification_onoff ):
                                                if ( $emergency_counter == 0 ) {
                                                    echo '<div href="#emergency-popup" data-lightbox-lity data-hide="'. $hide_button_on_close .'" data-frequency="'. $emergency_display_frequency .'" id="emergency-button" class="emergency-button button large-button bt-white button--ujarak button--border-thin button--text-thick"><span>'. $emergency_button_text .'</span></div>';
                                                } else {
                                                    echo '<div data-hide="'. $hide_button_on_close .'" class="emergency-lity-bt emergency-button button large-button bt-white button--ujarak button--border-thin button--text-thick"><span>'. $emergency_button_text .'</span></div>'; 
                                                }
                                            endif;
                                        echo '</div>';

                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';

                        $emergency_counter++;
                        $counter++;
                    }
                }
            echo '</div>';
        echo '</div>';

        echo '<div class="hero-carousel-image">';
            if($carouselSlides) {
                foreach($carouselSlides as $slide) {

                    /**
                    * Set image resolutions
                    */
                    $desktopRatio = '3840x2160';
                    $tabletRatio = '1668x2224';
                    $mobileRatio = '828x1792';
  
                    /**
                    * Get images
                    */
                    $media = $slide['media'];
                    $desktopImageURL = $media['desktopImage']['url'];
                    $tabletImageURL = $media['tabletImage']['url'];
                    $mobileImageURL = $media['mobileImage']['url'];
                    $overlay = $media['overlay_opacity'];

                    echo '<div class="slide-container">';
                        echo '<div class="background-container">';
                            echo '<div class="background-overlay" style="opacity: 0.'. $overlay .'">';
                                echo '<div style="width: 100%;height: 50%; position: absolute; top: 0; left: 0; right: 0; opacity: 1; background-image: linear-gradient(to bottom, #171717 0%, rgba(104, 104, 104, 0) 100%);"></div>';
                                echo '<div style="width: 100%;height: 100%; position: absolute; top: 0; left: 0; right: 0; bottom: 0; opacity: 0.35; background-color: #171717;"></div>';
                            echo '</div>';
                            include(get_stylesheet_directory() . "/views/partial/hero-background-image.php");
                        echo '</div>';
                    echo '</div>';

                    $counter++;
                }
            }
        echo '</div>';

        echo '<div class="hero-cta-links desktop">';
            
            include(get_stylesheet_directory() . "/template-parts/flexible-content-modules/hero-cta-quick-links.php");

            // echo '<ul>';
            //     if($cta_links) {
            //         foreach($cta_links as $link) {
                        
            //             $getLink = $link['link'];
            //             $link_url = $getLink['url'];
            //             $link_title = $getLink['title'];
            //             $link_target = $getLink['target'] ? $link['target'] : '_self';
            //             $brand_colours = $link['brand_colours'];

            //             echo '<li class="cta-link-item" style="background-color: '. $brand_colours .'">';
	        //                 echo '<a class="button" href="'. esc_url($link_url) .'" target="'. esc_attr($link_target) .'">'. esc_html($link_title) .'</a>';
            //             echo '</li>';
            //         }
            //     }
            // echo '</ul>';
        echo '</div>';
    echo '</div>';

    echo '<div class="hero-cta-links mobile">';

        include(get_stylesheet_directory() . "/template-parts/flexible-content-modules/hero-cta-quick-links.php");

        // echo '<ul>';
        //     if($cta_links) {
        //         foreach($cta_links as $link) {
                    
        //             $getLink = $link['link'];
        //             $link_url = $getLink['url'];
        //             $link_title = $getLink['title'];
        //             $link_target = $getLink['target'] ? $link['target'] : '_self';
        //             $brand_colours = $link['brand_colours'];

        //             echo '<li class="cta-link-item" style="background-color: '. $brand_colours .'">';
        //                 echo '<a class="button" href="'. esc_url($link_url) .'" target="'. esc_attr($link_target) .'">'. esc_html($link_title) .'</a>';
        //             echo '</li>';
        //         }
        //     }
        // echo '</ul>';

        if ( $hero_decal_overlay ) {
            echo '<div class="decal-overlay-wrap viewport_check">';
                echo '<img src="'. $hero_decal_overlay['url'] .'">';
            echo '</div>';
        }

    echo '</div>';
    
    echo '<div id="get-started" class="anchor"></div>';

    if( $get_emergency_notification ):
        echo '<div id="emergency-popup" class="emergency-notification-popup lity-hide">';
            include(get_stylesheet_directory() . "/views/partial/emergency-notification-popup.php");
        echo '</div>';
    endif;
?>

<style>
    .button--ujarak.bt-white:hover:before {
        background-color: <?php echo $emergency_button_colour; ?>!important;
    }
    .button--ujarak.bt-white:hover {
        border-color: <?php echo $emergency_button_colour; ?>!important;
    }
</style>