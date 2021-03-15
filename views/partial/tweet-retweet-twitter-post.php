<?php

    $retweet_screen_name = $tweet['retweeted_status']['user']['screen_name'];
    $retweet_id = $tweet['retweeted_status']['user']['id'];
    $retweeted_profile_picture = $tweet['retweeted_status']['user']['profile_image_url_https']; 
    $retweeted_user_verified = $tweet['retweeted_status']['user']['verified']; 

    // Retweeted tweet url
    $retweeted_tweet_web_url = '';
    $retweeted_tweet_web_url = $tweet['retweeted_status']['entities']['urls']['0']['expanded_url'];

    // Retweeted tweet data
    $retweeted_tweet_url = '';
    $retweeted_tweet_url = $tweet['retweeted_status']['extended_entities']['media']['0']['expanded_url'];

    $retweeted_media_url = '';
    $retweeted_media_url = $tweet['retweeted_status']['quoted_status']['entities']['media']['0']['media_url_https'];
    
    $retweeted_expanded_url = '';
    $retweeted_expanded_url = $tweet['retweeted_status']['quoted_status']['entities']['media']['0']['expanded_url']; 
    
    $retweeted_tweet_text = '';
    $retweeted_tweet_text = $tweet['retweeted_status']['full_text'];
    
    $retweeted_tweet_text_formated = '';
    $retweeted_tweet_text_formated = addTweetEntityLinks( $tweet['retweeted_status']['full_text'] ); 

    $retweeted_tweet_media_url = '';
    $retweeted_tweet_media_url = $tweet['retweeted_status']['extended_entities']['media']['0']['media_url_https'];   
    
    $retweeted_tweet_video_media_url ='';
    $retweeted_tweet_video_media_url  = $tweet['retweeted_status']['extended_entities']['media']['0']['video_info']['variants'];
    
    if ($retweeted_tweet_video_media_url != '' ) {
        foreach($retweeted_tweet_video_media_url as $video) {
            $max_bitrate = $video['bitrate'];
    
            foreach($retweeted_tweet_video_media_url as $video) {
                if ( $bitrate >= $max_bitrate ) {
                    $max_bitrate = $video['bitrate'];
                    $quality_video_url = $video['url'];
                }
            }
        }
    
        $retweeted_tweet_video_media_url = $quality_video_url;
    }


    // echo 'RETWEETED POST<br />';
    // echo 'retweet_screen_name:'. $retweet_screen_name .'<br />';
    // echo 'retweet_id:'. $retweet_id .'<br />';
    // echo 'retweeted_profile_picture:'. $retweeted_profile_picture .'<br />';
    // echo 'retweeted_user_verified:'. $retweeted_user_verified .'<br />';
    // echo 'retweeted_tweet_url:'. $retweeted_tweet_url .'<br />';
    // echo 'retweeted_media_url:'. $retweeted_media_url .'<br />';
    // echo 'retweeted_expanded_url:'. $retweeted_media_url .'<br />';
    // echo 'retweeted_tweet_text:'. $retweeted_tweet_text.'<br />';
    // echo 'retweeted_tweet_text_format:'. $retweeted_tweet_text_formated.'<br />';
    // echo 'retweeted_tweet_media_url:'. $retweeted_tweet_media_url.'<br />';
    // echo 'retweeted_tweet_video_media_url:'. $retweeted_tweet_video_media_url.'<br />'; 
 
    $tweeted_by_name = $tweet['user']['name'];
    $tweeted_by_id = $tweet['id'];
    $tweeted_by_screen_name = $tweet['user']['screen_name'];
    $tweeted_by_profile_picture = $tweet['user']['profile_image_url_https'];
    $tweeted_by_user_verified = $tweet['user']['verified'];

    // Tweet
    $tweeted_by_tweet = $tweet['text'];
    $tweeted_by_tweet_formatted = addTweetEntityLinks( $tweet['text'] );
    $tweeted_recount = $tweet['retweet_count'];
    $tweeted_favorite_count = $tweet['favorite_count'];

    // Tweet data
    $tweeted_tweet_url = $tweet['entities']['urls']['0']['url'];
    $tweeted_tweet_exspand_url = $tweet['entities']['urls']['0']['expanded_url'];
    // Post Date
    $tweeted_date = $tweet['created_at'];
    $tweeted_date_format = date('M j', strtotime( $tweeted_date ));

    // echo 'TWEET POST<br />';
    // echo 'tweeted_by_name:'. $tweeted_by_name.'<br />';
    // echo 'tweeted_by_id:'. $tweeted_by_id .'<br />';
    // echo 'tweeted_by_screen_name:'. $tweeted_by_screen_name .'<br />';
    // echo 'tweeted_by_profile_picture:'. $tweeted_by_profile_picture .'<br />';
    // echo 'tweeted_by_user_verified:'. $tweeted_by_user_verified.'<br />';
    // echo 'tweeted_by_tweet:'. $tweeted_by_tweet.'<br />';
    // echo 'tweeted_by_tweet_formatted:'. $tweeted_by_tweet_formatted.'<br />';
    // echo 'tweeted_recount:'. $tweeted_recount.'<br />';
    // echo 'tweeted_favorite_count:'. $tweeted_favorite_count.'<br />';
    // echo 'tweeted_url:'. $tweeted_url .'<br />';
    // echo 'tweeted_tweet_exspand_url:'. $tweeted_tweet_exspand_url .'<br />';
    // echo 'tweeted_date:'. $tweeted_date .'<br />';
    // echo 'tweeted_date_format:'. $tweeted_date_format .'<br />';

    if ( $retweet_name != '' ) {
        echo '<div class="retweeted-wrap">';
            echo '<a href="https://twitter.com/'. $tweeted_by_screen_name.'"> <span class>'. $tweeted_by_name .' Retweeted<span></a>';
        echo '</div>';
    
        // SHOW ORIGINAL TWEET AUTHOR
        echo '<div class="tweet-author-wrap">';
            echo '<div class="tweet-author-img">';
                echo '<img width="75" src="'. $retweeted_profile_picture .'">';
            echo '</div>';

            echo '<div class="tweet-author-info">';
                echo '<div class="tweet-author-name">';
                    echo '<a href="http://www.twitter.com/'. $retweet_screen_name .'"><span>'. $retweet_name .'</span></a>';
                echo '</div>';

                if ( $user_verified == 1 ) {
                    echo '<div class="tweet-author-verified">';
                        echo '<svg viewBox="0 0 24 24" aria-label="Verified account" class="r-jwli3a r-4qtqp9 r-yyyyoo r-1xvli5t r-9cviqr r-dnmrzs r-bnwqim r-1plcrui r-lrvibr"><g><path d="M22.5 12.5c0-1.58-.875-2.95-2.148-3.6.154-.435.238-.905.238-1.4 0-2.21-1.71-3.998-3.818-3.998-.47 0-.92.084-1.336.25C14.818 2.415 13.51 1.5 12 1.5s-2.816.917-3.437 2.25c-.415-.165-.866-.25-1.336-.25-2.11 0-3.818 1.79-3.818 4 0 .494.083.964.237 1.4-1.272.65-2.147 2.018-2.147 3.6 0 1.495.782 2.798 1.942 3.486-.02.17-.032.34-.032.514 0 2.21 1.708 4 3.818 4 .47 0 .92-.086 1.335-.25.62 1.334 1.926 2.25 3.437 2.25 1.512 0 2.818-.916 3.437-2.25.415.163.865.248 1.336.248 2.11 0 3.818-1.79 3.818-4 0-.174-.012-.344-.033-.513 1.158-.687 1.943-1.99 1.943-3.484zm-6.616-3.334l-4.334 6.5c-.145.217-.382.334-.625.334-.143 0-.288-.04-.416-.126l-.115-.094-2.415-2.415c-.293-.293-.293-.768 0-1.06s.768-.294 1.06 0l1.77 1.767 3.825-5.74c.23-.345.696-.436 1.04-.207.346.23.44.696.21 1.04z"></path></g></svg>';
                    echo '</div>';
                }

                echo '<div class="tweet-date">';
                    echo '<span>'. $tweeted_date_format .'</span>';
                echo '</div>';
            echo '</div>';
        echo '</div>';

        echo '<div class="tweet-text-wrap">';
            echo '<p>';

                // The Regular Expression filter
                $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
                $text = $retweeted_tweet_text;

                // Check if there is a url in the text
                if( preg_match($reg_exUrl, $text, $url) ) {
                    // make the urls hyper links
                    $text = preg_replace( $reg_exUrl, '<a target="_blank" href='. $url[0] .'>'. $url[0] .'</a>', $text );

                    //Convert hashtags to twitter searches in <a> links
                    $text = preg_replace("/#([A-Za-z0-9\/\.]*)/", "<a target=\"_new\" href=\"http://twitter.com/search?q=$1\">#$1</a>", $text);

                    //Convert attags to twitter profiles in <a> links
                    $text = preg_replace("/@([A-Za-z0-9\/\.]*)/", "<a href=\"http://www.twitter.com/$1\">@$1</a>", $text);

                    echo $text;
                } else {
                    echo apply_filters('the_content', $text);
                }
            echo '</p>';
        echo '</div>';

    
        if ( $retweeted_tweet_media_url != '' ) {
            echo '<div class="tweet-img-wrap">';
                // echo '1';
                if ( $retweeted_tweet_video_media_url !== null ) {
                    echo '<a class="play-video-link" href="'. $retweeted_tweet_video_media_url .'" data-lity-target="'. $retweeted_tweet_video_media_url .'" data-lity></a>';
                    echo '<div class="play-bt">';
                        echo '<svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m256 512c-140.609375 0-256-115.390625-256-256s115.390625-256 256-256 256 115.390625 256 256-115.390625 256-256 256zm0 0" fill="#deecf1"/><path d="m512 256c0-140.609375-115.390625-256-256-256v512c140.609375 0 256-115.390625 256-256zm0 0" fill="#c6e2e7"/><path d="m181 107.976562v296.046876l222.039062-148.023438zm0 0" fill="#384949"/><path d="m256 354.023438 147.039062-98.023438-147.039062-98.023438zm0 0" fill="#293939"/></svg>';
                    echo '</div>';
                    echo '<div class="play-overlay"></div>';
                } else {
                    echo '<a class="play-video-link" href="'. $retweeted_tweet_media_url .'" data-lity-target="'. $retweeted_tweet_media_url .'" data-lity></a>';
                }
                echo '<img src="'. $retweeted_tweet_media_url .'" alt="twitter image">';
            echo '</div>';
        } else {

            $tweeted_media_type == '';
            $tweeted_media_type = $tweet['entities']['media']['0']['type'];
            
            $tweeted_quote_url == '';
            $tweeted_quote_url = $tweet['quoted_status']['extended_entities']['media']['0']['expanded_url']; 
                    
            $retweeted_tweeted_quote_url = '';
            $retweeted_tweeted_quote_url = $tweet['retweeted_status']['quoted_status']['extended_entities']['media']['0']['expanded_url']; 
                    
            $retweeted_in_reply_quote_url = '';
            $retweeted_in_reply_quote_url = $tweet['quoted_status']['extended_entities']['media']['0']['expanded_url']; 

            if ( $tweeted_quote_url != '' ) {
                $tweeted_media_url = '';
                $tweeted_media_url = $tweet['entities']['media']['0']['media_url_https'];
    
                $tweeted_media_display_url = '';
                $tweeted_media_display_url = $tweet['entities']['media']['0']['display_url'];
    
                $tweeted_video_media_image = '';
                $tweeted_video_media_image = $tweet['extended_entities']['media']['0']['media_url_https'];
    
                $tweeted_video_media_url = '';
                $tweeted_video_media_url = $tweet['extended_entities']['media']['0']['video_info']['variants'];
                
                if ($tweeted_video_media_url != '' ) {
                    foreach($tweeted_video_media_url as $video) {
                        $max_bitrate = $video['bitrate'];
                
                        foreach($tweeted_video_media_url as $video) {
                            if ( $bitrate >= $max_bitrate ) {
                                $max_bitrate = $video['bitrate'];
                                $quality_video_url = $video['url'];
                            }
                        }
                    }
                
                    $tweeted_video_media_url = $quality_video_url;
                }
                
                // echo '<br />';
                // echo '<br />';
                // echo '<br />';
                // echo 'TWITTER USER POST MEDIA<br />';
                // echo 'tweeted_media_type:'. $tweeted_media_type .'<br />';
                // echo 'tweeted_media_url:'. $tweeted_media_url .'<br />';
                // echo 'tweeted_media_display_url:'. $tweeted_media_display_url .'<br />';
                // echo 'tweeted_video_media_image:'. $tweeted_video_media_image .'<br />';
                // echo 'tweeted_video_media_url:'. $tweeted_video_media_image .'<br />';
    
                echo '<div class="tweet-img-wrap">';
                    // echo '2';
                    if ( $tweeted_video_media_url !== null ) {
                        echo '<a class="play-video-link" href="'. $tweeted_video_media_url .'" data-lity-target="'. $tweeted_video_media_url .'" data-lity></a>';
                        echo '<div class="play-bt">';
                            echo '<svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m256 512c-140.609375 0-256-115.390625-256-256s115.390625-256 256-256 256 115.390625 256 256-115.390625 256-256 256zm0 0" fill="#deecf1"/><path d="m512 256c0-140.609375-115.390625-256-256-256v512c140.609375 0 256-115.390625 256-256zm0 0" fill="#c6e2e7"/><path d="m181 107.976562v296.046876l222.039062-148.023438zm0 0" fill="#384949"/><path d="m256 354.023438 147.039062-98.023438-147.039062-98.023438zm0 0" fill="#293939"/></svg>';
                        echo '</div>';
                        echo '<div class="play-overlay"></div>';
                    } else {
                        echo '<a class="play-video-link" href="'. $tweeted_video_media_image .'" data-lity-target="'. $tweeted_video_media_image .'" data-lity></a>';
                    }
                    echo '<img src="'. $tweeted_video_media_image .'" alt="twitter image">';
                echo '</div>';
    
            } else if ( $tweeted_quote_url != '' ) {
                $tweeted_quote_text = '';
                $tweeted_quote_text = $tweet['quoted_status']['text'];
    
                $tweeted_quote_text_formatted = '';
                $tweeted_quote_text_formatted = addTweetEntityLinks( $tweet['quoted_status']['text'] );
    
                $tweeted_quote_media_img_url = '';
                $tweeted_quote_media_img_url = $tweet['quoted_status']['extended_entities']['media']['0']['media_url_https'];
    
                $tweeted_quote_media_video_url = '';
                $tweeted_quote_media_video_url = $tweet['quoted_status']['extended_entities']['media']['0']['video_info']['variants'];
                          
                if ($tweeted_quote_media_video_url != '' ) {
                    foreach($tweeted_quote_media_video_url as $video) {
                        $max_bitrate = $video['bitrate'];
                
                        foreach($tweeted_quote_media_video_url as $video) {
                            if ( $bitrate >= $max_bitrate ) {
                                $max_bitrate = $video['bitrate'];
                                $quality_video_url = $video['url'];
                            }
                        }
                    }

                    $tweeted_quote_media_video_url = $quality_video_url;
                }
            

                // echo '<br />';
                // echo '<br />';
                // echo '<br />';
                // echo 'QUOTEED USER <br />';
                // echo 'tweeted_quote_url: '. $tweeted_quote_url .'<br />';
                // echo 'tweeted_quote_text: '. $tweeted_quote_text .'<br />';
                // echo 'tweeted_quote_text_formatted: '. $tweeted_quote_text_formatted.'<br />';   
                // echo 'tweeted_quote_media_img_url: '. $tweeted_quote_media_img_url .'<br />';
                // echo 'tweeted_quote_media_video_url: '. $tweeted_quote_media_video_url .'<br />';
    
                echo '<div class="tweet-img-wrap">';    
                    // echo '3';
                    if ( $tweeted_quote_media_video_url !== null ) {
                        echo '<a class="play-video-link" href="'. $tweeted_quote_media_video_url .'" data-lity-target="'. $tweeted_quote_media_video_url .'" data-lity></a>';
                        echo '<div class="play-bt">';
                            echo '<svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m256 512c-140.609375 0-256-115.390625-256-256s115.390625-256 256-256 256 115.390625 256 256-115.390625 256-256 256zm0 0" fill="#deecf1"/><path d="m512 256c0-140.609375-115.390625-256-256-256v512c140.609375 0 256-115.390625 256-256zm0 0" fill="#c6e2e7"/><path d="m181 107.976562v296.046876l222.039062-148.023438zm0 0" fill="#384949"/><path d="m256 354.023438 147.039062-98.023438-147.039062-98.023438zm0 0" fill="#293939"/></svg>';
                        echo '</div>';
                        echo '<div class="play-overlay"></div>';
                    } else {
                        echo '<a class="play-video-link" href="'. $tweeted_quote_media_img_url .'" data-lity-target="'. $tweeted_quote_media_img_url .'" data-lity></a>';
                    }
                    echo '<img src="'. $tweeted_quote_media_img_url .'" alt="twitter image">';
                echo '</div>';
    
            } else if ( $retweeted_tweeted_quote_url != '' ) {
                $retweeted_tweeted_quote_text = '';
                $retweeted_tweeted_quote_text = $tweet['retweeted_status']['quoted_status']['text'];
    
                $retweeted_tweeted_quote_text_formatted = '';
                $retweeted_tweeted_quote_text_formatted = addTweetEntityLinks( $tweet['retweeted_status']['quoted_status']['text'] );
    
                $retweeted_tweeted_quote_media_img_url = '';
                $retweeted_tweeted_quote_media_img_url = $tweet['retweeted_status']['quoted_status']['extended_entities']['media']['0']['media_url_https'];
    
                $retweeted_tweeted_quote_media_video_url = '';
                $retweeted_tweeted_quote_media_video_url = $tweet['retweeted_status']['quoted_status']['extended_entities']['media']['0']['video_info']['variants'];
                              
                if ($retweeted_tweeted_quote_media_video_url != '' ) {
                    foreach($retweeted_tweeted_quote_media_video_url as $video) {
                        $max_bitrate = $video['bitrate'];
                
                        foreach($retweeted_tweeted_quote_media_video_url as $video) {
                            if ( $bitrate >= $max_bitrate ) {
                                $max_bitrate = $video['bitrate'];
                                $quality_video_url = $video['url'];
                            }
                        }
                    }

                    $retweeted_tweeted_quote_media_video_url = $quality_video_url;
                }


                // echo '<br />';
                // echo '<br />';
                // echo '<br />';
                // echo 'RETWEETED QUOTEED USER <br />';
                // echo 'retweeted_tweeted_quote_url: '. $retweeted_tweeted_quote_url .'<br />';
                // echo 'retweeted_tweeted_quote_text: '. $retweeted_tweeted_quote_text .'<br />';
                // echo 'retweeted_tweeted_quote_text_formatted: '. $retweeted_tweeted_quote_text_formatted.'<br />';
                // echo 'retweeted_tweeted_quote_media_img_url: '. $retweeted_tweeted_quote_media_img_url .'<br />';
                // echo 'retweeted_tweeted_quote_media_video_url: '. $retweeted_tweeted_quote_media_video_url .'<br />';
    
    
                echo '<div class="tweet-img-wrap">';
                    // echo '4';
                    if ( $retweeted_tweeted_quote_media_video_url !== null ) {
                        echo '<a class="play-video-link" href="'. $retweeted_tweeted_quote_media_video_url .'" data-lity-target="'. $retweeted_tweeted_quote_media_video_url .'" data-lity></a>';
                        echo '<div class="play-bt">';
                            echo '<svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m256 512c-140.609375 0-256-115.390625-256-256s115.390625-256 256-256 256 115.390625 256 256-115.390625 256-256 256zm0 0" fill="#deecf1"/><path d="m512 256c0-140.609375-115.390625-256-256-256v512c140.609375 0 256-115.390625 256-256zm0 0" fill="#c6e2e7"/><path d="m181 107.976562v296.046876l222.039062-148.023438zm0 0" fill="#384949"/><path d="m256 354.023438 147.039062-98.023438-147.039062-98.023438zm0 0" fill="#293939"/></svg>';
                        echo '</div>';
                        echo '<div class="play-overlay"></div>';
                    } else {
                        echo '<a class="play-video-link" href="'. $retweeted_tweeted_quote_media_img_url .'" data-lity-target="'. $retweeted_tweeted_quote_media_img_url .'" data-lity></a>';
                    }
                    echo '<img src="'. $retweeted_tweeted_quote_media_img_url .'" alt="twitter image">';
                echo '</div>';
    
            } else if ( $retweeted_in_reply_quote_url != '' ) {   
                
                $retweeted_in_reply_quote_text = '';
                $retweeted_in_reply_quote_text = $tweet['quoted_status']['text'];
    
                $retweeted_in_reply_quote_text_formatted = '';
                $retweeted_in_reply_quote_text_formatted = addTweetEntityLinks( $tweet['quoted_status']['text'] );
    
                $retweeted_in_reply_quote_media_img_url = '';
                $retweeted_in_reply_quote_media_img_url = $tweet['quoted_status']['extended_entities']['media']['0']['media_url_https'];
    
                $retweeted_in_reply_quote_media_video_url = '';
                $retweeted_in_reply_quote_media_video_url = $tweet['quoted_status']['extended_entities']['media']['0']['video_info']['variants'];
                
                if ($retweeted_in_reply_quote_media_video_url != '' ) {
                    foreach($retweeted_in_reply_quote_media_video_url as $video) {
                        $max_bitrate = $video['bitrate'];
                
                        foreach($retweeted_in_reply_quote_media_video_url as $video) {
                            if ( $bitrate >= $max_bitrate ) {
                                $max_bitrate = $video['bitrate'];
                                $quality_video_url = $video['url'];
                            }
                        }
                    }

                    $retweeted_in_reply_quote_media_video_url = $quality_video_url;
                }
            

                // echo '<br />';
                // echo '<br />';
                // echo '<br />';
                // echo 'IN REPLY TO <br />';
                // echo 'retweeted_in_reply_quote_url: '. $retweeted_in_reply_quote_url .'<br />';
                // echo 'retweeted_in_reply_quote_text: '. $retweeted_in_reply_quote_text .'<br />';
                // echo 'retweeted_in_reply_quote_text_formatted: '. $retweeted_in_reply_quote_text_formatted.'<br />';
                // echo 'retweeted_in_reply_quote_media_img_url: '. $retweeted_in_reply_quote_media_img_url .'<br />';
                // echo 'retweeted_in_reply_quote_media_video_url: '. $retweeted_in_reply_quote_media_video_url .'<br />';
    
                echo '<div class="tweet-img-wrap">';
                    // echo '5';
                    if ( $retweeted_in_reply_quote_media_video_url !== null ) {
                        echo '<a class="play-video-link" href="'. $retweeted_in_reply_quote_media_video_url .'" data-lity-target="'. $retweeted_in_reply_quote_media_video_url .'" data-lity></a>';
                        echo '<div class="play-bt">';
                            echo '<svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m256 512c-140.609375 0-256-115.390625-256-256s115.390625-256 256-256 256 115.390625 256 256-115.390625 256-256 256zm0 0" fill="#deecf1"/><path d="m512 256c0-140.609375-115.390625-256-256-256v512c140.609375 0 256-115.390625 256-256zm0 0" fill="#c6e2e7"/><path d="m181 107.976562v296.046876l222.039062-148.023438zm0 0" fill="#384949"/><path d="m256 354.023438 147.039062-98.023438-147.039062-98.023438zm0 0" fill="#293939"/></svg>';
                        echo '</div>';
                        echo '<div class="play-overlay"></div>';
                    } else {
                        echo '<a class="play-video-link" href="'. $retweeted_in_reply_quote_media_img_url .'" data-lity-target="'. $retweeted_in_reply_quote_media_img_url .'" data-lity></a>';
                    }
                    echo '<img src="'. $retweeted_in_reply_quote_media_img_url .'" alt="twitter image">';
                echo '</div>';
    
            } else if ( $retweeted_tweet_web_url != '' ) {   
                echo '<div class="scrape-media">';
                    echo getMetaData( $retweeted_tweet_web_url );
                echo '</div>';
            }       
        }
    }
?>