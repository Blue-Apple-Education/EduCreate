<?php
// Main Hero Slider
// This is best used on the Homepage Only

// Heading
$heading = get_sub_field('heading');
$heading = strip_tags($heading, null);
// Paragraph
$paragraph = get_sub_field('paragraph');
$paragraph = strip_tags($paragraph, null);

?>
<!-- Outer Div -->
<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1"
    uk-slider="autoplay:true; autoplay-interval: 8000;">

    <!-- List Outer -->
    <ul class="uk-slider-items uk-grid">

        <!-- Loop -->
        <?php if (have_rows('hero_slider')) : ?>
        <?php while (have_rows('hero_slider')) : the_row(); ?>

        <!-- Single List element -->
        <li class="uk-width-1 slide slide" style="padding-left: 0px!important; max-height: 100vh;height:90vh;">
            <div class="uk-panel uk-animation-fade" style="animation-delay: 100ms; max-height: 90vh;height:90vh;">

                <!-- Image -->
                <img src="<?php the_sub_field('background_image'); ?>" alt=""
                    style="height: fit-content;object-fit: cover;width: 100%; height:100%;" />

                <!-- Overlay -->
                <div class="uk-overlay-primary uk-position-cover hero-slider-overlay slider-custom-acf"></div>

                <!-- Video -->
                <video src="<?php the_sub_field('background_video'); ?>" autoplay controls automute uk-video></video>

                <!-- Inner Slider Content -->
                <div class="uk-position-center <?php the_sub_field('content_position'); ?> uk-panel uk-hero-slider">

                    <h1 class="uk-animation-<?php the_sub_field('heading_animation'); ?>"
                        style="animation-delay:<?php the_sub_field('heading_animation_delay'); ?>ms;">
                        <?php the_sub_field('heading'); ?>
                    </h1>

                    <p class="uk-animation-<?php the_sub_field('paragraph_animation'); ?>"
                        style="animation-delay:<?php the_sub_field('paragraph_animation_delay'); ?>ms;">
                        <?php the_sub_field('paragraph'); ?>
                    </p>

                </div>
                <!-- Inner END -->
        </li>
        <?php endwhile; ?>
        <?php endif; ?>
    </ul>
    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
</div>
<style>
.slider-custom-acf {
    background: linear-gradient(<?php echo $overlay_direction; ?> deg, rgba(<?php echo $fade_colour; ?>) 0%, rgba(<?php echo $solid_colour; ?>) 100%) !important;
}

.uk-hero-slider {
    padding: 30px 50px !important;
}

.uk-hero-slider-top-left {
    left: 25%;
    max-width: 50%;
    top: 25%;
    margin-left: 50px;
}

.uk-hero-slider-top-middle {
    left: 50%;
    max-width: 50%;
    text-align: center;
    top: 25%;
}

.uk-hero-slider-top-right {
    left: 75%;
    max-width: 50%;
    top: 25%;
}

.uk-hero-slider-middle-left {
    left: 25%;
    max-width: 50%;
    top: 50%;
    margin-left: 50px;
}

.uk-hero-slider-middle-middle {
    left: 50%;
    text-align: center;
    max-width: 50%;
    top: 50%;
}

.uk-hero-slider-middle-right {
    left: 75%;
    max-width: 50%;
    top: 50%;
}

.uk-hero-slider-bottom-left {
    left: 25%;
    max-width: 50%;
    top: 75%;
    margin-left: 50px;
}

.uk-hero-slider-bottom-middle {
    left: 50%;
    max-width: 50%;
    text-align: center;
    top: 75%;
}

.uk-hero-slider-bottom-right {
    left: 75%;
    max-width: 50%;
    top: 75%;
}


@media screen and(max-width:768px) {
    .uk-hero-slider {
        padding: 20px !important;
    }

    .uk-hero-slider-top-left {
        left: 35%;
        max-width: 70%;
        top: 25%;
    }

    .uk-hero-slider-top-middle {
        left: 50%;
        max-width: 50%;
        text-align: center;
        top: 25%;
    }

    .uk-hero-slider-top-right {
        left: 75%;
        max-width: 50%;
        top: 25%;
    }

    .uk-hero-slider-middle-left {
        left: 35%;
        max-width: 70%;
        top: 50%;
    }

    .uk-hero-slider-middle-middle {
        left: 50%;
        text-align: center;
        max-width: 50%;
        top: 50%;
    }

    .uk-hero-slider-middle-right {
        left: 75%;
        max-width: 50%;
        top: 50%;
    }

    .uk-hero-slider-bottom-left {
        left: 35%;
        max-width: 70%;
        top: 75%;
    }

    .uk-hero-slider-bottom-middle {
        left: 50%;
        max-width: 50%;
        text-align: center;
        top: 75%;
    }

    .uk-hero-slider-bottom-right {
        left: 75%;
        max-width: 50%;
        top: 75%;
    }
}
</style>