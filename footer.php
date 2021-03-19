<?php
    $social_title = get_field('social_title', 'option');
    if ($social_title == '') {
        $social_title = 'CONNECT WITH US';
    }

    $footer_image = get_field('footer_image', 'option');
    $email_address = get_field('email_address', 'option');
    $email_footer =  get_field('email_footer', 'option');
    $telephone = get_field('telephone', 'option');
    $telephone_footer =  get_field('telephone_footer', 'option');
    $footer_legal_link = get_field('footer_legal_link', 'option');

    $address = get_field('address_details', 'option');
    $first_line = $address['1st_line'];
    $second_line = $address['2nd_line'];
    $city = $address['city'];
    $county = $address['county'];
    $postcode = $address['post_code'];
    $footer_build_text = get_field('footer_build_text', 'option');


    /*------------------------------------*\
   FOOTER COLOURS
    \*------------------------------------*/
    $footer_colours = get_field('footer_colours', 'option');
    $main_text_colour = $footer_colours['main_text_colour'];
    if ($main_text_colour == '') {
        $main_text_colour = '#ffffff';
    }

    $main_section_bg_colour = $footer_colours['main_section_bg_colour'];


    $copyright_section_bg_colour = $footer_colours['copyright_section_bg_colour'];


    $copyright_text_colour = $footer_colours['copyright_text_colour'];


    $copyright_text_hover_colour = $footer_colours['copyright_text_hover_colour'];


?>
<style>
.footer01 .slide{
      color: <?php echo $main_text_colour;?>;
}
.footer01{
  background:<?php echo $main_section_bg_colour;?>!important;
}
.footer01 .lower-block{
  background:<?php echo $copyright_section_bg_colour;?>;
}
.footer01 .lower-block .copyright span{
  color:<?php echo $copyright_text_colour?>;
}
.footer01 .lower-block .copyright a{
  color:<?php echo $copyright_text_colour?>!important;
}
.footer01 .lower-block .copyright a:hover{
  color:<?php echo $copyright_text_hover_colour?>!important;
}
.footer01 .slide .img{
  max-width: 50%;
}
</style>
<footer class="footer01" style="background-color: <?php echo $main_section_bg_colour;?>!important;">
    <div class="container">
        <div class="slide logo">
            <a href="<?php echo get_site_url(); ?>" class="link">
                <img class="light" src="<?php echo $footer_image; ?>" alt="<?php echo get_bloginfo('name'); ?> logo">

            </a>
        </div>

        <!-- no data = HIDE -->
  <?php if ($address): ?>
        <div class="slide">
            <div class="content-wrap clearfix">
                <span class="title footer-title medium bold">Address</span>

                      <p><?php echo $address['1st_line'];?></p>
                      <p><?php echo $address['second_line'];?></p>
                      <p><?php echo $address['city'];?></p>
                      <p><?php echo $address['county'];?></p>
                      <p><?php echo $address['post_code'];?></p>

            </div>
        </div>
  <?php endif; ?>

      <!-- no data = HIDE -->
      <?php if ($telephone): ?>
        <div class="slide">
            <div class="content-wrap clearfix">
                <span class="title footer-title medium bold">Get in touch</span>
                <a href="tel:<?php echo $telephone; ?>"><span class="paragraph block normal tel"><?php echo $telephone; ?></span></a>
                <a href="mailto:<?php echo $email_address; ?>"><span class="paragraph block normal email-address"><?php echo $email_address; ?></span></a>
            </div>
        </div>
<?php endif; ?>


        <div class="slide">
            <div class="content-wrap clearfix">
                <span class="title footer-title medium bold"><?php echo $social_title; ?></span>

                <div class="social-icons">
                    <?php include(get_stylesheet_directory() . "/views/partial/social-icons-footer.php"); ?>
                </div>

            </div>
        </div>

        <?php if (has_nav_menu('footer-menu-secondary')) { ?>
            <div class="slide footer-menu secondary">
                <div class="content-wrap">
                    <?php wp_nav_menu(array( 'theme_location' => 'footer-menu-secondary' )); ?>
                    <div style="clear:both;"></div>
                </div>
            </div>
        <?php } ?>

    </div>

    <div class="lower-block">
        <div class="container clearfix">
            <div class="copyright">
                <span class="rights">© <?php echo date("Y"); ?> <?php echo get_bloginfo(); ?>. All rights reserved.</span>
                <span class="divider left"> | </span>
                <a class="leagal" href="<?php echo $footer_legal_link['url']; ?>"><?php echo $footer_legal_link['title']; ?></a>

                <a class="admin" alt="admin login" href="/wp-admin">ADMIN LOGIN</a>
                <span class="divider right"> | </span>
                <span class="build"><?php echo apply_filters('the_content', $footer_build_text); ?></span>
            </div>
        </div>
    </div>
</footer>

</main>

<style>
#cookie-law-info-bar{display:none!important;}</style>
<!--UIkit JS-->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/js/uikit.min.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/js/uikit-icons.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
  // Mobile Menu
  const toggler = document.querySelector('.menu__toggler');
  const menu = document.querySelector('.new-mobile-menu');
  const menu2 = document.querySelector('.new-mobile-menu-2');

  /*
   * Toggles on and off the 'active' class on the menu
   * and the toggler button.
   */
  toggler.addEventListener('click', () => {
    toggler.classList.toggle('active');
    menu.classList.toggle('active');
    menu2.classList.toggle('active');
  })

</script>


<?php wp_footer(); ?>

</body>
