<?php 
    $main_text = get_sub_field('main_text');
    $placeholder_text = get_sub_field('placeholder_text');
    $mailchimp_form_address = get_sub_field('mailchimp_form_address');
    $background_colours = get_sub_field('brand_colours');
?>

<div style="background-color: <?php echo $background_colours; ?>" class="inner-wrap">
    <div class="flexbox signup-wrap">

        <div class="text container flexbox column alignCenter content-wrap viewport_check viewport_check-right">
            <span><?php echo $main_text; ?></span>
        </div>

        <div class="signup-form container flexbox column alignCenter content-wrap viewport_check viewport_check-left">

            <?php if ($mailchimp_form_address != '' ) { ?>
                <div id="mc_embed_signup">
                    <form action="<?php echo $mailchimp_form_address; ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        
                        <div class="signup-input-wrap">
                            <input type="email" value="" placeholder="<?php echo $placeholder_text; ?>" name="EMAIL" class="required email" id="mce-EMAIL">
                            <div class="button-wrapper">
                                <svg fill="<?php echo $background_colours; ?>" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 11"><g fill="<?php echo $background_colours; ?>" id="Icons_24px_" data-name="Icons – 24px /" transform="translate(-5.5 -6.5)"><path id="Icon" d="M9.85,11,6.45,8.715,5.085,9.863,4.529,7.419l5.93-5.193L3.349,6.31,0,3.894,13,0Z" transform="translate(5.5 6.5)" fill="<?php echo $background_colours; ?>"/></g></svg>
                                <input type="submit" value="" name="subscribe" id="mc-embedded-subscribe">
                            </div>
                            <div class="background"></div>
                        </div>

                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>
                        
                        <div style="position: absolute; left: -5000px;" aria-hidden="true">
                            <input type="text" name="b_762c61f052f8abcc1c2c7d533_9205aab5fb" tabindex="-1" value="">
                        </div>

                    </form>
                </div>

            <?php } else { ?>
                <div class="wp-signup-form-placeholder"><?php echo $placeholder_text ?></div>
                <div id="mc_embed_signup">
                    <div action="" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        
                        <div class="signup-input-wrap">

                            <?php echo do_shortcode(' [email-subscribers-form id="1"] '); ?>
                            
                            <div class="button-wrapper wp-signup-form-bt">
                                <svg fill="<?php echo $background_colours; ?>" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 11"><g fill="<?php echo $background_colours; ?>" id="Icons_24px_" data-name="Icons – 24px /" transform="translate(-5.5 -6.5)"><path id="Icon" d="M9.85,11,6.45,8.715,5.085,9.863,4.529,7.419l5.93-5.193L3.349,6.31,0,3.894,13,0Z" transform="translate(5.5 6.5)" fill="<?php echo $background_colours; ?>"/></g></svg>
                                <input type="submit" value="" name="subscribe" id="mc-embedded-subscribe">
                            </div>
                            <div class="background"></div>
                        </div>

                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
</div>

