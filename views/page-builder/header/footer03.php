<?php
    $email_address = get_field('email_address', 'option');
    $email_footer =  get_field('email_footer', 'option');
    
    $telephone = get_field('telephone', 'option');
    $telephone_footer =  get_field('telephone_footer', 'option');

    $address = get_field('address', 'option');
    $header_cta = get_field('header_cta', 'option');
    $header_cta = get_field('header_cta', 'option');
    $footer_build_text = get_field('footer_build_text', 'option');
?>

<footer class="footer03">
    <div class="container">

        <div class="slide address">
            <div class="content-wrap">
                <span class="title footer-title medium bold"><?php echo get_field('address_details', 'option')['title']; ?></span>
                <span class="paragraph block normal"><?php echo apply_filters('the_content', get_field('address_details', 'option')['address'] ); ?></span>
                <span class="paragraph block normal"><?php echo $email_address; ?></span>
                <span class="paragraph block normal">Tel: <?php echo $telephone; ?></span>

                <div class="social-icons">
                    <?php include(get_stylesheet_directory() . "/views/partial/social-icons-footer.php"); ?>
                </div>
            </div>
        </div>

        <div class="slide newsletter-signup">
            <div class="content-wrap">
                <span class="title small bold"><?php echo get_field('sign_up_to_newsletter', 'option')['title']; ?></span>
                <span class="paragraph block normal"><?php echo apply_filters('the_content', get_field('sign_up_to_newsletter', 'option')['description'] ); ?></span>

                <!-- Begin Mailchimp Signup Form -->
                <div id="mc_embed_signup">
                    <form action="<?php echo get_field('sign_up_to_newsletter', 'option')['mailchimp_form']; ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        
                        <div class="signup-input-wrap">
                            <input type="email" value="" placeholder="<?php echo get_field('sign_up_to_newsletter', 'option')['placeholder']; ?>" name="EMAIL" class="required email" id="mce-EMAIL">
                            <div class="button-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 11"><g id="Icons_24px_" data-name="Icons – 24px /" transform="translate(-5.5 -6.5)"><path id="Icon" d="M9.85,11,6.45,8.715,5.085,9.863,4.529,7.419l5.93-5.193L3.349,6.31,0,3.894,13,0Z" transform="translate(5.5 6.5)" fill="#fff"/></g></svg>
                                <input type="submit" value="" name="subscribe" id="mc-embedded-subscribe">
                            </div>
                            <div class="background"></div>
                        </div>

                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>
                        
                        <div style="position: absolute; left: -5000px;" aria-hidden="true">
                            <input type="text" name="b_762c61f052f8abcc1c2c7d533_9205aab5fb" tabindex="-1" value="">
                        </div>

                    </form>
                </div>
                <!--End mc_embed_signup-->

            </div>
        </div>

        <div class="slide footer-menu">
            <div class="content-wrap">  
                <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-main' ) ); ?>
                <div style="clear:both;"></div>
            </div>
            <div class="content-wrap">  
                <?php
                    $google_translate = get_field('google_translate', 'option');
                    $google_translate_location = get_field('google_translate_location', 'option');

                    if ( $google_translate == 1 && $google_translate_location == 'footer') {
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

        <?php if ( has_nav_menu( 'footer-menu-secondary' ) ) { ?>
            <div class="slide footer-menu secondary">
                <div class="content-wrap">  
                    <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-secondary' ) ); ?>
                    <div style="clear:both;"></div>
                </div>
            </div>
        <?php } ?>

    </div>

    <div class="lower-block">
        <div class="container">
            <div class="copyright"><span>© <?php echo date(Y); ?> <?php echo get_bloginfo(); ?>. All rights reserved.</span> <span class="divider">|</span> <a href="/welcome-to-our-school/statutory-policies/">Legal Information</a></div>
            <div class="login">
                <?php echo apply_filters('the_content', $footer_build_text ); ?> <span class="divider"> | </span><a alt="admin login" href="/wp-admin"><span>ADMIN LOGIN</span></a>
            </div>
        </div>
    </div>
</footer>   