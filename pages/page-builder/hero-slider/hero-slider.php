<?php if (get_field('field_6012f4149b6e7')) :
    function hex2rgba($color, $opacity = false)
    {

        $default = 'rgb(0,0,0)';

        if (empty($color))
            return $default;

        if ($color[0] == '#') {
            $color = substr($color, 1);
        }

        if (strlen($color) == 6) {
            $hex = array($color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5]);
        } elseif (strlen($color) == 3) {
            $hex = array($color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2]);
        } else {
            return $default;
        }

        $rgb =  array_map('hexdec', $hex);

        if ($opacity) {
            if (abs($opacity) > 1)
                $opacity = 1.0;
            $output = 'rgba(' . implode(",", $rgb) . ',' . $opacity . ')';
        } else {
            $output = 'rgb(' . implode(",", $rgb) . ')';
        }

        return $output;
    }

    /* Here's a usage example how to use this function for dynamically created CSS */
    $setColor =  get_field('field_6012f4149b6e7');
    $color = $setColor;
    $rgb = hex2rgba($color);
    $rgba = hex2rgba($color, 0.8);

endif; ?>

<style>
.hero-slider-overlay {
    background: linear-gradient($overlay_direction, rgba(<?php echo $rgba; ?>, ) 0%, rgba(<?php echo $rgba; ?>, ) 100%);
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


@media screen and (max-width:768px) {
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