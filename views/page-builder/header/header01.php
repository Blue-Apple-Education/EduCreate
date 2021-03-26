<?php

    $header_background_colour = get_field('header_bg_colour', 'option');
    if ($header_background_colour !== '') {
        $header_background_colour = 'transparent!important';
    }
?>
<header class="header <?php echo $getHeader; ?> <?php echo $screen_size; ?> header-type-<?php echo $dropdown_menu_type; ?> search-not-active">

    <div class="centerPage clearfix">
        <div class="logo-outer-wrap over-ride viewport_check viewport_check-down">

                <div class="logo-inner-wrap">
                    <a class="" href="<?php echo get_site_url(); ?>" class="link">
                    <img class="light" src="<?php echo $site_logo['url']; ?>" alt="<?php echo get_bloginfo('name'); ?> logo">
                    <img class="dark" src="<?php echo $site_logo_dark['url'];?>" alt="<?php echo get_bloginfo('name'); ?> logo"></a>
                </div>

        </div>

        <div class="flexbox row">
            <div class="flexboxitem block top viewport_check viewport_check-down">

                <div class="socials">
                    <div class="header-ctas">
                        <a class=" underlineWrap outwards social link book-now" href="<?php echo $header_cta_url; ?>" alt="book a visit"><span class="hover hover-3"><?php echo $header_cta_title; ?></span></a>
                        <span class="spacer"> | </span>
                        <a class="underlineWrap outwards social link call-now" alt="call us 01625 523141" href="tel:<?php echo $telephone; ?>"><span class="hover hover-3"><?php echo $telephone; ?></span></a>
                    </div>

                    <div class="search-box">
                        <div class="header-search-activate"></div>

                        <div class="new-search-wrap">
                            <form class="search-wrap" action="/" method="get">
                                <div class="field-wrap">
                                    <input id="search" type="text" name="s" value="" placeholder="SEARCH" class="" maxlength="128" autocomplete="off">
                                    <input type="hidden" value="page" name="post_type" />
                                </div>

                                <button class="search-bt" type="submit" title="Search">
                                    <div class="icon-wrap">
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17s-17-7.626-17-17S14.61,6,23.984,6z"/><g></svg>
                                    </div>
                                </button>

                                <div class="close-bt">
                                    <div class="icon-wrap">
                                        <svg class="close" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve"><g><g><path d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285L284.286,256.002z"/></g></g></svg>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="header-cta-socials">
                        <a class="social-network" alt="social link">
                            <svg class="light" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.02 22.396"><g id="Connect_Reduced" data-name="Connect Reduced" transform="translate(0.044 -0.07)"><path id="Path_1398" data-name="Path 1398" d="M16.327,15.167a3.637,3.637,0,0,0-2.552,1.048L7.188,11.9a3.661,3.661,0,0,0,.067-.667,3.583,3.583,0,0,0-.187-1.1l6.54-4.008a3.632,3.632,0,1,0-.931-2.41,3.576,3.576,0,0,0,.061.6L5.963,8.471a3.613,3.613,0,0,0-2.357-.887A3.649,3.649,0,1,0,6.28,13.7l6.509,4.264a3.612,3.612,0,0,0-.112.856,3.649,3.649,0,1,0,3.65-3.65Zm0-12.835a1.388,1.388,0,1,1-1.388,1.387A1.387,1.387,0,0,1,16.327,2.332ZM3.605,12.621a1.388,1.388,0,1,1,1.388-1.388A1.388,1.388,0,0,1,3.605,12.621ZM16.327,20.2a1.387,1.387,0,1,1,1.387-1.387A1.387,1.387,0,0,1,16.327,20.2Z" fill="#fff"/></g></svg>
                            <svg class="dark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.02 22.396"><g id="Connect_Reduced" data-name="Connect Reduced" transform="translate(0.044 -0.07)"><path id="Path_1398" data-name="Path 1398" d="M16.327,15.167a3.637,3.637,0,0,0-2.552,1.048L7.188,11.9a3.661,3.661,0,0,0,.067-.667,3.583,3.583,0,0,0-.187-1.1l6.54-4.008a3.632,3.632,0,1,0-.931-2.41,3.576,3.576,0,0,0,.061.6L5.963,8.471a3.613,3.613,0,0,0-2.357-.887A3.649,3.649,0,1,0,6.28,13.7l6.509,4.264a3.612,3.612,0,0,0-.112.856,3.649,3.649,0,1,0,3.65-3.65Zm0-12.835a1.388,1.388,0,1,1-1.388,1.387A1.387,1.387,0,0,1,16.327,2.332ZM3.605,12.621a1.388,1.388,0,1,1,1.388-1.388A1.388,1.388,0,0,1,3.605,12.621ZM16.327,20.2a1.387,1.387,0,1,1,1.387-1.387A1.387,1.387,0,0,1,16.327,20.2Z" fill="#fff"/></g></svg>
                        </a>
                        <?php include(get_stylesheet_directory() . "/views/partial/social-icons-header.php"); ?>
                    </div>

                    <?php if ($email_address): ?>
                        <div class="header-cta-mail">
                            <a target="_blank" class="animate-social social link mailus" alt="mail us" href="mailto:<?php echo $email_address; ?>">
                                <svg class="light" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.183 22.503"><path id="Icon" d="M29.181,21.5H0V0H29.183V21.5h0ZM2.457,19.045H26.724V7.746L14.6,13.973,2.457,7.914Zm12.129-7.826L26.724,4.982V2.457H2.457V5.168Z" transform="translate(0.5 0.5)" stroke="rgba(0,0,0,0)" stroke-width="1"/></svg>
                                <svg class="dark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.183 22.503"><path id="Icon" d="M29.181,21.5H0V0H29.183V21.5h0ZM2.457,19.045H26.724V7.746L14.6,13.973,2.457,7.914Zm12.129-7.826L26.724,4.982V2.457H2.457V5.168Z" transform="translate(0.5 0.5)" stroke="rgba(0,0,0,0)" stroke-width="1"/></svg>
                            </a>
                        </div>
                    <?php endif; ?>

                    <?php
                        $google_translate = get_field('google_translate', 'option');
                        $google_translate_location = get_field('google_translate_location', 'option');

                        if ($google_translate == 1 && $google_translate_location == 'header') {
                            ?>
                                <div id="google_translate_element_wrap">
                                    <div id="google_translate_element">
                                        <svg class="google-translate-icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 426.667 426.667" style="enable-background:new 0 0 426.667 426.667;" xml:space="preserve"><g><g><path d="M384,64H189.44L170.667,0h-128C19.2,0,0,19.2,0,42.667V320c0,23.467,19.2,42.667,42.667,42.667H192l21.333,64H384c23.467,0,42.667-19.2,42.667-42.667V106.667C426.667,83.2,407.467,64,384,64z M110.187,268.48c-48.107,0-87.147-39.147-87.147-87.147s39.147-87.147,87.147-87.147c22.187,0,42.347,7.893,58.347,22.72l1.387,1.387l-26.027,25.173l-1.28-1.173c-6.08-5.76-16.64-12.48-32.427-12.48c-27.947,0-50.667,23.147-50.667,51.627c0,28.48,22.72,51.627,50.667,51.627c29.227,0,41.92-18.667,45.333-31.147h-47.147v-33.067h84.267l0.32,1.493c0.853,4.48,1.173,8.427,1.173,12.907C194.027,233.493,159.573,268.48,110.187,268.48z M227.733,193.6h85.227c0,0-7.253,28.053-33.28,58.347c-11.413-13.12-19.307-25.92-24.32-36.16h-21.12L227.733,193.6z M264.32,268.48l-11.413,11.307l-13.973-47.573C246.08,245.013,254.72,257.28,264.32,268.48z M405.333,384c0,11.733-9.6,21.333-21.333,21.333H234.667l42.667-42.667l-17.387-58.987l19.627-19.627l57.28,57.28l15.573-15.573l-57.707-57.28c19.2-22.08,34.133-48,40.853-74.773h27.093V171.52H285.12v-22.187h-22.187v22.187H221.12l-25.387-86.187H384c11.733,0,21.333,9.6,21.333,21.333V384z"/></g></g></svg>
                                    </div>
                                </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>

        <div class="wp-nav-wrap">
            <?php wp_nav_menu(array( 'theme_location' => 'main-menu' )); ?>
        </div>

    </div>
    <!-- <p>header_bg_colour <?php echo $header_bg_colour;?></p>
    <p>transparent_header <?php echo $transparent_header;?></p> -->
</header>

<style>
.solid_background header {
    background-color: <?php echo $background_header;?>!important;
}
.header{
    background-color: <?php echo $header_bg_colour;?>;
    height: 15%;
}
.scrolled-header header {
    background-color: <?php echo $header_bg_colour; ?>!important;
}

@media only screen and (max-width:1024px){
  .header{
    height: auto;
    padding-bottom: 6%;
  }
  .menu__toggler{
    opacity:1;
    z-index: 10000;
  }
}
@media only screen and (min-width:1024px){
  .header{
    height: auto;
    padding-bottom: 70px;
  }
  .menu__toggler{
    opacity:0;
    z-index: 0;
  }
}
.wp-nav-wrap .menu-main-menu-container ul.menu li.level-0 a{
  color:<?php echo $header_text_and_icon_colours;?>;
}
.new-search-wrap{
  display:none;
}
.socials {
  display: none;
}
.wp-nav-wrap .menu-main-menu-container ul.menu li.menu-item ul.sub-menu li.menu-item:hover {
  background:<?php echo $mc_hvbg;?>;
}
.wp-nav-wrap .menu-main-menu-container ul.menu li.menu-item ul.sub-menu li.menu-item::before {
color:<?php echo $mc_hvtc;?>;
}
.wp-nav-wrap .menu-main-menu-container ul.menu li.menu-item ul.sub-menu li.menu-item:hover a{
  color:<?php echo $mc_tc;?>;
}
.wp-nav-wrap .menu-main-menu-container ul.menu .level-0:last-child ul.sub-menu li.level-1:hover>ul.sub-menu,
.wp-nav-wrap .menu-main-menu-container ul.menu .level-0:last-child ul.sub-menu li.level-2:hover>ul.sub-menu,
.wp-nav-wrap .menu-main-menu-container ul.menu .level-0:last-child ul.sub-menu li.level-3:hover>ul.sub-menu,
.wp-nav-wrap .menu-main-menu-container ul.menu .level-0:nth-last-child(2) ul.sub-menu li.level-1:hover>ul.sub-menu,
.wp-nav-wrap .menu-main-menu-container ul.menu .level-0:nth-last-child(2) ul.sub-menu li.level-2:hover>ul.sub-menu,
.wp-nav-wrap .menu-main-menu-container ul.menu .level-0:nth-last-child(2) ul.sub-menu li.level-3:hover>ul.sub-menu,
.wp-nav-wrap .menu-main-menu-container ul.menu .level-0:nth-last-child(3) ul.sub-menu li.level-1:hover>ul.sub-menu,
.wp-nav-wrap .menu-main-menu-container ul.menu .level-0:nth-last-child(3) ul.sub-menu li.level-2:hover>ul.sub-menu,
.wp-nav-wrap .menu-main-menu-container ul.menu .level-0:nth-last-child(3) ul.sub-menu li.level-3:hover>ul.sub-menu {
  -webkit-transform: translate(-100%, 0px)!important;
  transform: translate(-100%, 0px)!important;
}
.wp-nav-wrap .menu-main-menu-container ul.menu li.menu-item ul.sub-menu {
  background-color: <?php echo $sm_bg;?>!important;
  overflow: visible;
}
.wp-nav-wrap .menu-main-menu-container ul.menu li.level-0 ul.sub-menu{

}
.wp-nav-wrap .menu-main-menu-container ul.menu li.level-1:hover>ul.sub-menu,
.wp-nav-wrap .menu-main-menu-container ul.menu li.level-2:hover>ul.sub-menu ,
.wp-nav-wrap .menu-main-menu-container ul.menu li.level-3:hover>ul.sub-menu  {
  transform: translate(100%, 0%)!important;
  left: 0px;
  top: 0px;
  z-index: 1000;
}
</style>
<?php include(get_stylesheet_directory() . "/views/partial/layouts/navigation.php"); ?>
