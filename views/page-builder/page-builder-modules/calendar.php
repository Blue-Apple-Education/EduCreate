<?php
    $title = get_sub_field('title');
    $calendar_list_type = get_sub_field('calendar_list_type');
    $number_of_dates = get_sub_field('number_of_dates');
    $hide_search = get_sub_field('hide_search');
    $background_colours_basic = get_sub_field('background_colours_basic');

    $hide_calendar_navigation = get_sub_field('hide_calendar_navigation');
    $navigation_options = 'show_options';
    if ($hide_calendar_navigation == 1 ) {
        $navigation_options = 'hide_options';
    }

    $hide_module_if_empty  = get_sub_field('hide_module_if_empty');
    $showMod = 'show-mod';
    if ($hide_module_if_empty == 1 ) {
        $showMod = 'hide-mod-if-empty';
    }

    if ( $hide_search != 1 ) {
        echo '<div class="calendar-search">';
            echo '<div class="container clearfix">';
                echo '<div class="search-wrapper viewport_check viewport_check-up">';
                    echo '<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17s-17-7.626-17-17S14.61,6,23.984,6z"/><g></svg>';
                    echo do_shortcode('[add_eventon_search number_of_months="2" search_all="yes"]');
                echo '</div>';    
            echo '</div>';
        echo '</div>';
    }

    echo '<div style="background-color: '. $background_colours_basic .'" class="calendar-grid '. $showMod .' '. $navigation_options .' tiles-show-'. $number_of_dates .'">';
        echo '<div class="container">';

            if ( $hide_search == 1 ) {
                if( $title ):
                    echo '<div class="title-wrap viewport_check viewport_check-up"><span>'. $title .'</span></div>';
                endif;
            }

            if ( $calendar_list_type == 'list' ) {

                echo do_shortcode('[add_eventon event_count="'. $number_of_dates .'"]');

            } else if ( $calendar_list_type == 'tile' ) {

                echo do_shortcode('[add_eventon tiles="yes" exp_so="no" hide_so="yes" event_count="'. $number_of_dates .'" tile_height="250"]');
                
            }
            
        echo '</div>';
    echo '</div>';
?>