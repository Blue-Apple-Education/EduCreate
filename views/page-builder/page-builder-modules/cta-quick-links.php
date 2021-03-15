<?php

    $animation_style = get_sub_field('animation_style');
    $font_size = get_sub_field('font_size');
    $layout = get_sub_field('layout');
    $text_colour = get_sub_field('text_colour');

    if ( $layout == 'block-single' ) {
        $background_colour = get_sub_field('background_colour');
        $divider_thickness = get_sub_field('divider_thickness');
        $divider_colour = get_sub_field('divider_colour');
    }

    $cta_icons = get_sub_field('cta_icons');

    $count = 0;
    if($cta_icons) {
        foreach($cta_icons as $row) {
            $count++;
        }
    }

    if($cta_icons) {
        foreach($cta_icons as $row) {

            $icon = $row['icon']['url'];
            $title = $row['title'];
            $description = $row['description'];
            $link = $row['link'];

            if ( $layout === 'block-single' ) {
                $background_colour = get_sub_field('background_colour');
            } else {
                $background_colour = $row['background_colour'];
            }

            // $background_colours = $row['brand_colours'];
            $link_target = $link['target'] ? $link['target'] : '_self';

            echo '<div class="row-item rows-'. $count .'">';

                echo '<a target="'. esc_attr($link_target) .'" style="background-color: '. $background_colour .'" class="pageLoader link '. $font_size .' '. $animation_style .'" alt="link to '. $title .'" href="'. $link['url'] .'">';
    
                    echo '<div class="animate-in viewport_check_fast">';
                        echo '<div class="content-wrap">';
                                if( $icon ):
                                    echo '<div class="icon-wrap">';
                                        echo '<img alt="icon" src="'. $icon .'" />';
                                    echo '</div>';
                                endif;

                                echo '<div class="text-wrap">';
                                    if( $title ):
                                        echo '<span style="color: '. $text_colour .'" class="title">'. $title .'</span>';
                                    endif;

                                    if( $description ):
                                        echo '<span style="color: '. $text_colour .'" class="description">'. $description .'</span>';
                                    endif;

                                    if ( $animation_style === 'animation-line-under' ) {
                                        echo '<div class="animation-line-bottom"></div>';
                                    }
                                echo '</div>';

                            echo '<div style="clear: both"></div>';
                        echo '</div>';
                    echo '</div>';

                    if ( $layout === 'block-single' ) {
                        echo '<div class="divider-line '. $divider_thickness .'" style="background-color: '. $divider_colour .'"></div>';
                    }

                    if ( $animation_style === 'animation-line-outer' ) {
                        echo '<div class="animation-line-top"></div>';
                        echo '<div class="animation-line-right"></div>';
                        echo '<div class="animation-line-bottom"></div>';
                        echo '<div class="animation-line-left"></div>';
                    }

                echo '</a>';

            echo '</div>';
        }
    }
?>