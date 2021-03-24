<?php
/* Hero */
// This can be used on any page

// Heading
$heading = get_sub_field('heading');
$heading = strip_tags($heading, null);
// Paragraph
$paragraph = get_sub_field('paragraph');
$paragraph = strip_tags($paragraph, null);

?>

<!-- Outer Div -->
<div class="uk-cover-background uk-position-relative">

    <!-- Image -->
    <img class="uk-visible" src="<?php the_sub_field('background_image');?>" width="100%" height="auto" alt="" />

    <!-- Overlay -->
    <div class="uk-overlay-primary uk-position-cover hero-bg-overlay-acf"></div>

    <!-- Main Content -->
    <div class="uk-position-cover uk-flex uk-flex-center
uk-flex-middle" style="max-height: 440px;">

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



@media only screen and(max-width:768px) {
    .uk-hero-slider {
        padding: 20px !important;
    }
    .uk-hero-middle-middle {
        left: 50%;
        text-align: center;
        max-width: 50%;
        top: 50%;
    }
    .hero-nrw-01 h2{
      font-size: 26px!important;
    }

}
</style>
