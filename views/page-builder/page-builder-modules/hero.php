<?php
/* Hero */
// This can be used on any page

/* SP */
// Heading
$heading = get_sub_field('heading');
$heading = strip_tags($heading, null);
// Paragraph
$paragraph = get_sub_field('paragraph');
$paragraph = strip_tags($paragraph, null);
/* END */
?>

<!-- Outer Div -->
<div class="uk-cover-background uk-position-relative">

    <!-- Image -->
    <img class="uk-visible" src="<?php the_sub_field('background_image'); ?>" width="100%" height="auto" alt="" />

    <!-- Overlay -->
    <div class="uk-overlay-primary uk-position-cover hero-bg-overlay-acf"></div>

    <!-- Main Content -->
    <div class="uk-position-cover uk-flex uk-flex-center <?php get_sub_field('content_position'); ?> uk-flex-middle">

        <!-- Heading -->
        <h1 class="uk-animation-<?php get_sub_field('heading_animation'); ?>"
            style="animation-delay:<?php get_sub_field('heading_animation_delay'); ?>ms;">
            <?php the_sub_field('heading'); ?></h1>

        <!-- Paragraph  -->
        <p class="uk-animation-<?php get_sub_field('paragraph_animation'); ?>"
            style="animation-delay:<?php get_sub_field('paragraph_animation_delay'); ?>ms;">
            <?php the_sub_field('paragraph'); ?>
        </p>

    </div>
</div>

<!-- Styles for module -->
<style>
.hero-bg-overlay-acf {
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