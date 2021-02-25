<?php
$pageId = get_the_ID();
$site_logo = get_field('site_logo', 'option');
$site_logo_dark = get_field('site_logo_dark', 'option');

$headerStyle = 'transparent';

// Header Information
$address = get_field('address', 'option');

$email_address = get_field('email_address', 'option');
$email_header = get_field('email_header', 'option');

$telephone = get_field('telephone', 'option');
$header_cta = get_field('header_cta', 'option');


// Header Background Colours
$header_background = "#fff";
$hamburger_menu_bg = '#3c3c3c';
$transparentMenu = '';


// Menu Colours
$menu_item_color = get_field('menu_item_color', 'option');
$menu_item_active = get_field('menu_item_active', 'option');
$menu_item_dropdown_background = get_field('menu_item_dropdown_background', 'option');

?>
<div class="header01 fixed">
    <div class="header_padding header_colour">
        <div class="row">

            <!-- Logo -->
            <div class="logo col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <a href="/">
                    <img src="<?php echo esc_url($site_logo); ?> https://educreate.local/wp-content/uploads/2021/02/Blue-Apple-Education-Roundal-Blue.png"
                        alt="">
                </a>
            </div>
            <div class="col-lg-9 wp-nav-wrap" id="main-menu">
                <?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>
            </div>

            <!-- Menu -->
            <!-- <nav class="col-lg-9 col-md-6 col-sm-6 desktop-menu-01 uk-navbar-container uk-navbar-transparent  uk-navbar>
                <div class=" uk-navbar-right"> -->

            <!-- UIKit Top Menu Walker File -->
            <?php /* do_action('uikit_top_menu'); */ ?>


            <!-- </nav> -->


            <!-- OFF CANVAS MENU -->
            <!-- Hamburger Menu Toggle -->
            <div class="hamburger-menu-01">
                <a href="#offcanvas-slide" class="uk-button uk-button-default" uk-toggle>Open</a>
            </div>

            <!-- Hamburger Sliding Menu -->
            <?php do_action('uikit_off_canvas_menu'); ?>
            <!-- <div id="offcanvas-slide" uk-offcanvas>
                <div class="uk-offcanvas-bar">

                    <ul class="uk-nav uk-nav-default">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-nav-header">Header</li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-nav-divider"></li>
                        <li><a href="#">Item</a></li>
                    </ul>

                </div>
            </div> -->
        </div>
    </div>
</div>
<style>
.hamburger-menu-01 {
    display: none;
}

@media only screen and (max-width:768px) {
    .hamburger-menu-01 {
        display: block;
    }

    .desktop-menu-01 {
        display: none;
    }
}

.header01 .fixed {
    position: absolute;
    z-index: 101;
    width: 100%;
}

.header_colour {
    background: <?php echo $header_background;
    ?> !important;
}

.header_padding {
    padding: 20px 45px;
    position: relative;
}

.logo img {
    width: auto;
    height: 100px;
}

/* Navigation */
#main-menu {
    margin-left: auto;
}

.menu-primary-menu-container {
    background: #fefefe;
    top: 58px;
    padding: 40px 0px 30px 0px;
    text-align: right;
    display: ;
}

.menu-primary-menu-container ul.menu {
    padding-left: 0px;
    width: 100%;
    margin-bottom: 0px;
}

.menu-primary-menu-container ul.menu li.level-0 {
    display: inline-block !important;
    padding: 10px 12px;
}

.menu-primary-menu-container ul li {
    display: block;
}

.menu-primary-menu-container ul li a {
    text-decoration: none;
}

.menu-primary-menu-container ul.menu li.level-0:hover>ul.sub-menu {
    height: auto;
    padding: 20px;
    -webkit-transition: all 0.25s ease-in-out;
    -moz-transition: all 0.25s ease-in-out;
    -o-transition: all 0.25s ease-in-out;
    transition: all 0.25s ease-in-out;
}

.menu-primary-menu-container ul.menu li.level-0:last-child:hover>ul.sub-menu {
    right: 20px;
}

.menu-primary-menu-container ul.menu li.level-0:hover>ul.sub-menu a {
    display: block;
}

.menu-primary-menu-container ul.menu li.level-0 ul.sub-menu a {
    display: none;
}

.menu-primary-menu-container ul.menu li.level-1 {}

.open {
    display: block !important;
}

.closed {
    display: none;
}

ul.sub-menu {
    background: #3c3c3c;
    width: auto;
    min-width: 140px;
    position: absolute;
    padding: 0px;
    height: 0px;
    margin-top: 10px;
    text-align: left;
    padding-left: 20px;
    -webkit-transition: all 0.25s ease-in-out;
    -moz-transition: all 0.25s ease-in-out;
    -o-transition: all 0.25s ease-in-out;
    transition: all 0.25s ease-in-out;
}
</style>