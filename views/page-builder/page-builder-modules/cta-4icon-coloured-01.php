<?php

    $cta_icons = get_sub_field('cta_icons');

    $count = 0;
    if($cta_icons) {
        foreach($cta_icons as $row) {
            $count++;
        }
    }

    if($cta_icons) {
        foreach($cta_icons as $row) {

            /**
            * Get paragraph
            */
            $icon = $row['icon']['url'];
            $link = $row['link'];
            $title = $link['title'];

            $background_colours = $row['brand_colours'];
            $link_target = $link['target'] ? $link['target'] : '_self';

            echo '<div class="row-item rows-'. $count .'">';

                echo '<div class="spacer top">';
                    echo '<div style="background-color: '. $background_colours .'" class="exspander"></div>';
                echo '</div>';

                echo '<a target="'. esc_attr($link_target) .'" style="background-color: '. $background_colours .'" class="pageLoader link" alt="link to '. $title .'" href="'. $link['url'] .'">';
    
                    echo '<div class="animate-in viewport_check_fast">';
                        echo '<div class="content-wrap">';
                                if( $icon ):
                                    echo '<div class="icon-wrap">';
                                        echo '<img alt="icon" src="'. $icon .'" />';
                                    echo '</div>';
                                endif;

                                if( $title ):
                                    echo '<span class="title">'. $link['title'] .'</span>';
                                endif;

                            echo '<div style="clear: both"></div>';
                        echo '</div>';
                    echo '</div>';

                echo '</a>';

                echo '<div style="background-color: '. $background_colours .'" class="spacer bottom">';
                    echo '<div class="exspander"></div>';
                echo '</div>';

            echo '</div>';
        }
    }
?>