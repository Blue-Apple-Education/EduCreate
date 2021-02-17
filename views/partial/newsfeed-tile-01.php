<?php
    echo '<div class="news-animate viewport_check">';
        echo '<div class="news-event-item-wrap">';
            echo '<div class="img-wrap">';
                
                if ( $file != '' ) {
                    $url = $file['url'];
                    $target = '_blank';
                } else {
                    $url = get_the_permalink();
                    $target = '';
                }
                
                echo '<a class="pageLoader" target="'. $target .'" href="'. $url .'"></a>';

                $ratio = '499x205';
                echo '<div class="overlay"></div>';
                include(get_stylesheet_directory() . "/template-parts/parts/background-image.php"); 

            echo '</div>';

            echo '<div class="content-wrap">';
                if( $title ):
                    echo '<a class="pageLoader" target="'. $target .'" href="'. $url .'">';
                        echo '<div class="underlineWrap">';
                            echo '<span class="hover-1 title dark medium bold">'. $title .'</span>';
                        echo '</div>';
                    echo '</a>';
                endif;

                if( $preview ):
                    echo '<span class="paragraph normal dark">';
                        echo apply_filters('the_content', $preview);
                    echo '</span>';
                endif;
            
                echo '<div class="button-wrap">';

                    if ( $buttonText == '') {
                        if ( $file != '' ) {
                            $buttonText = 'Download';
                        } else {
                            $buttonText = 'Read more';
                        }
                    }

                    echo '<a href="'. $url .'" target="'. $target .'" class="pageLoader button bt-primary button--ujarak button--border-thin button--text-thick"><span>'. $buttonText .'</span></a>';

                echo '</div>';
                
            echo '</div>';
        echo '</div>';
    echo '</div>';