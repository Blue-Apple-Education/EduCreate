<?php
$text_content = get_sub_field('text_content');
$text_content = strip_tags($text_content, null);
?>
<section class="uk-section">
    <div class="uk-container">
        <div class="uk-column-1">
            <?php echo $text_content; ?>
        </div>
    </div>
</section>
