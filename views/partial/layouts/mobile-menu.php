<?php

// mmc_bg = Menu background Colour
 ?>
  <div class="menu__toggler"><span></span></div>
        <!-- Menu elements-->
  <div class="new-mobile-menu">
        <?php wp_nav_menu(array( 'theme_location' => 'main-menu' )); ?>
  </div>
  <div class="new-mobile-menu-2">
    <p>Menu Bg: <?php echo $mmc_bg;?></p>
    <p>Contact Form Here</p>
  </div>
  <!-- Menu elements-->

<style>
.menu__toggler.active span::before, .menu__toggler.active span::after{
  background:#fff;
}
.new-mobile-menu a{
  color:#fff;
}
.new-mobile-menu {
  position: absolute;
  left: -100%;
  z-index: 1000;
  color: #fff;
  background-color: <?php echo $mmc_bg;?>;
}
.new-mobile-menu-2 a{
  color:#fff;
}
.new-mobile-menu-2 {
  position: absolute;
  right: -100%;
  z-index: 1000;
  color: #fff;
  background: <?php echo $mmc_bg;?>;
}
</style>
