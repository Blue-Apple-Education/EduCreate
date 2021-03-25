<?php
// Elliptical Welcome Slider

/* Slide Text Content -> Get fields and Strip Tags */
/* Slide Heading */
$elliptical_slide_heading = get_sub_field("elliptical_slide_heading");
$elliptical_slide_sub_heading = get_sub_field("elliptical_slide_sub_heading");

/* Slide Text Content */
$elliptical_slide_content = get_sub_field("elliptical_slide_content");
$elliptical_slide_content = strip_tags($elliptical_slide_content, null);

// Slide Button
$elliptical_slide_button = get_sub_field("elliptical_slide_button");
$elliptical_slide_button_url = $elliptical_slide_button['url'];
$elliptical_slide_button_title = $elliptical_slide_button['title'];

// Slide Image
$elliptical_slide_image = get_sub_field("elliptical_slide_image");
$elliptical_slide_image_alt = $elliptical_slide_image['alt'];

/* Button Colours from "educreate/Header-styles.php" */
$button_colours = get_field('button_colours', 'option');
$bt_primary = get_sub_field('primary');
$bt_secondary = get_sub_field('secondary');
$bt_tertiary = get_sub_field('tertiary');
$bt_quarternary = get_sub_field('quarternary');

?>
<div class="elliptical-welcome-slide-wrapper">
    <!-- Outer Div -->
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1"
        uk-slideshow="animation: fade; autoplay: true" style="height:100%">

        <ul class="uk-slideshow-items" style="min-height:600px;">

            <!-- Loop -->
            <?php if (have_rows('elliptical_welcome_slide')) : ?>
            <?php while (have_rows('elliptical_welcome_slide')) : the_row(); ?>

            <li class="elliptical-slideshow-item">


<!-- Conditional change -->
                <div class="esi-image-container"
                    style="background-image:url('<?php the_sub_field('elliptical_slide_image'); ?>')" ;>

                </div>

                <!-- Inner Slider Content -->
                <div class="esi-content">

                    <!--  Heading  -->
                    <h2 class="uk-animation-fade"><?php the_sub_field("elliptical_slide_heading"); ?></h2>

                    <!--  Sub Heading
                     Only shown if content in field -->

                    <p class="sub-heading uk-animation-fade"><?php the_sub_field("elliptical_slide_sub_heading"); ?>
                    </p>
                    <p class="content">
                        <?php the_sub_field("elliptical_slide_content"); ?>
                    </p>

                    <a class="content-button"
                        href="<?php echo esc_url($elliptical_slide_button_url); ?>"><?php esc_html($elliptical_slide_button_title); ?>Button</a>

                </div>
<!--  -->
            </li>

            <?php endwhile; ?>
            <?php endif; ?>

        </ul>

        <!-- <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
            uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
            uk-slideshow-item="next"></a> -->

        <!-- Dot Navigation -->
        <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>

    </div>
</div>

<style>
.elliptical-welcome-slide-wrapper {
    max-height: 80vh;
}

.esi-image-container {
    float: right;
    width: 50%;
    height: 100%;
    background-size: cover;
    background-position: top;
}

.esi-content {
    float: left;
    width: 50%;
    background: #fefefe;
    height: 100%;
    padding: 8% 8% 8% 12%;
    text-align: right;
}

.esi-content h2 {
    font-size: 4rem;
    font-weight: 800;
    text-transform: uppercase;
    color: #3c3c3c;
    margin-bottom: 1.5rem !important;
}

.esi-content p.sub-heading {
    line-height: 1.2;
    font-weight: 400;
    font-size: 1.5rem;
    color: #3b3b3b;
    margin-bottom: 1.5rem !important;
}

.esi-content p.content {
    color: #3c3c3c;
    font-size: 1.2rem;
}

.esi-content a.content-button {
    display: inline-block;
    font-weight: 400;
    color: #fff;
    background: #212529;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
}

/* Dot Navigation */
.uk-dotnav {
    z-index: 100;
    position: absolute;
    height: 50px;
    bottom: -5%;
    left: 24%;
}

.uk-light .uk-dotnav>*>* {
    background-color: transparent;
    border-color: rgba(0, 0, 0, .9);
}

.uk-light .uk-dotnav>.uk-active>* {
    background-color: #000;
    border-color: transparent;
}

.uk-dotnav.uk-active a {
    color: #000;
    width: 50px;

}

@media only screen and (min-width:768px) and (max-width:1100px) {

    .esi-content {
        padding: 8% 8% 8% 12%;
    }

    .esi-content h2 {
        font-size: 2.6rem;
    }

    .esi-content p.sub-heading {
        font-size: 1.3rem;
        color: #3b3b3b;
        margin-bottom: 1.5rem !important;
    }

    .esi-content p.content {
        color: #3c3c3c;
        font-size: 1rem;
    }

}

@media only screen and (min-width:768px) and (max-width:1101px) {
    ul.uk-slideshow-items {
        min-height: 650px !important;
        max-height: 650px !important;
        height: 650px !important;
    }
}

@media only screen and (min-width:1100px) {
    ul.uk-slideshow-items {
        min-height: 800px !important;
        max-height: 800px !important;
        height: 800px !important;
    }
}

@media only screen and (max-width:768px){
  .elliptical-welcome-slider{
    height:600px;
  }
  ul.uk-slideshow-items {
      min-height: none !important;
      max-height: none !important;
      height: 600px !important;
  }
  .esi-content, .esi-image-container{
    width:100%;
    float:none;
  }
  .esi-image-container{
    display:none;
  }
  .uk-dotnav{
    left:50%;
  }

}
</style>
