<?php

    echo '<div style="background-color: '. $background_colours_basic .'" class="calendar-grid '. $showMod .' '. $navigation_options .' tiles-show-'. $number_of_dates .'">';
        echo '<div class="container">';

        echo '<div>';
           echo do_shortcode('[tribe_events view="month"]');
        echo '</div>';

        echo '</div>';
    echo '</div>';
