<?php

    $title = get_sub_field('title');
    $image = get_sub_field('image');
    $link = get_sub_field('link');

    $colours = get_sub_field('colours');
    $brand_colours = $colours['brand_colours'];
    $button_styles = $colours['button_styles'];

    $ratio = '1327x406';
    $ratioMobile = '800x800';
    
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

    echo '<div class="flexbox row">';

        echo '<div style="background-color: '. $brand_colours .'" class="text container flexbox column alignCenter content-wrap">';

            echo '<div class="inner-wrap block viewport_check viewport_check-up">';
                if( $title ):
                    echo '<span class="title medium-large white bold">'. $title .'</span>';
                endif;
                
                if( $link ):
                    echo '<a href="'. $link['url'] .'" class="pageLoader button button--ujarak '. $button_styles .' button--border-thin button--text-thick"><span>'. $link['title'] .'</span></a>';
                endif;
            echo '</div>';

            echo '<svg class="bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 376.574 15.613"><path id="Path_8" data-name="Path 8" d="M374.762,2166.212H-1.812v15.613Z" transform="translate(1.812 -2166.212)" fill=" '. $brand_colours .'"/></svg>';
        echo '</div>';

        echo '<div class="image container flexbox column">';
            echo '<div style="background-color: '. $brand_colours .'" class="image-slant-overlay"></div>';
            echo '<svg class="side" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.681 406.309"><path id="Subtraction_1" data-name="Subtraction 1" d="M810.87,646.308H809.5V240h71.68Z" transform="translate(-809.5 -240)" fill=" '. $brand_colours .'"/></svg>';
            echo '<div class="overlay"></div>';
            echo '<div class="image-wrap">';
                echo '<img class="background-mobile fill-container mobile animated fast fadeIn" srcset="'. generate_srcset( $image['url'], $size, $ratioMobile ) .'" alt="background image" />';                        
                echo '<img class="background-normal fill-container animated fast fadeIn" srcset="'. generate_srcset( $image['url'], $size, $ratio ) .'" alt="background image" />';
                echo '<div class="background-ie fill-container background-image animated slow fadeIn" style="background-image: url('. $image['url'] .')"></div>';                 
            echo '</div>';
        echo '</div>';
    echo '</div>';
?>