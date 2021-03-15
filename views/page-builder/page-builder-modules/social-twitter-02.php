<?php

    $background_colour = get_sub_field('background_colours_basic');
    $title = get_sub_field('title');
    $text_colours = get_sub_field('text_colours');
    $button_styles = get_sub_field('button_styles');

    // USER NAME OF POSTS
    $twitter_username = get_sub_field('twitter_username');

    // CALCULATE POSTS TO SHOW
    $number_of_columns = get_sub_field('layout')['number_of_columns'];
    $number_of_rows = get_sub_field('layout')['number_of_rows'];
    $posts_to_show = $number_of_columns * $number_of_rows;

    // CALCULATE POSTS TO RETURN
    $posts_to_return = $posts_to_show * 4;

    // GET TWITTER POSTS
    $get_twitter_posts = returnTweet($twitter_username, $posts_to_return );

    $tweet_counter = 1;
    
    echo '<div class="twitter-container" style="background-color: '. $background_colour .'">';

        if( $title ):
            echo '<div class="title-wrap">';
                echo '<span style="color: '. $text_colours .' ">'. $title .'</span>';
            echo '</div>';
        endif;
        
        echo '<div class="container">';
            echo '<ul id="twitter-list-wrap" class="tweet-columns tweet-columns-'. $number_of_columns .' tweet-posts-'. $posts_to_show .' viewport_check">';
                if($get_twitter_posts) {
                    foreach($get_twitter_posts as $tweet) {

                        // CHECK IF POST IS IN REPLY TO
                        $in_reply_to_status_id = '';
                        $in_reply_to_status_id = $tweet['in_reply_to_status_id'];

                        if ( $in_reply_to_status_id === null && $tweet_counter <= $posts_to_show ) {
                            echo '<li class="tweet delay-tile-'. $tweet_counter .'">';

                                echo '<div class="content-wrap">';
                                                        
                                    //RETWEETED USER
                                    $retweet_name = $tweet['retweeted_status']['user']['name'];

                                    // Tweet
                                    $tweeted_by_id = $tweet['id'];
                                    $tweeted_by_screen_name = $tweet['user']['screen_name'];

                                    $tweeted_recount = $tweet['retweet_count'];
                                    $tweeted_favorite_count = $tweet['favorite_count'];

                                    $retweeted_favorite_count = $tweet['retweeted_status']['favorite_count'];
                                    

                                    if ( $retweet_name != '' ) {
                                        include(get_stylesheet_directory() . "/views/partial/tweet-retweet-twitter-post.php");
                                    } else {
                                        include(get_stylesheet_directory() . "/views/partial/tweet-twitter-post.php");
                                    }

                                    ?>
                                        <div class="tweet-social-share">
                                            <a class="social-share comment" data-link="social-popup" href="<?php echo 'https://twitter.com/intent/tweet?in_reply_to='. $tweeted_by_id .'&amp;related='. $tweeted_by_screen_name; ?>" target="Social Share">
                                                <div class="share-icon">
                                                    <svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m401.268 184.531c12.106-19.053 18.732-41.332 18.732-64.355 0-66.168-53.832-120-120-120h-180c-66.168 0-120 53.832-120 120v207.648l81.533-87.648h29.003c-11.733 18.535-18.536 40.487-18.536 64 0 66.168 53.832 120 120 120h218.467l81.533 87.648v-207.648c0-63.05-48.877-114.898-110.732-119.645zm-332.801 25.645-38.467 41.352v-131.352c0-49.626 40.374-90 90-90h180c49.626 0 90 40.374 90 90 0 24.109-9.683 47.135-26.732 64h-151.268c-28.128 0-54.023 9.732-74.505 26zm413.533 225.352-38.467-41.352h-231.533c-49.626 0-90-40.374-90-90s40.374-90 90-90h180c49.626 0 90 40.374 90 90z"/></svg>
                                                </div>
                                                <div class="share-text">Comment</div>
                                            </a>

                                            <a class="social-share share" data-link="social-popup" href="<?php echo 'https://twitter.com/intent/retweet?tweet_id='. $tweeted_by_id .'&amp;related='. $tweeted_by_screen_name; ?>" target="Social Share">
                                                <div class="share-icon">
                                                    <svg width="18" height="18" viewBox="0 0 18 18"><path d="M17.712 11.961a.493.493 0 0 1 0 .698l-2.518 2.517a.491.491 0 0 1-.698 0l-2.517-2.517a.493.493 0 1 1 .698-.698l1.675 1.674V6.468c0-.817-.665-1.481-1.481-1.481H8.494a.494.494 0 1 1 0-.987h4.377a2.471 2.471 0 0 1 2.468 2.468v7.168l1.675-1.675a.493.493 0 0 1 .698 0zm-8.348 2.373a.494.494 0 0 1 0 .988H4.986a2.471 2.471 0 0 1-2.468-2.47V5.686L.843 7.36a.493.493 0 1 1-.698-.698l2.518-2.518a.493.493 0 0 1 .698 0l2.517 2.518a.493.493 0 1 1-.698.698L3.505 5.685v7.168c0 .817.665 1.48 1.48 1.48h4.379z"></path></svg>
                                                </div>
                                                <div class="share-text"><?php echo $tweeted_recount; ?></div>
                                            </a>

                                            <?php
                                            if ( $retweet_name != '' ) {
                                                //get retweet tweet fav count
                                                ?>
                                                    <a class="social-share like" data-link="social-popup" href="<?php echo 'https://twitter.com/intent/like?tweet_id='. $tweeted_by_id .'&related='. $tweeted_by_screen_name; ?>" target="Social Share">
                                                        <div class="share-icon">
                                                            <svg width="18" height="18" viewBox="0 0 18 18">
                                                                <path d="M5.556 4.988c-1.368 0-2.569 1.309-2.569 2.801 0 3.778 4.63 6.632 5.628 6.673.998-.041 5.628-2.895 5.628-6.673 0-1.492-1.201-2.801-2.57-2.801-1.665 0-2.593 1.932-2.602 1.951-.152.371-.761.371-.913 0-.008-.019-.937-1.951-2.602-1.951zM2 7.789C2 5.771 3.662 4 5.556 4c1.508 0 2.522 1.041 3.059 1.797C9.152 5.041 10.165 4 11.673 4c1.895 0 3.557 1.771 3.557 3.789 0 4.197-4.906 7.629-6.606 7.661C6.906 15.418 2 11.986 2 7.789z"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="share-text"><?php echo $retweeted_favorite_count; ?></div>
                                                    </a>
                                                <?php
                                            } else {
                                                //get normal tweet fav count
                                                ?>
                                                    <a class="social-share like" data-link="social-popup" href="<?php echo 'https://twitter.com/intent/like?tweet_id='. $tweeted_by_id .'&related='. $tweeted_by_screen_name; ?>" target="Social Share">
                                                        <div class="share-icon">
                                                            <svg width="18" height="18" viewBox="0 0 18 18">
                                                                <path d="M5.556 4.988c-1.368 0-2.569 1.309-2.569 2.801 0 3.778 4.63 6.632 5.628 6.673.998-.041 5.628-2.895 5.628-6.673 0-1.492-1.201-2.801-2.57-2.801-1.665 0-2.593 1.932-2.602 1.951-.152.371-.761.371-.913 0-.008-.019-.937-1.951-2.602-1.951zM2 7.789C2 5.771 3.662 4 5.556 4c1.508 0 2.522 1.041 3.059 1.797C9.152 5.041 10.165 4 11.673 4c1.895 0 3.557 1.771 3.557 3.789 0 4.197-4.906 7.629-6.606 7.661C6.906 15.418 2 11.986 2 7.789z"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="share-text"><?php echo $tweeted_favorite_count; ?></div>
                                                    </a>
                                                <?php
                                            }
                                            ?>
                                            
                                        </div>
                                    <?php

                               echo '</div>';
                               
                            echo '</li>';
                            $tweet_counter++;
                        }
                    }
                }
            echo '</ul>';
        echo '</div>';

        echo '<div class="load-more-container viewport_check viewport_check-up">';
            echo '<div class="load-more-button-wrap">';
                echo '<div class="loadmore button '. $button_styles .' button--ujarak button--border-thin button--text-thick">';
                    echo '<span class="load-more-text">Load more</span>';
                echo '</div>';
            echo '</div>';
            
            echo '<span class="load-more-spinner"><svg class="rotate" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="255.9921237883" x2="255.9921237883" y1="0" y2="512.0002475766"><stop offset="0" stop-color="'. $text_colours .'"/><stop offset="1" stop-color="'. $text_colours .'"/></linearGradient><path d="m45 300.007812c-24.8125 0-45-20.1875-45-45s20.1875-45 45-45c24.816406 0 45.003906 20.1875 45.003906 45s-20.1875 45-45.003906 45zm192.007812-200.003906c-27.570312 0-50.003906-22.429687-50.003906-50.003906 0-27.570312 22.433594-50 50.003906-50 27.570313 0 50 22.429688 50 50 0 27.574219-22.429687 50.003906-50 50.003906zm0-60.003906c-5.515624 0-10 4.488281-10 10 0 5.515625 4.484376 10 10 10 5.511719 0 10-4.484375 10-10 0-5.511719-4.488281-10-10-10zm-136.503906 122.003906c-12.957031 0-25.136718-5.042968-34.296875-14.207031-9.160156-9.160156-14.207031-21.339844-14.207031-34.292969 0-12.957031 5.046875-25.136718 14.207031-34.296875 9.160157-9.160156 21.339844-14.207031 34.296875-14.207031 12.953125 0 25.132813 5.046875 34.296875 14.207031h-.003906.003906c9.160157 9.160157 14.203125 21.339844 14.203125 34.296875 0 12.953125-5.042968 25.132813-14.207031 34.296875-9.160156 9.160157-21.339844 14.203125-34.292969 14.203125zm0-57c-1.316406 0-3.84375.320313-6.011718 2.488282-2.167969 2.167968-2.488282 4.695312-2.488282 6.011718s.320313 3.84375 2.488282 6.007813c2.167968 2.167969 4.695312 2.492187 6.011718 2.492187 1.3125 0 3.84375-.324218 6.007813-2.488281 2.167969-2.167969 2.492187-4.695313 2.492187-6.011719s-.324218-3.84375-2.488281-6.011718h-.003906c-2.164063-2.167969-4.695313-2.488282-6.007813-2.488282zm282.007813 59c-14.824219 0-28.761719-5.773437-39.246094-16.253906-10.484375-10.484375-16.257813-24.421875-16.257813-39.246094 0-14.824218 5.773438-28.761718 16.257813-39.246094 10.484375-10.484374 24.421875-16.257812 39.246094-16.257812s28.761719 5.773438 39.246093 16.257812c10.480469 10.484376 16.253907 24.421876 16.253907 39.246094 0 14.824219-5.773438 28.761719-16.253907 39.246094-10.484374 10.480469-24.421874 16.253906-39.246093 16.253906zm0-71c-4.140625 0-8.03125 1.609375-10.960938 4.539063-2.925781 2.929687-4.539062 6.820312-4.539062 10.960937s1.609375 8.03125 4.539062 10.957032c2.929688 2.929687 6.820313 4.542968 10.960938 4.542968s8.03125-1.613281 10.957031-4.539062c2.929688-2.929688 4.542969-6.820313 4.542969-10.960938s-1.613281-8.03125-4.542969-10.960937c-2.925781-2.929688-6.816406-4.539063-10.957031-4.539063zm64.5 225.976563c-16.644531 0-33.289063-6.335938-45.960938-19.007813-25.347656-25.34375-25.347656-66.585937 0-91.929687 25.34375-25.34375 66.582031-25.34375 91.925781 0s25.34375 66.585937 0 91.929687c-12.671874 12.671875-29.316406 19.007813-45.964843 19.007813zm0-89.960938c-6.402344 0-12.804688 2.4375-17.675781 7.308594-9.75 9.75-9.75 25.609375 0 35.359375 9.746093 9.746094 25.605468 9.746094 35.355468 0 9.746094-9.75 9.746094-25.609375 0-35.359375-4.875-4.871094-11.277344-7.308594-17.679687-7.308594zm-64 255.960938c-17.671875 0-35.339844-6.722657-48.792969-20.175781-26.902344-26.902344-26.902344-70.679688 0-97.582032 26.902344-26.90625 70.679688-26.90625 97.582031 0 26.90625 26.902344 26.90625 70.679688 0 97.582032-13.449219 13.453124-31.121093 20.175781-48.789062 20.175781zm0-97.957031c-7.425781 0-14.851563 2.828124-20.507813 8.480468-11.304687 11.308594-11.304687 29.707032 0 41.015625 11.308594 11.308594 29.707032 11.308594 41.015625 0 11.304688-11.308593 11.304688-29.707031 0-41.015625-5.65625-5.652344-13.082031-8.480468-20.507812-8.480468zm-290.511719 51.96875c-11.136719 0-22.277344-4.242188-30.757812-12.71875-16.960938-16.964844-16.960938-44.5625 0-61.523438 16.960937-16.960938 44.558593-16.960938 61.519531 0 16.960937 16.960938 16.960937 44.558594 0 61.519531-8.480469 8.480469-19.621094 12.722657-30.761719 12.722657zm117.503906 73.007812c-7.683594 0-15.363281-2.921875-21.210937-8.769531-11.699219-11.699219-11.699219-30.734375-.003907-42.429688l.003907-.003906c11.695312-11.695313 30.730469-11.695313 42.425781 0 11.699219 11.699219 11.699219 30.734375.003906 42.429687-5.851562 5.847657-13.535156 8.773438-21.21875 8.773438zm0 0" fill="url(#a)"/></svg></span>';
        echo '</div>';
    echo '</div>';

    // echo '<div style="display: block;width: 100%;height: auto;float: left;">';
    //     echo '<pre>';
    //         print_r( $get_twitter_posts );
    //     echo '</pre>';
    // echo '</div>';
?>

<script type="text/javascript">
    var ajaxurl = "<?php echo site_url() . '/wp-admin/admin-ajax.php' ?>";
    var page = 2;

    jQuery(function($) {
        $('body').on('click', '.loadmore', function() {
            
            $('.load-more-container').addClass('loading');

            // Count number of posts visible
            var twitter_posts_visible = document.getElementById("twitter-list-wrap").childNodes.length;

            var data = {
                'action': 'load_more_twitter_posts',
                'twitter_username': '<?php echo $twitter_username; ?>',
                'number_of_columns': '<?php echo $number_of_columns; ?>',
                'number_of_rows': '<?php echo $number_of_rows; ?>',
                'posts_to_show': '<?php echo $posts_to_show; ?>',
                'currently_visible': twitter_posts_visible,
                'security': '<?php echo wp_create_nonce("load_more_twitter_posts"); ?>'
            };
    
            $.post(ajaxurl, data, function(response) {
                if(response != '') {
                    $('.load-more-container').removeClass('loading');
                    $('#twitter-list-wrap').append(response);
                    
                    setTimeout(function(){
                        $('.ajax-loaded').addClass('in_viewport');
                    }, 200);

                } else {
                    $('.load-more-container').removeClass('loading');

                    $('.loadmore').remove();
                    $('.load-more-button-wrap').append('<div class="no-more-posts-message"><span>no more posts to show</span></div>');
                }
            });
        });
    });
</script>