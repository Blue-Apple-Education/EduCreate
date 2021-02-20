<?php /* Newsfeed Tile 01 */?>
<div class="newsfeed-tile-01 uk-card-body">
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
        <div class="featured-image">
            <img src="<?php echo esc_url($media['post_featured_image']['url']); ?>"
                alt="<?php echo esc_attr($media['post_featured_image']['alt']); ?>">
        </div>

        <a class="button" target="<?php echo $target; ?>" href="<?php echo $url; ?>"></a>

        <div class="overlay"></div>

    </div>


    <div class="content-wrap">
        <!-- Title Text -->
        <?php if ($title): ?> <a class="" target="<?php echo $target; ?>" href="<?php echo $url; ?>">
            <div class="title-wrap">
                <span class="uk-card-title"><?php echo $title; ?></span>
            </div>
        </a>
        <?php endif;?>
        <!--  -->

        <!-- Preview Text -->
        <?php if ($preview): ?>
        <span class="paragraph normal dark">
            <?php echo apply_filters('the_content', $preview); ?>
        </span>
        <?php endif;?>
        <!--  -->

        <!-- Button -->
        <a href="<?php echo $url; ?>" target="<?php echo $target; ?>" class="button bt-primary button-default">
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
                <span><?php echo $buttonText; ?></span>
            </div>
        </a>
        <!--  -->

    </div>
</div>
<style>
.img-wrap {}

.button-wrap {
    padding: 10px;
    background: #000;
    width: auto;
    text-align: center;
    max-width: 125px;
}

.button-wrap:hover {
    background: #fff;
}

.button-wrap a {
    color: #fff;
}

.button-wrap a:hover {
    color: #000;
}
</style>