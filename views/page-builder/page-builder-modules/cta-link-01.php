<?php
    $style = get_sub_field('style');
    $module_margin = get_sub_field('module_margin');
    $links_files = get_sub_field('links_files');
    
    if ( $style == 'images') {
        $cta_links = get_sub_field('links');

        $ratio = '563x362';
        $size = array(
            array('w' => 400, 'upsize' => false),
            array('w' => 600),
            array('w' => 800),
            array('w' => 1000),
            array('w' => 1200),
            array('w' => 1400),
            array('w' => 1600),
            array('w' => 1800),
            array('w' => 2000),
            array('w' => 2400),
            array('w' => 2800),
            array('w' => 3200),
            array('w' => 3600),
            array('w' => 4000),
        );
    } else if ( $style == 'icons') {
        $cta_links = get_sub_field('files');
        $columns = get_sub_field('columns');
        $text_size = get_sub_field('text_size');
        $text_colour = get_sub_field('text_colour');
    }

    echo '<ul class="container center animate-gallery margin-'. $module_margin .'">';
        if($cta_links) {
            foreach($cta_links as $links) {

                if ( $style == 'images') {
                    
                    $image = $links['image']['url'];
                    $title = $links['title'];
                    $overlay_opacity = $links['overlay_opacity'];
    
                    echo '<li class="link-item-wrap gallery-item">';

                        if ( $links_files == 'links') {
                            $url = $links['link'];
                            echo '<a href="'. $url['url'] .'" class=""></a>';
                        } else {
                            $url = $links['file'];
                            echo '<a href="'. $url['url'] .'" class="file"></a>';
                        }
                        
                        echo '<div class="text container flexbox column content-wrap">';
                            echo '<div class="inner-wrap block viewport_check viewport_check-up">';
                                if( $title ):
                                    echo '<span class="title">'. $title .'</span>';
                                endif;
                            echo '</div>';
                        echo '</div>';
    
                        echo '<div class="image container">';
                            echo '<div style="opacity: 0.'. $overlay_opacity .'" class="overlay"></div>';
                            echo '<div class="background-images">';
                                echo '<img class="background-normal fill-container" srcset="'. generate_srcset( $image, $size, $ratio ) .'" alt="background image" />';
                                echo '<div class="background-ie fill-container background-image animated slow fadeIn" style="background-image: url('. aq_resize( $image, 563, 362, true, true, true )  .')"></div>';
                            echo '</div>';
                        echo '</div>';
                    echo '</li>';

                } else if ( $style == 'icons') {

                    $icon = $links['icon']['url'];
                    $title = $links['title'];
                    $description = $links['description'];
                    
                    echo '<li class="file-item-wrap gallery-item column-count-'. $columns .'">';

                        if ( $links_files == 'links') {
                            $url = $links['link'];
                            echo '<a href="'. $url['url'] .'" class=""></a>';
                        } else {
                            $url = $links['file'];
                            echo '<a href="'. $url['url'] .'" class="file"></a>';
                        }

                        echo '<div class="text container flexbox column content-wrap">';
                            echo '<div class="inner-wrap block viewport_check viewport_check-up">';
                                if( $icon ):
                                    echo '<img src="'. $icon .'" alt="file icon">';
                                endif;
                                
                                if( $title ):
                                    echo '<span style="color: '. $text_colour .'" class="title text-size-'. $text_size .'">'. $title .'</span>';
                                endif;

                                if( $description ):
                                    echo '<span style="color: '. $text_colour .'" class="description text-size-'. $text_size .'">'. $description .'</span>';
                                endif;
                            echo '</div>';
                        echo '</div>';
                    echo '</li>';
                }
            }
        }
    echo '</ul>';
?>