<?php 
    function animate_characters($string, $initialDelay = 0, $delay = 0.025) {
        global $footer_css_style;
        global $slide_id;
        global $flexIndex;

        $words = explode(" ", $string);
        $result = '';
        $trans_delay = $initialDelay;

        foreach ($words as $value) {
            $value = htmlspecialchars_decode($value);
            $strlen = strlen( $value );

            $result .= "<span class='animate_characters-word length-$strlen'>";

            $strlen = strlen( $value );
            for( $i = 0; $i <= $strlen; $i++ ) {
                $char = mb_substr( $value, $i, 1 );
                if ($char == '' && $last_char == 'nbsp') {

                } else if ($char == '') {
                    $result .= "<span class='animate_characters-character animate_characters-nbsp' style='transition-delay: ${trans_delay}s;'>&nbsp;</span>";
                    $last_char = 'nbsp';
                } else {
                    $result .= "<span class='animate_characters-character' style='transition-delay: ${trans_delay}s;'>$char</span>";
                    $last_char = 'char';
                }
                $trans_delay = $trans_delay + $delay;
            }

            $result .= "</span>";

            // if ($strlen > 14) {
            //     $footer_css_style .= ".row_index-$flexIndex .hero_title_callout_content { font-size: 0.6em; }\n";
            // } else if ($strlen > 12) {
            //     $footer_css_style .= ".row_index-$flexIndex .hero_title_callout_content { font-size: 0.7em; }\n";
            // } else if ($strlen > 10) {
            //     $footer_css_style .= ".row_index-$flexIndex .hero_title_callout_content { font-size: 0.8em; }\n";
            // } else if ($strlen > 8) {
            //     $footer_css_style .= ".row_index-$flexIndex .hero_title_callout_content { font-size: 0.9em; }\n";
            // }
        }

        $trans_delay = $trans_delay + 0.4;
        $trans_delay_2 = $trans_delay + 0.3;

        $footer_css_style .= ".slide-$slide_id .animate_characters .intro { transition-delay: ${trans_delay}s; }\n";
        $footer_css_style .= ".slide-$slide_id .animate_characters .button { transition-delay: ${trans_delay_2}s; }\n";
        $footer_css_style .= ".slide-$slide_id .hero_title_callout_content .title-sm { transition-delay: ${trans_delay}s; }\n";
        $footer_css_style .= ".row_index-$flexIndex.row-blockquote .sig { transition-delay: ${trans_delay}s; }\n";
        $footer_css_style .= "@media screen and (min-width: 1001px) { .row_index-$flexIndex .row-2_column_text_col-2 { transition-delay: ${trans_delay}s; } }\n";
        $footer_css_style .= ".row_index-$flexIndex .row-2_column_text_col-1 .button, .row_index-$flexIndex .row-2_column_cta_image_holder { transition-delay: ${trans_delay}s; }\n";
        $footer_css_style .= ".row_index-$flexIndex.row-blockquote .name { transition-delay: ${trans_delay_2}s; }\n";

        $slide_id = null;

        return $result;
    }


    ?>
