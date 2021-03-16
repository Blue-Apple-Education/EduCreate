<?php
$pageId = get_the_ID();
$site_logo = get_field('site_logo', 'option');
  $site_logo_dark = get_field('site_logo_dark', 'option');
  $header_colours = get_field('header_colours', 'option');
  $header_background_colour = $header_colours['header_background_colour'];
  $force_visible_header = get_field('force_visible_header', $pageId);
  $headerStyle = 'transparent';
  if ($force_visible_header == 1) {
      $headerStyle = 'visible';
  }
  if ($site_logo_dark == '') {
      $site_logo_dark = $site_logo;
  }
  $email_address = get_field('email_address', 'option');
  $telephone = get_field('telephone', 'option');
  $address = get_field('address', 'option');
  $header_cta = get_field('header_cta', 'option');
  $header_cta_url = $header_cta['url'];
  $header_cta_title = $header_cta['title'];
