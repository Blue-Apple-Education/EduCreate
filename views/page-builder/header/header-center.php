<?php
$pageId = get_the_ID();
    $site_logo = get_field('site_logo', 'option');
    $site_logo_dark = get_field('site_logo_dark', 'option');
    // $force_visible_header = get_field('force_visible_header', $pageId);
    $headerStyle = 'transparent';
    // if ( $force_visible_header == 1 ) {
    //     $headerStyle = 'visible';
    // }
    if ( $site_logo_dark == '' ) {
        $site_logo_dark = $site_logo;
    }
    $show_screen_size = get_field('show_screen_size', 'option');
    $screen_size = 'hide-screen-size';
    if ( $show_screen_size == 1 ) {
        $screen_size = 'show-screen-size';
    }
    $address = get_field('address', 'option');
    $email_address = get_field('email_address', 'option');
    $email_header = get_field('email_header', 'option');
    $telephone = get_field('telephone', 'option');
    $header_cta = get_field('header_cta', 'option');
    $transparent_header = get_field('transparent_header','option');

    /*------------------------------------*\
    Header07 News Update Settings
    /*------------------------------------*/
    $header_07_news_update_settings = get_field('header_07_news_update_settings', 'option');
    $show_news_update = $header_07_news_update_settings['show_news_update'];
    $news_update_logo = $header_07_news_update_settings['news_update_logo'];
    $news_update_bg = $header_07_news_update_settings['news_update_bg'];

    /*------------------------------------*\
	 BRANDING COLOURS
    \*------------------------------------*/

    $branding_colours = get_field('branding_colours', 'option');
    $primary = $branding_colours['primary'];
    $secondary = $branding_colours['secondary'];
    $tertiary = $branding_colours['tertiary'];
    $quaternary = $branding_colours['quaternary'];

    /*------------------------------------*\
	 BUTTON COLOURS
    \*------------------------------------*/

    $button_colours = get_field('button_colours', 'option');
    $bt_primary = $button_colours['primary'];
    $bt_secondary = $button_colours['secondary'];
    $bt_tertiary = $button_colours['tertiary'];
    $bt_quaternary = $button_colours['quaternary'];

    /*------------------------------------*\
	 MENU COLOURS
    \*------------------------------------*/

    $menu_colours = get_field('menu_colours', 'option');
    $mc_bg = $menu_colours['background_colour'];
    $sm_bg = $menu_colours['sub_menu_bg_colour'];
    $mc_tc = $menu_colours['text_colour'];
    $mc_hvtc = $menu_colours['hover_tab_colour'];
    $mc_hvbg = $menu_colours['hover_item_background_colour'];
    $mc_bbc = $menu_colours['bottom_border_colour'];

    /*------------------------------------*\
	 MENU OPTIONS
    \*------------------------------------*/
    $mfs = $menu_options['menu_font_size'];

    /*------------------------------------*\
	 HEADER COLOURS
    \*------------------------------------*/
    $header_colours = get_field('header_colours', 'option');
    $header_background_colour = $header_colours['header_background_colour'];
    $transparent_header = $header_colours['transparent_header'];


    // News Updates
    $news_update_1 = get_field('news_update_1', 'option');
    $news_update_2 = get_field('news_update_2', 'option');
    $news_update_3 = get_field('news_update_3', 'option');
    $news_update_4 = get_field('news_update_4', 'option');
    $news_update_5 = get_field('news_update_5', 'option');

    $search_icon = (get_stylesheet_directory() . "/theme/assets/img/search.svg");

?>
<header class="<?php echo $getHeader; ?> <?php echo $screen_size; ?>" id="header07">
    <!--  Only Show on Homepage -->
    <?php if($show_news_update && is_front_page()) : ?>
    <div class="header07-Cta align-self-center" style="background:<?php echo $news_update_bg;?>" id="header07-Cta">
        <div class=" header07-cta-inner centerPage">
            <div class="img-outer">
                <img src="<?php echo $news_update_logo;?>" alt="">
            </div>
            <!-- Require News Updates CSS File -->
            <div class="content-slider">
                <div class="slider">
                    <div class="mask">
                        <ul>
                            <li class="anim1">
                                <div class="quote"><?php echo $news_update_1;?></div>
                            </li>
                            <li class="anim2">
                                <div class="quote"><?php echo $news_update_2;?></div>
                            </li>
                            <li class="anim3">
                                <div class="quote"><?php echo $news_update_3;?></div>
                            </li>
                            <li class="anim4">
                                <div class="quote"><?php echo $news_update_4;?></div>
                            </li>
                            <li class="anim5">
                                <div class="quote"><?php echo $news_update_5;?></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
    .page {
        top: 0px !important;
    }

    .header07 {
        top: 0px !important;
        padding-bottom: 20px;
    }
    </style>
    <?php else :?>
    <style>
    .force-header-visible header.header07 .centerPage,
    .show-scrolled-menu header.header07 .centerPage {
        top: 0px;
    }

    .force-header-visible header.header07,
    .show-scrolled-menu header.header07 {
        padding-bottom: 20px !important;
        position: relative;
    }

    .row-hero-07 .hero-carousel-image {
        top: 0px !important;
    }

    .increase-header-size .row-hero-nrw-01 h1 {
        margin-top: 0% !important;
    }

    .page {
        top: 0px !important;
    }

    .header07 {
        top: 0px !important;
        padding-top: 20px;
    }
    </style>
    <?php endif; ?>
    <!-- If transparent header is SELECTED - DO THIS -->
    <?php if( $transparent_header  == 'True' ) { ?>
    <style>
    /* Move home Hero image up */
    .row-hero-07 .hero-carousel-image .background-container .background-images {
        top: 0px;
    }

    /* Header Background Colour */
    .force-header-visible header.header07,
    .show-scrolled-menu header.header07 {

        position: absolute !important;
        background-color: transparent !important;
    }

    .sticky {
        background-color: <?php echo $header_background_colour;
        ?> !important;
    }
    </style>
    <!-- If transparent header is NOT SELECTED - DO THIS -->
    <?php } else { ?>
    <style>
    /* Move home Hero image up */
    .row-hero-07 .hero-carousel-image .background-container .background-images {
        top: 150px !important;
    }

    /* Header Background Colour */
    .force-header-visible header.header07,
    .show-scrolled-menu header.header07 {
        background-color: <?php echo $header_background_colour;
        ?>;
    }

    .sticky {
        background-color: <?php echo $header_background_colour;
        ?> !important;
    }
    </style>
    <?php } ?>
    <!--  END -->
    <div class="centerPage clearfix mobile-styles-07" id="headerSticky">
        <div class=" logo-outer-wrap over-ride viewport_check viewport_check-down" id="sticky-logo-outer">
            <div class="new-logo-inner-wrap">
                <a href="<?php echo home_url(); ?>" class="link"><img id="sticky-logo-img" class="dark"
                        src="<?php echo $site_logo_dark['url'] ?>" alt="<?php echo get_bloginfo( 'name' ); ?> logo"></a>
            </div>
            </a>
        </div>
        <!-- START MOBILE-->
        <div class="mobile-header">
            <div class="hamburger hamburger--collapse ">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </div>
        </div>
        <!-- END MOBILE -->
        <div class="flexbox row">
            <div class="flexboxitem block top viewport_check viewport_check-down">
                <div class="desktop-header">
                    <div class="wp-nav-wrap" id="wp-nav-wrap">
                        <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span class="hover hover-3">','link_after'=>'</span>' ) ); ?>
                    </div>
                    <div class="header-new-left-menu" id="sticky-quick-links-hide">
                        <?php wp_nav_menu( array( 'theme_location' => 'quick-links', 'link_before' => '<span class="hover hover-3">','link_after'=>'</span>'  ) ); ?>
                    </div>
                    <div class="header-new-right-menu">
                        <div class="socials" id="socials">
                            <div class="new-search">
                                <form class="search-form search-wrap" action="/" method="get">
                                    <div class="input-group search-group">
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                            xml:space="preserve">
                                            <path style="fill: <?php echo $mc_tc;
    ?>!important;" d="M375.7,330.5C400.9,296.1,416,253.8,416,208C416,93.3,322.7,0,208,0S0,93.3,0,208s93.3,208,208,208
	c45.8,0,88.1-15.1,122.5-40.3L466.8,512l45.2-45.2C512,466.7,375.7,330.5,375.7,330.5L375.7,330.5z M208,352
	c-79.4,0-144-64.6-144-144S128.6,64,208,64s144,64.6,144,144S287.4,352,208,352L208,352z" />
                                        </svg>
                                        <input id="search" type="text" name="s" value="" placeholder="SEARCH"
                                            maxlength="128" autocomplete="off" class="form-control search-control">
                                        <input type="hidden" value="page" name="post_type" />

                                    </div><!-- /.input-group -->
                                </form><!-- /.search-form -->
                            </div>
                            <!-- END OF SEARCH -->
                            <?php
                        $google_translate = get_field('google_translate', 'option');
                        $google_translate_location = get_field('google_translate_location', 'option');

                        if ( $google_translate == 1 && $google_translate_location == 'header') { ?>
                            <div id="google_translate_element_wrap" onclick="translateTextShow()"
                                id="translateElementSize" style=" cursor:pointer;">
                                <div id="google_translate_element">
                                    <svg class="google-translate-icon" version="1.1" id="Capa_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 426.667 426.667"
                                        style="enable-background:new 0 0 426.667 426.667;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path
                                                    d="
                                        M384,64H189.44L170.667,0h-128C19.2,0,0,19.2,0,42.667V320c0,23.467,19.2,42.667,42.667,42.667H192l21.333,64H384c23.467,0,42.667-19.2,42.667-42.667V106.667C426.667,83.2,407.467,64,384,64z
                                        M110.187,268.48c-48.107,0-87.147-39.147-87.147-87.147s39.147-87.147,87.147-87.147c22.187,0,42.347,7.893,58.347,22.72l1.387,1.387l-26.027,25.173l-1.28-1.173c-6.08-5.76-16.64-12.48-32.427-12.48c-27.947,0-50.667,23.147-50.667,51.627c0,28.48,22.72,51.627,50.667,51.627c29.227,0,41.92-18.667,45.333-31.147h-47.147v-33.067h84.267l0.32,1.493c0.853,4.48,1.173,8.427,1.173,12.907C194.027,233.493,159.573,268.48,110.187,268.48z
                                        M227.733,193.6h85.227c0,0-7.253,28.053-33.28,58.347c-11.413-13.12-19.307-25.92-24.32-36.16h-21.12L227.733,193.6z
                                        M264.32,268.48l-11.413,11.307l-13.973-47.573C246.08,245.013,254.72,257.28,264.32,268.48z
                                        M405.333,384c0,11.733-9.6,21.333-21.333,21.333H234.667l42.667-42.667l-17.387-58.987l19.627-19.627l57.28,57.28l15.573-15.573l-57.707-57.28c19.2-22.08,34.133-48,40.853-74.773h27.093V171.52H285.12v-22.187h-22.187v22.187H221.12l-25.387-86.187H384c11.733,0,21.333,9.6,21.333,21.333V384z" />
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <style>
                            .force-header-visible header #google_translate_element svg path {
                                color: <?php echo $mc_tc;
                                ?>
                            }
                            </style>
                            <?php } ?>
                            <div class="header-cta-socials header-cta-socials-new">
                                <?php include(get_stylesheet_directory() . "/template-parts/parts/social-icons-header-07.php"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<style>
/* Search Icon SVG */
.form-control.search-control {
    background: transparent;
}

.input-group svg {
    width: 30px;
    height: 30px;
}
</style>
<style>
/* Translate TEXT Colour */
.force-header-visible header #google_translate_element .goog-te-menu-value span {
    color: <?php echo $mc_tc;
    ?>;
}

/* Translate ICON Colour */
.force-header-visible header #google_translate_element svg path {
    fill: <?php echo $mc_tc;
    ?>;
}

/* Menu Background */
.menu-main-menu-container ul#menu-main-menu li.level-0 ul.sub-menu,
.menu-main-menu-container ul#menu-main-menu li.level-1 ul.sub-menu,
.menu-main-menu-container ul#menu-main-menu li.level-2 ul.sub-menu,
.menu-main-menu-container ul#menu-main-menu li.level-3 ul.sub-menu {
    background-color: <?php echo $mc_bg;
    ?> !important;
}

/* Menu Text */
.menu-main-menu-container ul#menu-main-menu li.level-0 a,
.menu-main-menu-container ul#menu-main-menu li.level-1 a,
.menu-main-menu-container ul#menu-main-menu li.level-2 a,
.menu-main-menu-container ul#menu-main-menu li.level-3 a,
.force-header-visible header .socials .header-ctas a.social span {
    color: <?php echo $mc_tc;
    ?>;
    font-size: <?php echo $mfs;
    ?>;
}

.force-header-visible header.header07 .underlineWrap span,
.show-scrolled-menu header.header07 .underlineWrap span,
.force-header-visible header.header07 .underlineWrap span,
.show-scrolled-menu header.header07 .underlineWrap span a {
    color: <?php echo $mc_tc;
    ?>;
    font-size: <?php echo $mfs;
    ?>;
}

.force-header-visible .socials .header-cta-socials a svg.dark path,
.socials .header-cta-socials a svg.dark path,
.force-header-visible .socials .header-cta-socials a svg path,
.socials .header-cta-socials a svg path {
    fill: <?php echo $mc_tc;
    ?> !important;
}

/* Menu Hover Tab Colours */
.underlineWrap span.hover-3:before,
.wp-nav-wrap .menu-main-menu-container ul#menu-main-menu li.level-1:before,
.wp-nav-wrap .menu-main-menu-container ul#menu-main-menu li.level-2:before,
.wp-nav-wrap .menu-main-menu-container ul#menu-main-menu li.level-3:before {
    background-color: <?php echo $mc_hvtc;
    ?> !important;
}

.underlineWrap span.hover-3:after,
.wp-nav-wrap .menu-main-menu-container ul#menu-main-menu li.level-1:after,
.wp-nav-wrap .menu-main-menu-container ul#menu-main-menu li.level-2:after,
.wp-nav-wrap .menu-main-menu-container ul#menu-main-menu li.level-3:after {
    background-color: <?php echo $mc_hvtc;
    ?> !important;
}

/* Hover Background Colour */
.menu-main-menu-container ul#menu-main-menu li.level-1:hover,
.menu-main-menu-container ul#menu-main-menu li.level-2:hover,
.menu-main-menu-container ul#menu-main-menu li.level-3:hover {
    background-color: <?php echo $mc_hvbg;
    ?> !important;
}

/* Menu Item Bottom Border Colour */
.menu-main-menu-container ul#menu-main-menu li.level-1,
.menu-main-menu-container ul#menu-main-menu li.level-2,
.menu-main-menu-container ul#menu-main-menu li.level-3 {
    border-bottom: <?php echo $mc_bbc;
    ?>
}
</style>
<style>
/* Quick Links Menu */
.force-header-visible .header-new-left-menu,
.show-scrolled-menu .header-new-left-menu {
    text-align: left;
}

.force-header-visible .header-new-left-menu .menu-quick-links-container ul#menu-quick-links li.level-0 ul.sub-menu,
.show-scrolled-menu .header-new-left-menu .menu-quick-links-container ul#menu-quick-links li.level-0 ul.sub-menu {
    left: 24px;
}

.force-header-visible .header-new-left-menu .menu-quick-links-container ul#menu-quick-links,
.show-scrolled-menu .header-new-left-menu .menu-quick-links-container ul#menu-quick-links {
    width: 100%;
}

/* Menu Background */
.header-new-left-menu .menu-quick-links-container ul#menu-quick-links li.level-0 ul.sub-menu,
.header-new-left-menu .menu-quick-links-container ul#menu-quick-links li.level-1 ul.sub-menu,
.header-new-left-menu .menu-quick-links-container ul#menu-quick-links li.level-2 ul.sub-menu,
.header-new-left-menu .menu-quick-links-container ul#menu-quick-links li.level-3 ul.sub-menu {
    background-color: <?php echo $mc_bg;
    ?> !important;
}

/* Menu Text */
.menu-quick-links-container ul#menu-quick-links li.level-0 a,
.menu-quick-links-container ul#menu-quick-links li.level-1 a,
.menu-quick-links-container ul#menu-quick-links li.level-2 a,
.menu-quick-links-container ul#menu-quick-links li.level-3 a,
.force-header-visible header .socials .header-ctas a.social span {
    color: <?php echo $mc_tc;
    ?>;
    font-size: <?php echo $mfs;
    ?>;
}

.menu-quick-links-container ul#menu-quick-links li.level-0 ul.sub-menu a,
.menu-quick-links-container ul#menu-quick-links li.level-1 ul.sub-menu a,
.menu-quick-links-container ul#menu-quick-links li.level-2 ul.sub-menu a,
.menu-quick-links-container ul#menu-quick-links li.level-3 ul.sub-menu a {
    text-transform: capitalize !important;
}

/* Menu Hover Tab Colours */
.underlineWrap span.hover-3:before,
.header-new-left-menu .menu-quick-links-container ul#menu-quick-links li.level-1:before,
.header-new-left-menu .menu-quick-links-container ul#menu-quick-links li.level-2:before,
.header-new-left-menu .menu-quick-links-container ul#menu-quick-links li.level-3:before {
    background-color: <?php echo $mc_hvtc;
    ?> !important;
}

.underlineWrap span.hover-3:after,
.header-new-left-menu .menu-quick-links-container ul#menu-quick-links li.level-1:after,
.header-new-left-menu .menu-quick-links-container ul#menu-quick-links li.level-2:after,
.header-new-left-menu .menu-quick-links-container ul#menu-quick-links li.level-3:after {
    background-color: <?php echo $mc_hvtc;
    ?> !important;
}

/* Hover Background Colour */
.header-new-left-menu .menu-quick-links-container ul#menu-quick-links li.level-1:hover,
.header-new-left-menu .menu-quick-links-container ul#menu-quick-links li.level-2:hover,
.header-new-left-menu .menu-quick-links-container ul#menu-quick-links li.level-3:hover {
    background-color: <?php echo $mc_hvbg;
    ?> !important;
}

/* Menu Item Bottom Border Colour */
.header-new-left-menu .menu-quick-links-container ul#menu-quick-links li.level-1,
.header-new-left-menu .menu-quick-links-container ul#menu-quick-links li.level-2,
.header-new-left-menu .menu-quick-links-container ul#menu-quick-links li.level-3 {
    border-bottom: <?php echo $mc_bbc;
    ?>
}

/* Show active page underlineWrap */
li.current-menu-item .underlineWrap span.hover-3:before {
    left: calc(50%) !important;
    opacity: 1;
    width: 50%;
}

li.current-menu-item .underlineWrap span.hover-3:after {
    right: calc(50%) !important;
    opacity: 1;
    width: 50%;
}

/*************/
</style>
<style lang="scss">
.menu-is-active #main-menu {
    background-color: <?php echo $mc_bg;
    ?>;
    width: 100vw;
    overflow-x: hidden;
}

.menu-is-active #main-menu .overlay {
    background-color: transparent !important;
}

.menu-is-active #main-menu ul.menu {
    top: 100px;
    padding: 25px;
}

.menu-is-active #main-menu ul.menu li {
    text-align: left;
}

.menu-is-active .menu-main-menu-container ul#menu-main-menu-1 li.level-1 {
    padding: 10px 5px;
    margin-bottom: 3px;
}

.menu-is-active .menu-main-menu-container ul#menu-main-menu-1 li.level-1:focus,
.menu-is-active .menu-main-menu-container ul#menu-main-menu-1 li.level-1:visited,
.menu-is-active .menu-main-menu-container ul#menu-main-menu-1 li.level-1:hover {
    background-color: <?php echo $mc_hvbg;
    ?>;
}

.wp-nav-wrap .menu-main-menu-container ul#menu-main-menu li.level-1 a,
.wp-nav-wrap .menu-main-menu-container ul#menu-main-menu li.level-2 a,
.wp-nav-wrap .menu-main-menu-container ul#menu-main-menu li.level-3 a {
    text-transform: capitalize !important;
}

.wp-nav-wrap .menu-main-menu-container ul#menu-main-menu li.level-1 .menu-arrow-wrap i,
.wp-nav-wrap .menu-main-menu-container ul#menu-main-menu li.level-2 .menu-arrow-wrap i,
.wp-nav-wrap .menu-main-menu-container ul#menu-main-menu li.level-3 .menu-arrow-wrap i {
    color: <?php echo $mc_tc;
    ?>;
    position: absolute;
    top: 8px;
    left: -6px;
}

.menu-is-active .menu-main-menu-container ul#menu-main-menu-1 li.level-0 a:active {
    margin-bottom: 5px;
}

.menu-is-active .menu-main-menu-container ul#menu-main-menu-1 li.level-1 a,
.menu-is-active .menu-main-menu-container ul#menu-main-menu-1 li.level-2 a,
.menu-is-active .menu-main-menu-container ul#menu-main-menu-1 li.level-3 a {
    text-align: left;
    text-transform: capitalize !important;
    font-weight: 600 !important;
    opacity: 1 !important;
    color: <?php echo $mc_tc;
    ?>;
}

.menu-is-active .menu-main-menu-container ul#menu-main-menu-1 li.level-0 a {
    text-align: left !important;
    text-transform: uppercase;
    color: <?php echo $mc_tc;
    ?>;
}

.menu-is-active #main-menu ul.menu li.level-0 .menu-arrow-wrap {
    float: right !important;
    top: 13px !important;
}

.menu-is-active #main-menu ul.menu li.level-1 .menu-arrow-wrap {
    top: 7px !important;
}

.menu-is-active #main-menu ul.menu li.level-0 .menu-arrow-wrap i,
.menu-is-active #main-menu ul.menu li.level-1 .menu-arrow-wrap i,
.menu-is-active #main-menu ul.menu li.level-1 .menu-arrow-wrap i {
    color: <?php echo $mc_tc;
    ?>;
}

.menu-is-active.force-header-visible .hamburger,
.menu-is-active.show-scrolled-menu .hamburger {
    margin-top: 42px !important;
    right: 0px !important;
}

.menu-is-active #main-menu .new-mobile-menu-logo {
    position: absolute;
    margin-left: 15px;
}

.menu-is-active #main-menu .new-mobile-menu-logo img {
    width: 100%;
    height: auto;
    max-width: 180px;
}

.menu-is-active #main-menu ul.menu li ul.sub-menu {
    padding: 12px !important;
    background-color: <?php echo $sm_bg;
    ?>;
}

.menu-is-active #main-menu ul.menu li ul.sub-menu a {
    font-size: 18px !important;
}

.menu-is-active #main-menu ul.menu li ul.sub-menu li .menu-is-active #main-menu ul.menu li ul.sub-menu li.level-1,
.menu-is-active #main-menu ul.menu li ul.sub-menu li.level-2,
.menu-is-active #main-menu ul.menu li ul.sub-menu li.level-3,
.menu-is-active #main-menu ul.menu li ul.sub-menu li.level-4 {
    text-align: left !important;
    padding: 5px 0px;
}

.socials .header-cta-mail .social-icons,
.socials .header-cta-socials .social-icons {
    width: auto !important;
}
</style>
<style>
.force-header-visible .logo-outer-wrap img, .show-scrolled-menu .logo-outer-wrap img {
    width: 80%!important;
}
</style>
<style>
/* Sticky Menu - Logo Styles */
.sticky-logo-outer {
    top: 22px !important;
}

.sticky-logo-img {
    max-height: 65px !important;
    margin-top: -5px !important;
}

.sticky-quick-links-hide {
    display: none;
}
</style>
<style>
/* Menu to Right */
.header-type-tiered .wp-nav-wrap .menu-main-menu-container ul.menu li.level-1 ul.sub-menu.show-nav-right {
    right: 100% !important;
    left: unset !important;
}
</style>
<!-- Remove underlineWrap Hover line for inner menu items -->
<script>
$("li.level-1").find("a").removeClass("underlineWrap");
$("li.level-2").find("a").removeClass("underlineWrap");
$("li.level-3").find("a").removeClass("underlineWrap");
$("li.level-4").find("a").removeClass("underlineWrap");
$("li.level-5").find("a").removeClass("underlineWrap");
$("li.level-6").find("a").removeClass("underlineWrap");
// When the user scrolls the page, execute
window.onscroll = function() {
    headerStickyAnimate()
};
// Get the navbar
var navbar = document.getElementById("headerSticky");
var navmenu = document.getElementById("wp-nav-wrap");
var headerRemoveSticky = document.getElementById("header07-Cta");
var stickyLogoOuter = document.getElementById("sticky-logo-outer");
var stickyLogoImg = document.getElementById("sticky-logo-img");
var stickySocialHide = document.getElementById("socials");
var stickyQuickLinksHide = document.getElementById("sticky-quick-links-hide");
// Get the offset position of the navbar
var sticky = navbar.offsetTop;
// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function headerStickyAnimate() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        navbar.classList.add("sticky-animate");
        navbar.classList.add("sticky");
        navmenu.classList.add('sticky-menu-style');
        stickyLogoOuter.classList.add('sticky-logo-outer');
        stickyLogoImg.classList.add('sticky-logo-img');
        stickySocialHide.classList.add('sticky-social-hide');
        stickyQuickLinksHide.classList.add('sticky-quick-links-hide');
        document.getElementById("header07").style.top = "0px!important";
        document.getElementById("socials").style.display = "none!important";
    } else {
        navbar.classList.remove("sticky-animate");
        navbar.classList.remove("sticky");
        navmenu.classList.remove('sticky-menu-style');
        stickyLogoOuter.classList.remove('sticky-logo-outer');
        stickyLogoImg.classList.remove('sticky-logo-img');
        stickySocialHide.classList.remove('sticky-social-hide');
        stickyQuickLinksHide.classList.remove('sticky-quick-links-hide');
        document.getElementById("header07").style.top = "30px!important";
        document.getElementById("socials").style.display = "block!important";
    }
}
</script>
<?php include(get_stylesheet_directory() . "/template-parts/layouts/navigation.php"); ?>
