<?php

$title = get_sub_field('title');
$link = get_sub_field('link');
$media = get_sub_field('media');
$desktopImageURL = $media['desktopImage'];

?>
    <!-- Outer Div -->
    <div class="uk-cover-background uk-position-relative">

        <!-- Image -->
        <img class="uk-visible" src="<?php echo $desktopImageURL;?>" alt="" />

        <!-- Overlay -->
        <div class="uk-overlay-primary uk-position-cover hero-bg-overlay-acf"></div>

        <!-- Main Content -->
        <div class="uk-position-cover uk-flex uk-flex-center
    uk-flex-middle cta-img-01" style="max-height: 440px;">
            <?php
                if ($title):
                    echo '<div><h3>'. $title .'</h3></div>';
                endif;?>
              <div></div>
              <?php  if ($link) {?>
                <div class="button-wrap"><a href="<?php echo $link;?>"  data-hover-border-color="#fff" class="ib-button"><span><?php echo $link['title'];?></span></a></div>
              <?php }; ?>
            <!-- Heading -->
            <h2 class="uk-animation-slide-top"
                style="animation-delay:2000ms;">
                <?php the_sub_field('heading');?></h2>

        </div>
        <!-- MC END -->
    </div>

    <!-- Styles for module -->
    <style>
    .hero-nrw-01{
      height:440px;
    }
    .hero-nrw-01 h2, .hero-nrw-01 p{
      color:#ffffff;
    }
    .hero-nrw-01 h2{
      font-size: 46px;
      left: 50%;
      text-align: center;
      max-width: 50%;
      top: 220px;
    }
    .hero-nrw-01 img{
      height: 440px;
      width: 100%;
      object-fit: cover;
    }
    .hero-bg-overlay-acf {
        background: linear-gradient(<?php echo $overlay_direction; ?> deg, rgba(<?php echo $fade_colour; ?>) 0%, rgba(<?php echo $solid_colour; ?>) 100%) !important;
    }
    .uk-hero {
        padding: 30px 50px !important;
    }
    @media screen and(max-width:768px) {
        .uk-hero-slider {
            padding: 20px !important;
        }
        .uk-hero-middle-middle {
            left: 50%;
            text-align: center;
            max-width: 50%;
            top: 50%;
        }
    }
  .cta-img-01{max-height:440px;}
  .cta-img-01 img{width:auto;}
  .cta-img-01 h3 {
    	color:#fff;
    	font-weight: 500;
    	letter-spacing: 0.15em;
    	margin-bottom: 0px;
    	font-size: 30px;
    	text-align: center;
    	z-index: 100;
    	line-height: 42px;
      margin-right: 40px;
    }
    a.ib-button{
      z-index:100;
      color: rgb(255, 255, 255);
      border-color: rgb(255, 255, 255);
      border-radius: 12px;
      border-style: solid;
      padding: 12px 20px;
      font-weight: 600;
      height:38px;
      text-transform: capitalize!important;
      text-decoration: solid!important;
    }
    a.ib-button:hover{
      z-index:100;
      color: rgb(255, 255, 255);
      border-color: <?php echo $primary;?>;
      background-color:<?php echo $primary;?>;
      border-radius: 12px;
      border-style: solid;
      padding: 12px 20px;
      font-weight: 600;
      text-transform: capitalize!important;
      -webkit-transition: all 0.3s ease-in-out 0s;
    	-moz-transition: all 0.3s ease-in-out 0s;
    	transition: all 0.3s ease-in-out 0s;
    }
    </style>
