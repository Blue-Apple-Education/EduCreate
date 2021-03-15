<?php
    $size = array(
        array('w' => 400, 'upsize' => true),
        array('w' => 600),
        array('w' => 800),
        array('w' => 1000),
        array('w' => 1200),
        array('w' => 1400),
        array('w' => 1600),
        array('w' => 1800),
        array('w' => 2000),
        array('w' => 2200),
        array('w' => 2400),
        array('w' => 2600),
        array('w' => 2800),
        array('w' => 3000),
        array('w' => 3200),
        array('w' => 3400),
        array('w' => 3600),
        array('w' => 3800),
        array('w' => 4000),
    );

    if ($mobileImageURL == '') {
        $mobileImageURL = $desktopImageURL;
    }
    
    if ($tabletImageURL == '') {
        $tabletImageURL = $desktopImageURL;
    }

    echo '<div class="background-images">';
        echo '<img class="background-mobile fill-container" srcset="'. generate_srcset( $mobileImageURL, $size, $mobileRatio ) .'" alt="background image" />';
        echo '<img class="background-tablet fill-container" srcset="'. generate_srcset( $tabletImageURL, $size, $tabletRatio ) .'" alt="background image" />';
        echo '<img class="background-desktop fill-container" srcset="'. generate_srcset( $desktopImageURL, $size, $desktopRatio ) .'" alt="background image" />';
        echo '<div class="background-ie fill-container background-image animated slow fadeIn" style="background-image: url('. aq_resize( $desktopImageURL, 3840, 882, true, true, true ) .')"></div>';
    echo '</div>';

?>