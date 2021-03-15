<?php

    $post_object = get_sub_field('emergency_notification');
    
    if( $post_object ): 
        // override $post
        $post = $post_object;
        setup_postdata( $post ); 

            $notification_colours = get_field('notification_colours');
                $background_colour = $notification_colours['background_colour'];
                $button_colour = $notification_colours['button_colour'];

            $notification_media = get_field('notification_media');
                $media_type = $notification_media['media_type'];

                $preview_image = $notification_media['preview_image'];
                $video_autoplay = $notification_media['video_autoplay'];

                $image = $notification_media['image'];
                $image_preview = $notification_media['image_preview'];
                $vimeo_embed = $notification_media['vimeo_embed'];
                $youtube_embed = $notification_media['youtube_embed'];
                $wordpress_video = $notification_media['wordpress_video'];

            $notification_content = get_field('notification_content');
                $title = $notification_content['title'];
                $paragraph = $notification_content['paragraph'];
                
                if ( $preview_image == 1 ) {
                    $preview_class = 'preview-image';
                } else {
                    $preview_class = 'no-preview-image';
                }

                if ( $video_autoplay == 1 ) {
                    $auto = 1;
                    $allow = 'allow=autoplay';
                    $autoplay = 'autoplay';
                } else {
                    $auto = 0;
                    $allow = '';
                    $autoplay = '';
                }

            echo '<div style="background-color: '. $background_colour .'" class="emergency-notification-wrapper clearfix">';
                echo '<button style="background-color: '. $button_colour .'" class="close-emergency-popup lity-close" type="button" aria-label="Close (Press escape to close)" data-lity-close=""><svg data-lity-close="" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 492 492" style="enable-background:new 0 0 492 492;" xml:space="preserve"><g><g><path d="M300.188,246L484.14,62.04c5.06-5.064,7.852-11.82,7.86-19.024c0-7.208-2.792-13.972-7.86-19.028L468.02,7.872c-5.068-5.076-11.824-7.856-19.036-7.856c-7.2,0-13.956,2.78-19.024,7.856L246.008,191.82L62.048,7.872c-5.06-5.076-11.82-7.856-19.028-7.856c-7.2,0-13.96,2.78-19.02,7.856L7.872,23.988c-10.496,10.496-10.496,27.568,0,38.052L191.828,246L7.872,429.952c-5.064,5.072-7.852,11.828-7.852,19.032c0,7.204,2.788,13.96,7.852,19.028l16.124,16.116c5.06,5.072,11.824,7.856,19.02,7.856c7.208,0,13.968-2.784,19.028-7.856l183.96-183.952l183.952,183.952c5.068,5.072,11.824,7.856,19.024,7.856h0.008c7.204,0,13.96-2.784,19.028-7.856l16.12-16.116c5.06-5.064,7.852-11.824,7.852-19.028c0-7.204-2.792-13.96-7.852-19.028L300.188,246z"/></g></g></svg></button>';

                echo '<div class="media-wrap">';
                    if ($media_type == 'image') {

                        echo '<img src="'. aq_resize( $image['url'], 624, 352, true, true, true ) .'" alt="image">';

                    } elseif ($media_type == 'vimeo') {
                        
                        $urls = getUrls($vimeo_embed);

                        // FIND VIMEO VIDEO WITHIN EMBED CODE
                        if($urls) {
                            foreach($urls as $url) {
                                if ( strpos($url, 'https://player.vimeo.com/video/' ) !== false) {
                                    $video_url = $url;
                                }
                            }
                        }

                        if ( $preview_image == 1 ) {
                            echo '<div data-allow="'. $allow .'" data-auto="'. $auto .'" data-video-url="'. $video_url .'" class="embed-container '. $preview_class .' vimeo-player">';
                                echo '<div class="play-video"></div>';
                                echo '<svg id="Capa_1" enable-background="new 0 0 499.999 499.999" height="512" viewBox="0 0 499.999 499.999" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m171.875 372.237c-2.701 0-5.402-.702-7.812-2.09-4.837-2.792-7.812-7.95-7.812-13.535v-215.987c0-5.585 2.975-10.727 7.797-13.519 4.837-2.792 10.788-2.838 15.625-.015l187.5 107.94c4.837 2.777 7.828 7.95 7.828 13.535s-2.975 10.742-7.828 13.535l-187.5 108.047c-2.412 1.388-5.113 2.089-7.798 2.089zm15.625-204.589v161.926l140.564-81.009c-.001 0-140.564-80.917-140.564-80.917z"/><path d="m250 499.999c-137.848 0-250-112.152-250-250s112.152-249.999 250-249.999 250 112.152 250 250-112.153 249.999-250 249.999zm0-468.749c-120.62 0-218.75 98.129-218.75 218.75s98.129 218.75 218.75 218.75 218.749-98.13 218.749-218.75-98.129-218.75-218.749-218.75z"/></svg>';
                                echo '<div class="preview-video" style="background-image: url('. aq_resize( $image_preview['url'], 624, 352, true, true, true ) .')"></div>';
                            echo '</div>';
                        } else {
                            echo '<div data-allow="'. $allow .'" data-auto="'. $auto .'" data-video-url="'. $video_url .'" class="embed-container '. $preview_class .' vimeo-player">';
                            echo '</div>';
                        }

                    } elseif ($media_type == 'youtube') {

                        $urls = getUrls($youtube_embed);

                        // FIND VIMEO VIDEO WITHIN EMBED CODE
                        if($urls) {
                            foreach($urls as $url) {
                                if ( strpos($url, 'https://www.youtube.com/embed/' ) !== false) {
                                    $video_url = $url;
                                }
                            }
                        }

                        if ( $preview_image == 1 ) {
                            echo '<div data-allow="'. $allow .'" data-auto="'. $auto .'" data-video-url="'. $video_url .'" class="embed-container '. $preview_class .' youtube-player">';
                                echo '<div class="play-video"></div>';
                                echo '<svg id="Capa_1" enable-background="new 0 0 499.999 499.999" height="512" viewBox="0 0 499.999 499.999" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m171.875 372.237c-2.701 0-5.402-.702-7.812-2.09-4.837-2.792-7.812-7.95-7.812-13.535v-215.987c0-5.585 2.975-10.727 7.797-13.519 4.837-2.792 10.788-2.838 15.625-.015l187.5 107.94c4.837 2.777 7.828 7.95 7.828 13.535s-2.975 10.742-7.828 13.535l-187.5 108.047c-2.412 1.388-5.113 2.089-7.798 2.089zm15.625-204.589v161.926l140.564-81.009c-.001 0-140.564-80.917-140.564-80.917z"/><path d="m250 499.999c-137.848 0-250-112.152-250-250s112.152-249.999 250-249.999 250 112.152 250 250-112.153 249.999-250 249.999zm0-468.749c-120.62 0-218.75 98.129-218.75 218.75s98.129 218.75 218.75 218.75 218.749-98.13 218.749-218.75-98.129-218.75-218.749-218.75z"/></svg>';
                                echo '<div class="preview-video" style="background-image: url('. aq_resize( $image_preview['url'], 624, 352, true, true, true ) .')"></div>';
                            echo '</div>';
                        } else {
                            echo '<div data-allow="'. $allow .'" data-auto="'. $auto .'" data-video-url="'. $video_url .'" class="embed-container '. $preview_class .' youtube-player">';
                            echo '</div>';
                        }

                    } elseif ($media_type == 'wp-video' ) {
                        $video_url = $wordpress_video['url'];

                        if ( $preview_image == 1 ) {
                            echo '<div data-autoplay="'. $autoplay .'" data-allow="'. $allow .'" data-auto="'. $auto .'" data-video-url="'. $video_url .'" class="embed-container '. $preview_class .' wordpress-player">';
                                echo '<div class="play-video"></div>';
                                echo '<svg id="Capa_1" enable-background="new 0 0 499.999 499.999" height="512" viewBox="0 0 499.999 499.999" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m171.875 372.237c-2.701 0-5.402-.702-7.812-2.09-4.837-2.792-7.812-7.95-7.812-13.535v-215.987c0-5.585 2.975-10.727 7.797-13.519 4.837-2.792 10.788-2.838 15.625-.015l187.5 107.94c4.837 2.777 7.828 7.95 7.828 13.535s-2.975 10.742-7.828 13.535l-187.5 108.047c-2.412 1.388-5.113 2.089-7.798 2.089zm15.625-204.589v161.926l140.564-81.009c-.001 0-140.564-80.917-140.564-80.917z"/><path d="m250 499.999c-137.848 0-250-112.152-250-250s112.152-249.999 250-249.999 250 112.152 250 250-112.153 249.999-250 249.999zm0-468.749c-120.62 0-218.75 98.129-218.75 218.75s98.129 218.75 218.75 218.75 218.749-98.13 218.749-218.75-98.129-218.75-218.749-218.75z"/></svg>';
                                echo '<div class="preview-video" style="background-image: url('. aq_resize( $image_preview['url'], 624, 352, true, true, true ) .')"></div>';
                            echo '</div>';
                        } else {
                            echo '<div data-autoplay="'. $autoplay .'" data-allow="'. $allow .'" data-auto="'. $auto .'" data-video-url="'. $video_url .'" class="embed-container '. $preview_class .' wordpress-player">';
                            echo '</div>';
                        }
                    }
                echo '</div>';

                echo '<div class="content-wrap">';
                    echo '<h1>'. $title .'</h1>';
                    echo '<div class="paragraph">';
                        echo apply_filters('the_content', $paragraph);
                    echo '</div>';
                echo '</div>';

            echo '</div>';
        wp_reset_postdata();
    endif;
?>