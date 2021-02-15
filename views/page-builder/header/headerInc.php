<?php
$pageId = get_the_ID();
$site_logo = get_field('site_logo', 'option');
$site_logo_dark = get_field('site_logo_dark', 'option');
$force_visible_header = get_field('force_visible_header', $pageId);

$headerStyle = 'transparent';
if ($force_visible_header == 1) {
    $headerStyle = 'visible';
}

if ($site_logo_dark == '') {
    $site_logo_dark = $site_logo;
}

$show_screen_size = get_field('show_screen_size', 'option');
$screen_size = 'hide-screen-size';
if ($show_screen_size == 1) {
    $screen_size = 'show-screen-size';
}

$address = get_field('address', 'option');

$email_address = get_field('email_address', 'option');
$email_header = get_field('email_header', 'option');

$telephone = get_field('telephone', 'option');
$header_cta = get_field('header_cta', 'option'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1>Header</h1>
        </div>
    </div>
</div>