<?php
    $menu_font_size = get_field('menu_font_size', 'option');
?>

<div id="main-menu" class="container windowHeight fill-container fixed menu-size-<?php echo $menu_font_size; ?>">
    <div class="fill-container overlay"></div>

    <?php

        /**
        * Set image resolutions
        */
        $desktopRatio = '3840x2160';
        $tabletRatio = '1668x2224';
        $mobileRatio = '828x1792';

        $nav_background_image = '';
        $nav_background_image = get_field('nav_background_image', 'option');

        $mobileImageURL = '';
        $mobileImageURL = get_field('nav_background_image_mobile', 'option');

        $tabletImageURL = '';
        $tabletImageURL = get_field('nav_background_image_tablet', 'option');

        if ($tabletImageURL == '') {
            $tabletImageURL = $nav_background_image;
        }

        if ($mobileImageURL == '') {
            $mobileImageURL = $tabletImageURL;
        }

        $desktopRatio = '3840x2160';
        $size = array(
            array('w' => 200, 'upsize' => false),
            array('w' => 400),
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

    ?>

    <div class="background-images">
        <img class="background-mobile fill-container" srcset="<?php echo generate_srcset($mobileImageURL['url'], $size, $mobileRatio) ?>" alt="background image" />
        <img class="background-tablet fill-container" srcset="<?php echo generate_srcset($tabletImageURL['url'], $size, $tabletRatio) ?>" alt="background image" />
        <img class="background-desktop fill-container" srcset="<?php echo generate_srcset($nav_background_image['url'], $size, $desktopRatio) ?>" alt="background image" />

        <!-- <img class="fill-container animated fast fadeIn" srcset="<?php //echo generate_srcset( $nav_background_image['url'], $size, $ratio)?>" alt="navigation background image" /> -->

        <div class="background-ie">
            <div class="fill-container background-image animated slow fadeIn exspand-over-time" style="background-image: url(<?php echo aq_resize($nav_background_image['url'], 3840, 2160, true, true, true); ?>)"></div>
        </div>
    </div>

    <div class="fill-container menu-wrap flexbox row alignCenter">
        <div class="block">
            <?php wp_nav_menu(array( 'theme_location' => 'main-menu' )); ?>
        </div>
    </div>



</div>

<?php include(get_stylesheet_directory() . "/views/partial/layouts/mobile-menu.php"); ?>


<?php

    if ($menu_style == 'two') {
        echo '<div class="menu-two-overlay"></div>';
    }
?>
