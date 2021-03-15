<?php
	$form = get_sub_field('form')['form'];
    $title = get_sub_field('contact_info')['title'];
    $description = get_sub_field('contact_info')['description'];
    $address = get_sub_field('contact_info')['address'];
    $telephone = get_sub_field('contact_info')['telephone'];
    $email = get_sub_field('contact_info')['email'];

    $facebook_url = get_field('facebook_url', 'option');
    $twitter_url = get_field('twitter_url', 'option');
    $instagram_url = get_field('instagram_url', 'option');
?>

<div class="container flexbox">
    <div class="column sidebar content-wrap">
        
        <?php if( $title ): ?>
            <div class="contact-title">
                <span class="title bold block medium-large dark"><?php echo $title; ?></span>
            </div>
        <?php endif; ?>
        
        <div class="splitter">
            <span class="splitter-line"></span>
        </div>

        <?php if( $description ): ?>
            <div class="contact-description">
                <span class="paragraph block normal tall dark"><?php echo apply_filters('the_content', $description ); ?></span>
            </div>
        <?php endif; ?>

        <?php if( $address ): ?>
            <div class="contact-address">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.365 27.665"><path id="ic_room_24px" d="M14.683,2A9.676,9.676,0,0,0,5,11.683c0,7.262,9.683,17.982,9.683,17.982s9.683-10.72,9.683-17.982A9.676,9.676,0,0,0,14.683,2Zm0,13.141a3.458,3.458,0,1,1,3.458-3.458A3.459,3.459,0,0,1,14.683,15.141Z" transform="translate(-5 -2)"/></svg>
                <span class="paragraph block tall normal dark"><?php echo apply_filters('the_content', $address ); ?></span>
            </div>
        <?php endif; ?>

        <?php if( $telephone ): ?>
            <div class="contact-phone">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.665 27.665"><path id="ic_phone_24px" d="M8.564,14.973A23.282,23.282,0,0,0,18.692,25.1l3.381-3.381a1.528,1.528,0,0,1,1.568-.369,17.532,17.532,0,0,0,5.487.876,1.541,1.541,0,0,1,1.537,1.537v5.364a1.541,1.541,0,0,1-1.537,1.537A26.126,26.126,0,0,1,3,4.537,1.541,1.541,0,0,1,4.537,3H9.916a1.541,1.541,0,0,1,1.537,1.537,17.46,17.46,0,0,0,.876,5.487,1.542,1.542,0,0,1-.384,1.568Z" transform="translate(-3 -3)"/></svg>
                <a class="underlineWrap outwards social link call-now" alt="call us 01625 523141" href="tel:<?php echo $telephone; ?>">
                    <span class="hover dark hover-3"><?php echo $telephone; ?></span>
                </a>
            </div>
        <?php endif; ?>

        <?php if( $email ): ?>
            <div class="contact-email">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.182 21.503"><path id="Icon" d="M29.181,21.5H0V0H29.182V21.5h0ZM2.458,19.045H26.724V7.745L14.6,13.972,2.458,7.915Zm12.128-7.827L26.724,4.983V2.458H2.458v2.71Z"/></svg>
                <a class="underlineWrap outwards social link call-now" alt="mail us at <?php echo $email; ?>" href="mailto:<?php echo $email; ?>">
                    <span class="hover dark hover-3"><?php echo $email; ?></span>
                </a>
            </div>
        <?php endif; ?>

        <div class="social-media-links">
            <?php if( $facebook_url ): ?>
                <a class="animate-social facebook" alt="social link facebook" href="<?php echo $facebook_url; ?>">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"width="90px" height="90px" viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;" xml:space="preserve"><g><path id="Facebook__x28_alt_x29_" d="M90,15.001C90,7.119,82.884,0,75,0H15C7.116,0,0,7.119,0,15.001v59.998C0,82.881,7.116,90,15.001,90H45V56H34V41h11v-5.844C45,25.077,52.568,16,61.875,16H74v15H61.875C60.548,31,59,32.611,59,35.024V41h15v15H59v34h16c7.884,0,15-7.119,15-15.001V15.001z"/></g></svg>
                </a>
            <?php endif; ?>
            
            <?php if( $twitter_url ): ?>
                <a class="animate-social twitter" alt="social link twitter" href="<?php echo $twitter_url; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 486.392 486.392"><path d="M395.193 0H91.198C40.826 0 0 40.826 0 91.198v303.995c0 50.372 40.826 91.198 91.198 91.198h303.995c50.372 0 91.198-40.827 91.198-91.198V91.198C486.392 40.826 445.565 0 395.193 0zm-31.007 188.598l.182 7.752c0 79.16-60.221 170.359-170.359 170.359-33.804 0-65.268-9.91-91.776-26.904 4.682.547 9.454.851 14.288.851 28.059 0 53.868-9.576 74.357-25.627-26.204-.486-48.305-17.814-55.935-41.586a62.478 62.478 0 0 0 11.278 1.034c5.472 0 10.761-.699 15.777-2.067-27.39-5.533-48.031-29.7-48.031-58.701v-.76c8.086 4.499 17.297 7.174 27.116 7.509-16.051-10.731-26.63-29.062-26.63-49.825 0-10.974 2.949-21.249 8.086-30.095 29.518 36.236 73.658 60.069 123.422 62.562-1.034-4.378-1.55-8.968-1.55-13.649 0-33.044 26.812-59.857 59.887-59.857 17.206 0 32.771 7.265 43.714 18.908a121.25 121.25 0 0 0 38.03-14.531c-4.469 13.984-13.953 25.718-26.326 33.135a120.032 120.032 0 0 0 34.382-9.424c-8.025 11.977-18.209 22.526-29.912 30.916z" fill="#010002"/></svg>
                </a>
            <?php endif; ?>

            <?php if( $instagram_url ): ?>
                <a class="animate-social instagram" alt="social link instagram" href="<?php echo $instagram_url; ?>">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"width="169.063px" height="169.063px" viewBox="0 0 169.063 169.063" style="enable-background:new 0 0 169.063 169.063;"xml:space="preserve"><g><path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752c17.455,0,31.656,14.201,31.656,31.655V122.407z"/><path d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z"/><path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78C135.661,29.421,132.821,28.251,129.921,28.251z"/></g></svg>
                </a>
            <?php endif; ?>
        </div>
    </div>

    <div class="column mainbar content-wrap">
        <?php echo do_shortcode( '[contact-form-7 id="'. $form .'" title="Contact form 1"]' ); ?>
    </div>
</div>

