<?php
    echo '<div class="viewport_check viewport_check-up">';
        $twitter_username = get_sub_field('twitter_username');
        $posts_to_show = get_sub_field('posts_to_show');

        $get_twitter_posts = returnTweet($twitter_username, $posts_to_return );

        $count = 0;
        if($get_twitter_posts) {
            foreach($get_twitter_posts as $row) {
                $count++;
            }
        }

        $tweet_counter = 1;
        
        echo '<div class="twitter-carousel-logo">';
            echo '<svg xmlns="http://www.w3.org/2000/svg" width="50.634" height="41.148" viewBox="0 0 50.634 41.148"><path id="_03-twitter" data-name="03-twitter" d="M54.208,15.2a20.67,20.67,0,0,1-5.967,1.635,10.407,10.407,0,0,0,4.568-5.748,20.8,20.8,0,0,1-6.6,2.522,10.4,10.4,0,0,0-17.7,9.475A29.5,29.5,0,0,1,7.1,12.227,10.4,10.4,0,0,0,10.315,26.1a10.358,10.358,0,0,1-4.705-1.3c0,.043,0,.087,0,.132a10.4,10.4,0,0,0,8.334,10.186,10.444,10.444,0,0,1-2.737.364,10.292,10.292,0,0,1-1.955-.187,10.4,10.4,0,0,0,9.7,7.214,20.962,20.962,0,0,1-15.379,4.3A29.4,29.4,0,0,0,19.5,51.474c19.108,0,29.556-15.829,29.556-29.556q0-.675-.029-1.345A21.04,21.04,0,0,0,54.208,15.2Z" transform="translate(-3.574 -10.326)" fill="#fff"/></svg>';
        echo '</div>';

        echo '<div class="twitter-carousel slide-count-'.$count.' viewport_check viewport_check-up">';
            if($get_twitter_posts) {
                foreach($get_twitter_posts as $slide) {       

                    if ( $tweet_counter <= $posts_to_show ) {
                        echo '<div class="slide">';
                            echo '<div class="content-wrap">';

                                // The Regular Expression filter
                                $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
                                $text = $slide['text'];

                                // Check if there is a url in the text
                                if( preg_match($reg_exUrl, $text, $url) ) {
                                    // make the urls hyper links
                                    echo preg_replace( $reg_exUrl, '<a target="_blank" href='. $url[0] .'>'. $url[0] .'</a>', $text );
                                } else {
                                    echo apply_filters('the_content', $text);
                                }

                            echo '</div>';
                        echo '</div>';
                        $tweet_counter++;
                    }
                }
            }

        echo '</div>';
    echo '</div>';
?>