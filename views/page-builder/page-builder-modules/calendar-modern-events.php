<?php
    $shortcode = get_sub_field('shortcode');

    echo '<div>';
        echo '<div class="container">';
            echo '<div>';
                echo do_shortcode($shortcode);
            echo '</div>';
        echo '</div>';
    echo '</div>';
