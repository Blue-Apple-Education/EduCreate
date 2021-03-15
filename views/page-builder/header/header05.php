<?php
    $pageId = get_the_ID();
    $site_logo = get_field('site_logo', 'option');
    $force_visible_header = get_field('force_visible_header', $pageId);
    $headerStyle = 'transparent';

    if ( $force_visible_header == 1 ) {
        $headerStyle = 'visible';
    }

    $show_screen_size = get_field('show_screen_size', 'option');
    $screen_size = 'hide-screen-size';
    if ( $show_screen_size == 1 ) {
        $screen_size = 'show-screen-size';
    }
    
    $email_address = get_field('email_address', 'option');
    $telephone = get_field('telephone', 'option');
    $address = get_field('address', 'option');
    $header_cta = get_field('header_cta', 'option');
?>

<header class="<?php echo $getHeader; ?> <?php echo $screen_size; ?>">

    <div class="centerPage clearfix">

        <div class="logo-outer-wrap viewport_check viewport_check-down">
            <a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>" class="link"></a>
            <div class="logo-wrap">
                <img src="<?php echo get_site_url(); ?>" alt="Site Logo">
            </div>
            <div class="line"></div>
            <div class="school-name"><span><?php echo get_bloginfo( 'name' ); ?></span></div>
        </div>


        <div class="flexbox row">
            <div class="flexboxitem block top viewport_check viewport_check-down">

                <div class="hamburger hamburger--collapse ">
                    <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                    </div>
                </div>

                <div class="socials">

                    <div class="header-ctas">
                        <a class=" underlineWrap outwards social link book-now" href="<?php echo $header_cta['url'] ?>" alt="book a visit"><span class="hover hover-3"><?php echo $header_cta['title'] ?></span></a>
                        <span class="spacer"> | </span>
                        <a class="underlineWrap outwards social link call-now" alt="call us 01625 523141" href="tel:<?php echo $telephone; ?>"><span class="hover hover-3"><?php echo $telephone; ?></span></a>
                    </div>

                    <div class="header-cta-socials">
                        <a class="social-network" alt=" social link">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.02 22.396"><g id="Connect_Reduced" data-name="Connect Reduced" transform="translate(0.044 -0.07)"><path id="Path_1398" data-name="Path 1398" d="M16.327,15.167a3.637,3.637,0,0,0-2.552,1.048L7.188,11.9a3.661,3.661,0,0,0,.067-.667,3.583,3.583,0,0,0-.187-1.1l6.54-4.008a3.632,3.632,0,1,0-.931-2.41,3.576,3.576,0,0,0,.061.6L5.963,8.471a3.613,3.613,0,0,0-2.357-.887A3.649,3.649,0,1,0,6.28,13.7l6.509,4.264a3.612,3.612,0,0,0-.112.856,3.649,3.649,0,1,0,3.65-3.65Zm0-12.835a1.388,1.388,0,1,1-1.388,1.387A1.387,1.387,0,0,1,16.327,2.332ZM3.605,12.621a1.388,1.388,0,1,1,1.388-1.388A1.388,1.388,0,0,1,3.605,12.621ZM16.327,20.2a1.387,1.387,0,1,1,1.387-1.387A1.387,1.387,0,0,1,16.327,20.2Z" fill="#fff"/></g></svg>
                        </a>

                        <?php include(get_stylesheet_directory() . "/views/partial/social-icons-header-02.php"); ?>

                        <?php if( $email_address ): ?>
                            <div class="header-cta-mail">
                                <a target="_blank" class="animate-social social link mailus" alt="mail us" href="mailto:<?php echo $email_address; ?>">
                                    <svg class="light" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.183 22.503"><path id="Icon" d="M29.181,21.5H0V0H29.183V21.5h0ZM2.457,19.045H26.724V7.746L14.6,13.973,2.457,7.914Zm12.129-7.826L26.724,4.982V2.457H2.457V5.168Z" transform="translate(0.5 0.5)" stroke="rgba(0,0,0,0)" stroke-width="1"/></svg>
                                    <svg class="dark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.183 22.503"><path id="Icon" d="M29.181,21.5H0V0H29.183V21.5h0ZM2.457,19.045H26.724V7.746L14.6,13.973,2.457,7.914Zm12.129-7.826L26.724,4.982V2.457H2.457V5.168Z" transform="translate(0.5 0.5)" stroke="rgba(0,0,0,0)" stroke-width="1"/></svg>
                                </a>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>

        <div class="background-bar-text"><?php echo get_bloginfo( 'name' ); ?></div>
        <div class="background-bar"></div>

    </div>
</header>

<?php include(get_stylesheet_directory() . "/views/partial/layouts/navigation.php"); ?>