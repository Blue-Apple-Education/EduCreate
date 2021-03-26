<?php

$branding_colours = get_field('branding_colours', 'option');
$primary = $branding_colours['primary'];
$secondary = $branding_colours['secondary'];
$tertiary = $branding_colours['tertiary'];
$quarternary = $branding_colours['quarternary'];


    echo '<div class="viewport_check">';
        echo '<div class="news-event-item-wrap">';
            echo '<div class="img-wrap">';

                if ($file != '') {
                    $url = $file['url'];
                    $target = '_blank';
                } else {
                    $url = get_the_permalink();
                    $target = '';
                }

                echo '<a class="" target="'. $target .'" href="'. $url .'"></a>';

                $ratio = '499x205';
                echo '<div class="overlay"></div>';
                if ($image):
                    echo '<img class="desktop fill-container animated fast fadeIn" src="'. $image .'" alt="background image" />';

                    echo '<div class="background-ie">';
                        echo '<div class="fill-container background-image animated slow fadeIn exspand-over-time" style="background-image: url('. aq_resize($image, 1920, 1200, true, true, true) .')"></div>';
                    echo '</div>';
                endif;

            echo '</div>';

            echo '<div class="content-wrap">';
                if ($title):
                    echo '<a class="" target="'. $target .'" href="'. $url .'">';
                        echo '<div class="underlineWrap">';
                            echo '<span class="hover-1 title dark medium bold">'. $title .'</span>';
                        echo '</div>';
                    echo '</a>';
                endif;

                if ($preview):
                    echo '<span class="paragraph normal dark">';
                        echo apply_filters('the_content', $preview);
                    echo '</span>';
                endif;

                echo '<div class="button-wrap">';

                    if ($buttonText == '') {
                        if ($file != '') {
                            $buttonText = 'Download';
                        } else {
                            $buttonText = 'Read more';
                        }
                    }

                    echo '<a href="'. $url .'" target="'. $target .'" class="ib-button"><span>'. $buttonText .'</span></a>';

                echo '</div>';

            echo '</div>';
        echo '</div>';
    echo '</div>';?>

    <style>
    .newsfeed-pg-01{
      min-height:400px;
    }
.news-event-item-wrap .img-wrap img {
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition: all 0.5s ease-in-out;
    display: block!important;}
    .news-event-item-wrap a.ib-button{
background:<?php echo $primary;?>!important;
height:50px;
    }
    </style>
