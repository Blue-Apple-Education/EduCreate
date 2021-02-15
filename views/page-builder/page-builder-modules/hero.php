<?php

$background_image = get_sub_field('background_image');
$background_video = get_sub_field('background_video');
$background_overlay = get_sub_field('background_overlay');
$content_position = get_sub_field('content_position');
$heading = get_sub_field('heading');
$heading_animation = get_sub_field('heading_animation');
$heading_animation_delay = get_sub_field('heading_animation_delay');
$paragraph = get_sub_field('paragraph');
$paragraph_animation = get_sub_field('paragraph_animation');
$paragraph_animation_delay = get_sub_field('paragraph_animation_delay');
?>

<div class="uk-cover-background uk-position-relative">
    <img class="uk-visible" src="<?php echo $background_image; ?>" width="100%" height="auto" alt="" />
    <div class="uk-position-cover uk-flex uk-flex-center <?php echo $content_position; ?> uk-flex-middle">
        <h1 class="uk-animation-<?php echo $heading_animation; ?>"
            style="animation-delay:{{ item.heading_animation_delay }}ms;"><?php echo $heading; ?></h1>
        <p class="uk-animation-<?php echo $paragraph_animation; ?>"
            style="animation-delay:<?php echo $paragraph_animation_delay; ?>ms;"><?php echo $paragraph; ?></p>
    </div>
</div>

<style>
.slider-custom-acf {
    background: linear-gradient(<?php echo $overlay_direction; ?> deg, rgba(<?php echo $fade_colour; ?>) 0%, rgba(<?php echo $solid_colour; ?>) 100%) !important;
}

.uk-hero {
    padding: 30px 50px !important;
}

.uk-hero-top-left {
    left: 25%;
    max-width: 50%;
    top: 25%;
    margin-left: 50px;
}

.uk-hero-top-middle {
    left: 50%;
    max-width: 50%;
    text-align: center;
    top: 25%;
}

.uk-hero-top-right {
    left: 75%;
    max-width: 50%;
    top: 25%;
}

.uk-hero-middle-left {
    left: 25%;
    max-width: 50%;
    top: 50%;
    margin-left: 50px;
}

.uk-hero-middle-middle {
    left: 50%;
    text-align: center;
    max-width: 50%;
    top: 50%;
}

.uk-hero-middle-right {
    left: 75%;
    max-width: 50%;
    top: 50%;
}

.uk-hero-bottom-left {
    left: 25%;
    max-width: 50%;
    top: 75%;
    margin-left: 50px;
}

.uk-hero-bottom-middle {
    left: 50%;
    max-width: 50%;
    text-align: center;
    top: 75%;
}

.uk-hero-bottom-right {
    left: 75%;
    max-width: 50%;
    top: 75%;
}


@media screen and(max-width:768px) {
    .uk-hero-slider {
        padding: 20px !important;
    }

    .uk-hero-top-left {
        left: 35%;
        max-width: 70%;
        top: 25%;
    }

    .uk-hero-top-middle {
        left: 50%;
        max-width: 50%;
        text-align: center;
        top: 25%;
    }

    .uk-hero-top-right {
        left: 75%;
        max-width: 50%;
        top: 25%;
    }

    .uk-hero-middle-left {
        left: 35%;
        max-width: 70%;
        top: 50%;
    }

    .uk-hero-middle-middle {
        left: 50%;
        text-align: center;
        max-width: 50%;
        top: 50%;
    }

    .uk-hero-middle-right {
        left: 75%;
        max-width: 50%;
        top: 50%;
    }

    .uk-hero-bottom-left {
        left: 35%;
        max-width: 70%;
        top: 75%;
    }

    .uk-hero-bottom-middle {
        left: 50%;
        max-width: 50%;
        text-align: center;
        top: 75%;
    }

    .uk-hero-bottom-right {
        left: 75%;
        max-width: 50%;
        top: 75%;
    }
}
</style>