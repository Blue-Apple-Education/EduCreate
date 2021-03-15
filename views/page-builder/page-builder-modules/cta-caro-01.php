<?php

    $carousel_slides = get_sub_field('carousel_slides');
    $counter = 1;

    // $ratioMobile = '800x800';
    $ratio = '820x318';
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

    echo '<div class="container">';
        echo '<ul class="cta-carousel-title-paragraph">';
            if($carousel_slides) {
                foreach($carousel_slides as $slide) {

                    /**
                    * Get Content
                    */
                    $title = $slide['title'];
                    $paragraph = $slide['paragraph'];
                    $image = $slide['image']['url'];
                    $link = $slide['link'];

                    echo '<li class="slide">';
                        echo '<div class="slide-wrap">';

                            echo '<div class="image container viewport_check viewport_check-right">';
                                echo '<div class="image-wrap">';
                                    echo '<img class="fill-container mobile animated fast fadeIn" srcset="'. generate_srcset( $image, $size, $ratio ) .'" alt="background image" />';                        
                                    echo '<img class="fill-container mobileAbove animated fast fadeIn" srcset="'. generate_srcset( $image, $size, $ratio ) .'" alt="background image" />';
                                    echo '<div class="background-ie fill-container background-image animated slow fadeIn" style="background-image: url('. aq_resize( $image, 820, 318, true, true, true )  .')"></div>';
                                echo '</div>';
                            echo '</div>';

                            echo '<div class="text container content-wrap viewport_check viewport_check-left">';
                                echo '<div class="inner-wrap block">';
                                    if( $title ):

                                        $title = strip_tags($title);

                                        if (strlen($title) > 40) {
                    
                                            // truncate title
                                            $titleCut = substr($title, 0, 40);
                                            $endPoint = strrpos($titleCut, ' ');
                    
                                            //if the title doesn't contain any space then it will cut without word basis.
                                            $title = $endPoint? substr($titleCut, 0, $endPoint) : substr($titleCut, 0);
                                            $title .= '...';
                                        }

                                        echo '<div class="underlineWrap">';
                                            echo '<span class="hover-1 title medium-large bold">'. $title .'</span>';
                                        echo '</div>';
                                    endif;

                                    if( $paragraph ):

                                        // // strip tags to avoid breaking any html
                                        // $paragraph = strip_tags($paragraph);

                                        // if (strlen($paragraph) > 220) {

                                        //     // truncate paragraph
                                        //     $paragraphCut = substr($paragraph, 0, 220);
                                        //     $endPoint = strrpos($paragraphCut, ' ');

                                        //     //if the paragraph doesn't contain any space then it will cut without word basis.
                                        //     $paragraph = $endPoint? substr($paragraphCut, 0, $endPoint) : substr($paragraphCut, 0);
                                        //     $paragraph .= '...';
                                        // }

                                        echo '<span class="paragraph block normal tall">'. apply_filters('the_content', $paragraph) .'</span>';
                                    endif;
                                        
                                    if( $link ):
                                        echo '<div class="link-wrap">';
                                            echo '<a href="'. $link['url'] .'" class="pageLoader button bt-primary button--ujarak button--border-thin button--text-thick"><span>'. $link['title'] .'</span></a>';
                                        echo '</div>';
                                    endif;
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    echo '</li>';
                }
            }
        echo '</ul>';
    echo '</div>';
?>