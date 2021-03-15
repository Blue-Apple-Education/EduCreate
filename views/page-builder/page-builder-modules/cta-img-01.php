<?php
    $title = get_sub_field('title');
    $link = get_sub_field('link');
    $media = get_sub_field('media');

    echo '<div class="hero-narrow">';

        echo '<div class="hero-narrow-wrap content-wrap viewport_check viewport_check-up">';
            if ($title):
                echo '<span class="title medium-large bold white">'. $title .'</span>';
            endif;
            if ($link):
                echo '<div class="button-wrap">';
                    echo '<a href="'. $link['url'] .'" class="pageLoader button cta-button ghost-white small button--ujarak button--border-thin button--text-thick"><span>'. $link['title'] .'</span></a>';
                echo '</div>';
            endif;
        echo '</div>';

        echo '<div class="hero-narrow-image">';

            /**
            * Set image resolutions
            */
            $desktopRatio = '1988x380';
            $tabletRatio = '1279x380';
            $mobileRatio = '636x380';

            /**
            * Get images
            */
            $desktopImageURL = $media['desktopImage']['url'];
            $tabletImageURL = $media['tabletImage']['url'];
            $mobileImageURL = $media['mobileImage']['url'];

            echo '<div class="background-container">';
                echo '<div class="overlay"></div>';
                include(get_stylesheet_directory() . "/views/partial/hero-narrow-background-image.php");
            echo '</div>';

        echo '</div>';

    echo '</div>';
