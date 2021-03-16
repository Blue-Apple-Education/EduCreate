<?php
    $linkedin_url = get_field('linkedin_url', 'option');
    $linkedin_footer =  get_field('linkedin_footer', 'option');

    $facebook_url = get_field('facebook_url', 'option');
    $facebook_footer =  get_field('facebook_footer', 'option');

    $twitter_url = get_field('twitter_url', 'option');
    $twitter_footer =  get_field('twitter_footer', 'option');

    $instagram_url = get_field('instagram_url', 'option');
    $instagram_footer = get_field('instagram_footer', 'option');

    if( $linkedin_footer != 1) {
        if( $linkedin_url != '' ) {
            echo '<a target="_blank" class="social link animate-social linkedin" href="'. $linkedin_url .'">';
                echo '<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve"><g><g id="post-linkedin"><path d="M459,0H51C22.95,0,0,22.95,0,51v408c0,28.05,22.95,51,51,51h408c28.05,0,51-22.95,51-51V51C510,22.95,487.05,0,459,0z M153,433.5H76.5V204H153V433.5z M114.75,160.65c-25.5,0-45.9-20.4-45.9-45.9s20.4-45.9,45.9-45.9s45.9,20.4,45.9,45.9S140.25,160.65,114.75,160.65z M433.5,433.5H357V298.35c0-20.399-17.85-38.25-38.25-38.25s-38.25,17.851-38.25,38.25V433.5H204V204h76.5v30.6c12.75-20.4,40.8-35.7,63.75-35.7c48.45,0,89.25,40.8,89.25,89.25V433.5z"/></g></g></svg>';
            echo '</a>';
        }
    }

    if( $facebook_footer != 1) {
        if( $facebook_url != '' ) {
            echo '<a target="_blank" class="social link animate-social facebook" href="'. $facebook_url .'">';
                echo '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 18.622 18.622"><defs><clipPath id="clip-path"><rect id="Rectangle_4" data-name="Rectangle 4" width="18.622" height="18.622" fill="none"/></clipPath></defs><g id="Social_Icons_16px_Facebook" data-name="Social Icons – 16px / Facebook" transform="translate(0)" clip-path="url(#clip-path)"><path id="Icon" d="M17.595,0H1.027A1.027,1.027,0,0,0,0,1.027V17.595a1.027,1.027,0,0,0,1.027,1.027H9.953v-7.2H7.529V8.6H9.953V6.527a3.387,3.387,0,0,1,3.615-3.715,20.614,20.614,0,0,1,2.164.109V5.436H14.256c-1.169,0-1.4.552-1.4,1.368V8.6h2.793l-.363,2.819H12.843v7.2H17.6a1.027,1.027,0,0,0,1.027-1.027V1.027A1.027,1.027,0,0,0,17.595,0Z" fill="#fff"/></g></svg>';
            echo '</a>';
        }
    }

    if( $twitter_footer != 1) {
        if( $twitter_url != '' ) {
            echo '<a target="_blank" class="social link animate-social twitter" href="'. $twitter_url .'">';
                echo '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 18.623 18.623"><defs><clipPath id="clip-path"><rect id="Rectangle_5" data-name="Rectangle 5" width="18.623" height="18.623" fill="none"/></clipPath></defs><g id="Social_Icons_16px_Twitter" data-name="Social Icons – 16px / Twitter" transform="translate(0)" clip-path="url(#clip-path)"><path id="Icon" d="M16.3,18.623H2.328A2.33,2.33,0,0,1,0,16.3V2.328A2.33,2.33,0,0,1,2.328,0H16.3a2.33,2.33,0,0,1,2.328,2.328V16.3A2.33,2.33,0,0,1,16.3,18.623ZM3.5,12.976h0A6.8,6.8,0,0,0,7.154,14.04,6.507,6.507,0,0,0,12.2,11.826a7.026,7.026,0,0,0,1.75-4.578c0-.1,0-.2,0-.307A4.887,4.887,0,0,0,15.13,5.7a4.779,4.779,0,0,1-1.373.377A2.4,2.4,0,0,0,14.81,4.758a4.742,4.742,0,0,1-1.518.577A2.388,2.388,0,0,0,9.163,6.969a2.666,2.666,0,0,0,.06.545,6.794,6.794,0,0,1-4.92-2.5,2.4,2.4,0,0,0,.74,3.19,2.44,2.44,0,0,1-1.08-.3v.033a2.394,2.394,0,0,0,1.914,2.342,2.351,2.351,0,0,1-.629.084,2.422,2.422,0,0,1-.447-.042,2.383,2.383,0,0,0,2.23,1.657A4.763,4.763,0,0,1,4.066,13a4.664,4.664,0,0,1-.566-.026Z" fill="#fff"/></g></svg>';
            echo '</a>';
        }
    }

    if( $instagram_footer != 1) {
        if( $instagram_url != '' ) {
            echo '<a target="_blank" class="social link animate-social instagram" href="'. $instagram_url .'">';
                echo '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 18.623 18.623"><defs><clipPath id="clip-path"><rect id="Rectangle_3" data-name="Rectangle 3" width="18.623" height="18.623" fill="none"/></clipPath></defs><g id="Social_Icons_16px_Instagram" data-name="Social Icons – 16px / Instagram" transform="translate(0)" clip-path="url(#clip-path)"><path id="Icon" d="M5.472,18.566a6.864,6.864,0,0,1-2.261-.433A4.563,4.563,0,0,1,1.563,17.06,4.558,4.558,0,0,1,.489,15.41a6.91,6.91,0,0,1-.433-2.26C.01,12.164,0,11.835,0,9.311S.01,6.459.056,5.472a6.928,6.928,0,0,1,.433-2.26A4.563,4.563,0,0,1,1.563,1.563,4.563,4.563,0,0,1,3.212.489,6.928,6.928,0,0,1,5.472.056C6.459.01,6.788,0,9.311,0s2.852.01,3.839.056a6.91,6.91,0,0,1,2.26.433,4.558,4.558,0,0,1,1.65,1.074,4.563,4.563,0,0,1,1.074,1.649,6.864,6.864,0,0,1,.433,2.261c.046.978.057,1.306.057,3.839s-.01,2.861-.057,3.839a6.836,6.836,0,0,1-.433,2.259,4.756,4.756,0,0,1-2.724,2.724,6.836,6.836,0,0,1-2.259.433c-.978.046-1.306.057-3.839.057S6.451,18.612,5.472,18.566ZM5.549,1.732a5.185,5.185,0,0,0-1.729.321,2.9,2.9,0,0,0-1.071.7,2.9,2.9,0,0,0-.7,1.071,5.185,5.185,0,0,0-.321,1.729c-.044.986-.053,1.281-.053,3.763s.009,2.776.053,3.763A5.221,5.221,0,0,0,2.052,14.8a2.894,2.894,0,0,0,.7,1.071,2.885,2.885,0,0,0,1.071.7,5.143,5.143,0,0,0,1.729.321c.977.045,1.272.054,3.763.054s2.785-.009,3.763-.054a5.123,5.123,0,0,0,1.728-.321A3.085,3.085,0,0,0,16.569,14.8a5.123,5.123,0,0,0,.321-1.728c.045-.978.054-1.273.054-3.763s-.009-2.785-.054-3.763a5.143,5.143,0,0,0-.321-1.729,2.885,2.885,0,0,0-.7-1.071,2.894,2.894,0,0,0-1.071-.7,5.221,5.221,0,0,0-1.728-.321c-.987-.044-1.282-.053-3.763-.053S6.534,1.688,5.549,1.732ZM4.529,9.311A4.781,4.781,0,1,1,9.31,14.092,4.781,4.781,0,0,1,4.529,9.311Zm1.678,0a3.1,3.1,0,1,0,3.1-3.1,3.1,3.1,0,0,0-3.1,3.1Zm6.956-4.97a1.117,1.117,0,1,1,1.118,1.118,1.117,1.117,0,0,1-1.118-1.118Z" fill="#fff"/></g></svg>';
            echo '</a>';
        }
    }

    if( $email_footer != 1) {
        if( $email_address != '' ) {
            echo '<a target="_blank" class="social link animate-social mailus" alt="mail us" href="mailto:'. $email_address .'">';
                echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.183 22.503"><path id="Icon" d="M29.181,21.5H0V0H29.183V21.5h0ZM2.457,19.045H26.724V7.746L14.6,13.973,2.457,7.914Zm12.129-7.826L26.724,4.982V2.457H2.457V5.168Z" transform="translate(0.5 0.5)" fill="#fff" stroke="rgba(0,0,0,0)" stroke-width="1"/></svg>';
            echo '</a>';
        }
    }

    if( $telephone_footer != 1) {
        if( $telephone != '' ) {
            echo '<a target="_blank" class="social link animate-social tel" alt="telephone us" href="tel:'. $telephone .'">';
                echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.018 19.025"><path id="Path_56" data-name="Path 56" d="M5.975,6.3,1.582,1.9,3.283.2a.675.675,0,0,1,.95-.008L7.656,3.617a.677.677,0,0,1,0,.956l-.75.749-.7.7A1.921,1.921,0,0,0,5.975,6.3Zm3.614,7.159c-.719-.619-1.409-1.276-2.079-1.945S6.187,10.152,5.567,9.43a2.164,2.164,0,0,1-.342-2.15L.717,2.77C-.333,3.849-.2,6.524.951,8.874a16.922,16.922,0,0,0,1.8,2.807A25.157,25.157,0,0,0,4.9,14.134,23.965,23.965,0,0,0,7.343,16.29a16.927,16.927,0,0,0,2.8,1.792c2.354,1.149,5.03,1.275,6.108.224l-4.51-4.51A2.173,2.173,0,0,1,9.589,13.458Zm9.238,1.331-3.422-3.424a.681.681,0,0,0-.956,0h0l-.752.751-.693.7a2.1,2.1,0,0,1-.278.231l4.392,4.394q.852-.854,1.7-1.7A.67.67,0,0,0,18.828,14.789Z" transform="translate(-0.003 0)" fill="#fff"/></svg>';
            echo '</a>';
        }
    }
?>
