<?php
        $cta_icons = get_sub_field('cta_icons');
        $choose_background_colour = get_sub_field('choose_background_colour')['background_colours'];
        $text_colours = get_sub_field('choose_background_colour')['text_colours'];
        
        echo '<div class="outer-wrap" style="background-color: '. $choose_background_colour .';">';
            echo '<div class="container">';

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
                    $title = $row['title'];
                    $paragraph = $row['paragraph'];
                    $link = $row['link'];

                    echo '<div class="row-item rows-'. $count .'">';

                        if( $link ):
                            echo '<a class="animate pageLoader link" alt="link to '. $title .'" href="'. $link .'">';
                        endif;

                            echo '<div class="animate-in viewport_check">';
                                echo '<div class="content-wrap">';
                                    if( $icon ):
                                        echo '<div class="icon-wrap">';
                                            echo '<img alt="link icon" src="'. $icon .'" />';
                                        echo '</div>';
                                    endif;

                                    if( $title ):
                                        echo '<span style="color: '. $text_colours .'" class="title">'. $title .'</span>';
                                    endif;

                                    if( $paragraph ):
                                        echo '<span style="color: '. $text_colours .'" class="paragraph">'. $paragraph .'</span>';
                                    endif;

                                    echo '<div style="clear: both"></div>';
                                echo '</div>';
                            echo '</div>';

                        if( $link ):
                            echo '</a>';
                        endif;

                    echo '</div>';
                }
            }
            
        echo '</div>';
    echo '</div>';
?>