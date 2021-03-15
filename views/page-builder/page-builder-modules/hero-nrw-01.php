<?php

    $title = get_sub_field('title');
    $overlay_type = get_sub_field('overlay_type');

    $media = get_sub_field('media');
    $overlay_opacity = $media['overlay_opacity'];

    $background = get_sub_field('background_colour');
    $background_colours = $background['background_colours'];

    $page_header_position = get_field('page_header_position', 'option');

    if ( $title == '' ) {
        $title = get_the_title();
    }

    echo '<div class="hero-narrow">';
        echo '<div class="hero-narrow-wrap content-wrap">';
            if( $page_header_position == 'inline' ) {
                if( $title ):
                    echo '<h1>'. $title .'</h1 >';
                endif;
            }
        echo '</div>';

        echo '<div class="hero-narrow-image">';
            echo '<div style="background-color: '. $background_colours .'" class="background-container viewport_check viewport_check-down overlay-value-'. $overlay_type .'">';

                if ( $overlay_type == 'flat' ) {
                    echo '<div class="background-overlay" style="background-color: #191919; opacity: 0.'. $overlay_opacity .'"></div>';
                } else if ( $overlay_type == 'gradient' ) {
                    echo '<div class="background-overlay overlay-'. $overlay_type .'" style="opacity: 0.'. $overlay_opacity .'">';
                        echo '<svg class="gradient" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10000" height="10000"><defs><linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.494" gradientUnits="objectBoundingBox"><stop offset="0" stop-color="#171717"/><stop offset="1" stop-color="#686868" stop-opacity="0.224"/></linearGradient></defs><rect id="Overlay_Gradient_V2" data-name="Overlay Gradient V2" opacity="0.399" fill="url(#linear-gradient)"/></svg>';
                    echo '</div>';
                } else if ( $overlay_type == 'vertical' ) {
                    echo '<div class="background-overlay" style="opacity: 0.'. $overlay_opacity .'">';
                        echo '<div style="width: 100%; height: 100%; position: absolute; top: 0; left: 0; right: 0; bottom: 0; opacity: 0.6; z-index: 2;background-image: linear-gradient(to bottom, #171717 0%, rgba(104, 104, 104, 0.22) 100%);"></div>';
                    echo '</div>';
                }

                /**
                * Set image resolutions
                */
                $desktopRatio = '3840x882';
                $tabletRatio = '1668x882';
                $mobileRatio = '828x440';

                /**
                * Get images
                */
                $desktopImageURL = $media['desktopImage']['url'];
                $tabletImageURL = $media['tabletImage']['url'];
                $mobileImageURL = $media['mobileImage']['url'];

                include(get_stylesheet_directory() . "/views/partial/hero-narrow-background-image.php");
            
            echo '</div>';
        echo '</div>';
    echo '</div>';

    
    if( $page_header_position == 'outline' ) {
        echo '<div class="hero-narrow-wrap outline-title content-wrap viewport_check viewport_check-down">';
            if( $title ):
                echo '<h1>'. $title .'</h1 >';
            endif;
        echo '</div>';
    }
?>