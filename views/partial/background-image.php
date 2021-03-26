<div class="background-images fill-container">

    <?php
        if ($overlay_colour):
            echo '<div class="fill-container overlay" style="';

            echo 'background-color: '. $overlay_colour.';';

                if ($opacity):
                    if ($opacity == 'full') {
                        echo 'opacity: 1;';
                    } elseif ($opacity == '0') {
                        echo 'opacity: 0;';
                    } else {
                        echo 'opacity: 0.'. $opacity .';';
                    }
                endif;

            echo '"></div>';
        endif;

        $size = array(
            array('w' => 200, 'upsize' => false),
            array('w' => 400),
            array('w' => 600),
            array('w' => 800),
            array('w' => 1000),
            array('w' => 1200),
            array('w' => 1400),
            array('w' => 1600),
            array('w' => 1800),
            array('w' => 2000),
            array('w' => 2400),
            array('w' => 2800),
            array('w' => 3200),
            array('w' => 3600),
            array('w' => 4000),
        );

        if ($background_colour):
            echo '<div class="fill-container background-colour" style="background-color: '. $background_colour.'"></div>';
        endif;

        
    ?>

</div>
