<div class="newsfeed-tile-01">
    <div class="news-event-item-wrap">
        <div class="img-wrap">
            <?php
            if ($file != '') {
                $url = $file['url'];
                $target = '_blank';
            } else {
                $url = get_the_permalink();
                $target = '';
            }

            ?>

            <a class="button" target="<?php echo $target; ?>" href="<?php echo $url; ?>"></a>

            <div class="overlay"></div>

        </div>

        <div class="content-wrap">

            <?php if ($title) : ?> <a class="pageLoader" target="<?php echo $target; ?>" href="<?php echo $url; ?>">
                <div class="underlineWrap">
                    <span class="hover-1 title dark medium bold"><?php echo $title; ?></span>
                </div>
            </a>
            <?php endif;

            if ($preview) :
                echo '<span class="paragraph normal dark">';
                echo apply_filters('the_content', $preview);
                echo '</span>';
            endif; ?>

            <div class="button-wrap">
                <?php
                if ($buttonText == '') {
                    if ($file != '') {
                        $buttonText = 'Download';
                    } else {
                        $buttonText = 'Read more';
                    }
                }
                ?>
                <a href="<?php echo $url; ?>" target="<?php echo $target; ?>"
                    class="pageLoader button bt-primary button--ujarak button--border-thin button--text-thick"><span><?php echo $buttonText; ?></span></a>';

            </div>
        </div>
    </div>
</div>