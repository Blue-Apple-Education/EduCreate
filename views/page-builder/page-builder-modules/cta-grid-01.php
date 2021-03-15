<?php

    $cta_blocks = get_sub_field('cta_blocks');
    $counter = 1;
    $ratio = '942x800';
    $size = array(
        array('w' => 400, 'upsize' => false),
        array('w' => 600),
        array('w' => 800),
        array('w' => 1000),
        array('w' => 1200),
    );

    echo '<ul class="container">';
        if($cta_blocks) {
            foreach($cta_blocks as $block) {

                /**
                * Get paragraph
                */
                $title = $block['title'];
                $paragraph = $block['paragraph'];
                $image = $block['image'];
                $link = $block['link'];

                echo '<li class="block-wrap">';
                    echo '<a class="pageLoader cta-block-link" href="'. $link['url'] .'" alt=""></a>';

                    echo '<div class="image container">';
                        // echo '<svg class="absoluteCenter" xmlns="http://www.w3.org/2000/svg" width="26.222" height="93.134" viewBox="0 0 26.222 93.134"><path id="Path_55" data-name="Path 55" d="M1520.015,1583.484l-26.222-48.61,26.222-44.524Z" transform="translate(-1493.793 -1490.35)" fill="#1f4781"/></svg>';
                        
                        echo '<svg class="absoluteCenter rightAlign" viewBox="0 0 18.202 64.65" width="26.222" height="93.134" xmlns="http://www.w3.org/2000/svg"><path d="m1512 1555-18.2-33.743 18.2-30.906z" fill="#1f4781" transform="translate(-1493.793 -1490.35)"/></svg>';
                        echo '<svg class="absoluteCenter leftAlign" xmlns="http://www.w3.org/2000/svg" width="26.222" height="93.134" viewBox="0 0 18.202 64.65"><path id="Path_55" data-name="Path 55" d="M1512,1555l-18.2-33.743,18.2-30.906Z" transform="translate(1511.995 1555) rotate(180)" fill="#333126"/></svg>';

                        echo '<div class="overlay"></div>';
                        echo '<img class="background-normal fill-container animated fast fadeIn" srcset="'. generate_srcset( $image['url'], $size, $ratio ) .'" alt="background image" />';
                        echo '<div class="background-ie fill-container background-image animated slow fadeIn" style="background-image: url('. aq_resize( $image['url'], 924, 800, true, true, true )  .')"></div>';                 

                    echo '</div>';

                    echo '<div class="text container content-wrap">';
                        
                        echo '<div class="inner-wrap block viewport_check viewport_check-up">';

                            echo '<div class="underlineWrap">';
                                echo '<span class="hover-1 title white medium bold">'. $title .'</span>';
                            echo '</div>';

                            echo '<span class="paragraph block normal tall white">'. $paragraph .'</span>';
                            echo '<a href="'.$link['url'].'" alt="'.$link['title'].'">'. $link['title'].'</a>';
                        echo '</div>';

                    echo '</div>';
                echo '</li>';
            }
        }
    echo '</ul>';
?>