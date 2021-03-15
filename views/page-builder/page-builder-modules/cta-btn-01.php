<?php
    $title = get_sub_field('title');
    $link = get_sub_field('link');
    $media = get_sub_field('media');
    $colours = get_sub_field('colours');
    $background_colours = $colours['brand_colours'];

    echo '<div class="button-narrow">';

        echo '<div class="button-narrow-wrap content-wrap viewport_check viewport_check-up">';
            if( $title ):
                echo '<span class="title medium-large bold white">'. $title .'</span>';
            endif;
            if( $link ):
                echo '<div class="button-wrap">';
                    echo '<a href="'. $link['url'] .'" class="pageLoader button cta-button ghost-white small button--ujarak button--border-thin button--text-thick"><span>'. $link['title'] .'</span></a>';
                echo '</div>';
            endif;
        echo '</div>';

        echo '<div class="button-narrow-image">';


            echo '<div class="background-container" style="background-color: '. $background_colours .'">';  
                if ( $background_colours == '' ){
                    
                    /**
                    * Set image resolutions
                    */
                    $desktopRatio = '1558x170';
                    $tabletRatio = '869x170';
                    $mobileRatio = '500x170';

                    /**
                    * Get images
                    */
                    $desktopImageURL = $media['desktopImage']['url'];
                    $tabletImageURL = $media['tabletImage']['url'];
                    $mobileImageURL = $media['mobileImage']['url'];
                    
                    echo '<div class="overlay"></div>';
                    include(get_stylesheet_directory() . "/views/partial/hero-narrow-background-image.php");
                }
            echo '</div>';

        echo '</div>';

    echo '</div>';
?>