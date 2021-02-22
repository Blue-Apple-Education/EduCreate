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
                    <img src="https://educreate.local/wp-content/uploads/2021/02/Blue-Apple-Education-Roundal-Blue.png"
                        alt="">
                </a>
            </div>

            <!-- Menu -->
            <nav class="col-lg-9 col-md-6 col-sm-6 desktop-menu-01 uk-navbar-container uk-navbar-transparent" uk-navbar>
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li>
                            <a href="#">Parent</a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-active"><a href="#">Active</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li><a href="#">Item</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Item</a></li>
                    </ul>

                </div>
            </nav>

            <!-- Hamburger Menu Toggle -->
            <div class="hamburger-menu-01">
                <a class="mobile-off-canvas" href="#offcanvas-slide" class="uk-button uk-button-default"
                    uk-toggle>Open</a>
            </div>


            <!-- Hamburger Sliding Menu -->
            <div id="offcanvas-slide" uk-offcanvas>
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
            </div>
        </div>
    </div>
</div>
<style>
.hamburger-menu-01 a.mobile-off-canvas {
    display: none;
}

@media only screen and (max-width:768px) {
    .hamburger-menu-01 a.mobile-off-canvas {
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
    ?>;
}

.header_padding {
    padding: 20px 45px;
    position: relative;
}

.logo img {
    width: auto;
    height: 100px;
}


/* Navbar */
.uk-navbar-nav>li>a {
    color: <?php echo $menu_item_color;
    ?>;
}

.uk-navbar-nav>li.uk-active>a {
    color: <?php echo $menu_item_active;
    ?>;
}

.uk-navbar-nav>li:hover>a,
.uk-navbar-nav>li>a.uk-open,
.uk-navbar-nav>li>a:focus {
    color: <?php echo $menu_item_hover;
    ?>;
    outline: 0;
}

.uk-navbar-dropdown {
    min-width: 200px;
    padding: 20px;
    background: <?php echo $menu_item_dropdown_background;
    ?>;
    color: <?php echo $menu_item_color;
    ?>;
}

.uk-navbar-dropdown-nav>li>a:hover {
    color: #666;
}

/* Hamburger Menu */
.uk-offcanvas-bar {
    background: <?php echo $header_background;
    ?>;
}
</style>