<?php
/*------------------------------------*\
	 BRANDING COLOURS
    \*------------------------------------*/

$branding_colours = get_field('branding_colours', 'option');
$primary = $branding_colours['primary'];
$secondary = $branding_colours['secondary'];
$tertiary = $branding_colours['tertiary'];
$quaternary = $branding_colours['quaternary'];

/*------------------------------------*\
	 BUTTON COLOURS
    \*------------------------------------*/

$button_colours = get_field('button_colours', 'option');
$bt_primary = $button_colours['primary'];
$bt_secondary = $button_colours['secondary'];
$bt_tertiary = $button_colours['tertiary'];
$bt_quaternary = $button_colours['quaternary'];

/*------------------------------------*\
	 HEADER COLOURS
    \*------------------------------------*/

$header_colours = get_field('header_colours', 'option');
$header_background_colour = $header_colours['header_background_colour'];
if ($header_background_colour == '') {
    $header_background_colour = '#ffffff';
}

/*------------------------------------*\
	 FOOTER COLOURS
    \*------------------------------------*/
$footer_colours = get_field('footer_colours', 'option');
$main_text_colour = $footer_colours['main_text_colour'];
if ($main_text_colour == '') {
    $main_text_colour = '#ffffff';
}

$main_section_bg_colour = $footer_colours['main_section_bg_colour'];
if ($main_section_bg_colour == '') {
    $main_section_bg_colour = '#315d98';
}

$copyright_section_bg_colour = $footer_colours['copyright_section_bg_colour'];
if ($copyright_section_bg_colour == '') {
    $copyright_section_bg_colour = '#2a4f80';
}

$copyright_text_colour = $footer_colours['copyright_text_colour'];
if ($copyright_text_colour == '') {
    $copyright_text_colour = '#5f83b4';
}

$copyright_text_hover_colour = $footer_colours['copyright_text_hover_colour'];
if ($copyright_text_hover_colour == '') {
    $copyright_text_hover_colour = '#5f83b4';
}

/*------------------------------------*\
	 MODULE COLOURS
    \*------------------------------------*/
$module_colours = get_field('module_colours', 'option');

$social_twitter_01 = $module_colours['social-twitter-01'];
$social_twitter_01_background = $social_twitter_01['background_colours_basic'];


$cta_3icon_01 = $module_colours['cta-3icon-01'];
$cta_3icon_01_background = $cta_3icon_01['background_colours_basic'];

/*------------------------------------*\
	 MENU COLOURS
    \*------------------------------------*/
$header_text_and_icon_colours = get_field('header_colours', 'option')['header_text_and_icon_colours'];

if ($header_text_and_icon_colours == '') {
    $header_text_and_icon_colours = '#191919';
}

?>

<style>
/*------------------------------------*\
	 HEADER COLOURS
    \*------------------------------------*/

.show-scrolled-menu header,
.force-header-visible header {
    background-color: <?php echo $header_background_colour;
    ?> !important;
}

/*------------------------------------*\
	 FOOTER COLOURS
    \*------------------------------------*/

footer .container .title,
footer .container .paragraph,
footer .container span,
footer .container a,
footer .container a span,
footer .container a:before,
footer .container p {
    color: <?php echo $main_text_colour;
    ?>;
}

footer .container svg,
footer .container svg path {
    fill: <?php echo $main_text_colour;
    ?>;
}

footer {
    background-color: <?php echo $main_section_bg_colour;
    ?>;
}

footer .lower-block {
    background-color: <?php echo $copyright_section_bg_colour;
    ?>;
}

footer .lower-block a,
footer .lower-block a span,
footer .lower-block span,
footer .lower-block p {
    color: <?php echo $copyright_text_colour;
    ?>;
}

footer .lower-block a:hover {
    color: <?php echo $copyright_text_hover_colour;
    ?>;
}

footer .lower-block a:hover span {
    color: <?php echo $copyright_text_hover_colour;
    ?>;
}

/*------------------------------------*\
	 BUTTON COLOURS
    \*------------------------------------*/

/* DEFAULT COLOUR */
.button--ujarak {
    border-color: <?php echo $bt_primary;
    ?>;
    background-color: <?php echo $bt_primary;
    ?>;
}

.button--ujarak:hover {
    border-color: <?php echo $bt_primary;
    ?>;
}

.button--ujarak:hover span {
    color: <?php echo $bt_primary;
    ?>;
}

/* bt White */

.button--ujarak.bt-white {
    background-color: #fff;
    border-color: #fff;
}

.button--ujarak.bt-white span {
    color: #191919;
}

.button--ujarak.bt-white:hover {
    border-color: <?php echo $bt_primary;
    ?>;
}

.button--ujarak.bt-white:hover:before {
    background-color: <?php echo $bt_primary;
    ?>;
}

.button--ujarak.bt-white:hover span {
    color: #fff;
}


/* bt_PRIMARY */
.button--ujarak.bt-primary {
    background-color: <?php echo $bt_primary;
    ?>;
    border-color: <?php echo $bt_primary;
    ?>;
}

.button--ujarak.bt-primary:hover {
    border-color: <?php echo $bt_primary;
    ?>;
}

.button--ujarak.bt-primary:hover span {
    color: <?php echo $bt_primary;
    ?>;
    border-color: <?php echo $bt_primary;
    ?>;
}

/* SECONDARY */
.button--ujarak.bt-secondary {
    background-color: <?php echo $bt_secondary;
    ?>;
    border-color: <?php echo $bt_secondary;
    ?>;
}

.button--ujarak.bt-secondary:hover {
    border-color: <?php echo $bt_secondary;
    ?>;
}

.button--ujarak.bt-secondary:hover span {
    color: <?php echo $bt_secondary;
    ?>;
    border-color: <?php echo $bt_secondary;
    ?>;
}

/* TERTIARY */
.button--ujarak.bt-tertiary {
    background-color: <?php echo $bt_tertiary;
    ?>;
    border-color: <?php echo $bt_tertiary;
    ?>;
}

.button--ujarak.bt-tertiary:hover {
    border-color: <?php echo $bt_tertiary;
    ?>;
}

.button--ujarak.bt-tertiary:hover span {
    color: <?php echo $bt_tertiary;
    ?>;
    border-color: <?php echo $bt_tertiary;
    ?>;
}

/* QUATERNARY */
.button--ujarak.bt-quaternary {
    background-color: <?php echo $bt_quaternary;
    ?>;
    border-color: <?php echo $bt_quaternary;
    ?>;
}

.button--ujarak.bt-quaternary:hover {
    border-color: <?php echo $bt_quaternary;
    ?>;
}

.button--ujarak.bt-quaternary:hover span {
    color: <?php echo $bt_quaternary;
    ?>;
    border-color: <?php echo $bt_quaternary;
    ?>;
}


/*------------------------------------*\
	 SINGLE POST COLOURS
    \*------------------------------------*/

.row-post-categories-list ul li.cat-title,
.row-single-recent-posts-list .recent-title ul li.cat-title {
    border-bottom: 2px solid <?php echo $bt_primary;
    ?>;
}

.row-post-categories-list ul li a:hover {
    border-bottom: 2px solid <?php echo $bt_primary;
    ?>;
}

.row-post-categories-list ul li.taxonomy-active a {
    background-color: <?php echo $bt_primary;
    ?>;
    border-bottom: 2px solid <?php echo $bt_primary;
    ?>;
}


/*------------------------------------*\
	 SIDE BAR MENU
    \*------------------------------------*/

.row-side-bar-menu-01 .side-menu .side-menu-header,
.row-side-bar-menu-custom-01 .side-menu-custom .side-menu-header {
    border-bottom: 2px solid <?php echo $bt_primary;
    ?>;
}

.row-side-bar-menu-01 .side-menu ul li a:hover,
.row-side-bar-menu-custom-01 .side-menu-custom ul li a:hover {
    border-bottom: 2px solid <?php echo $bt_primary;
    ?>;
}

.row-side-bar-menu-01 .side-menu ul li.page-active a,
.row-side-bar-menu-01 .side-menu ul li.current_page_item a,
.row-side-bar-menu-custom-01 .side-menu-custom ul li.page-active a,
.row-side-bar-menu-custom-01 .side-menu-custom ul li.current_page_item a {
    background-color: <?php echo $bt_primary;
    ?>;
    border-bottom: 2px solid <?php echo $bt_primary;
    ?>;
}


/*------------------------------------*\
	 CALENADR COLOURS
    \*------------------------------------*/

.eventon_events_list .eventon_list_event:nth-child(4n-7) {
    background-color: <?php echo $primary;
    ?> !important;
}

.eventon_events_list .eventon_list_event:nth-child(4n-6) {
    background-color: <?php echo $secondary;
    ?> !important;
}

.eventon_events_list .eventon_list_event:nth-child(4n-5) {
    background-color: <?php echo $tertiary;
    ?> !important;
}

.eventon_events_list .eventon_list_event:nth-child(4n-4) {
    background-color: <?php echo $quaternary;
    ?> !important;
}

.evo_lightboxes .evcal_evdata_cell p a {
    color: <?php echo $primary;
    ?> !important;
}

/*------------------------------------*\
	 MODERN EVENTS CALENADR COLOURS
    \*------------------------------------*/

.mec-calendar .mec-selected-day,
.mec-calendar .mec-selected-day:hover {
    background: <?php echo $primary;
    ?> !important;
}

.mec-calendar .mec-has-event:after {
    background-color: <?php echo $primary;
    ?> !important;
}

.mec-color,
.mec-color-before :before,
.mec-color-hover:hover,
.mec-wrap .mec-color,
.mec-wrap .mec-color-before :before,
.mec-wrap .mec-color-hover:hover {
    color: <?php echo $primary;
    ?> !important;
}

.mec-calendar .mec-calendar-events-side .mec-table-side-day {
    border: 1px solid <?php echo $primary;
    ?> !important;
}

.mec-calendar .mec-calendar-side .mec-next-month i,
.mec-calendar .mec-calendar-side .mec-previous-month i {
    color: <?php echo $primary;
    ?> !important;
}

.mec-calendar .mec-calendar-side .mec-next-month:hover,
.mec-calendar .mec-calendar-side .mec-previous-month:hover {
    color: <?php echo $primary;
    ?> !important;
}

.mec-month-divider span:before {
    border-bottom: 4px solid <?php echo $primary;
    ?> !important;
}

.mec-border-color,
.mec-border-color-hover:hover,
.mec-wrap .mec-border-color,
.mec-wrap .mec-border-color-hover:hover {
    border-color: <?php echo $primary;
    ?> !important;
}

.mec-bg-color,
.mec-bg-color-hover:hover,
.mec-wrap .mec-bg-color,
.mec-wrap .mec-bg-color-hover:hover {
    background-color: <?php echo $primary;
    ?> !important;
}

.mec-single-event .mec-events-meta-group-booking form>h4:before,
.mec-single-event .mec-frontbox-title:before {
    border-bottom: 4px solid <?php echo $primary;
    ?> !important;
}

.mec-single-event .mec-event-export-module.mec-frontbox .mec-event-exporting .mec-export-details ul li a:hover {
    color: #fff !important;
}

/*------------------------------------*\
	 NEWS FEED TILE 02 COLOURS
    \*------------------------------------*/

.newsfeed-tile-02:nth-child(4n+1) .content-wrap .color-block {
    background-color: <?php echo $primary;
    ?>;
}

.newsfeed-tile-02:nth-child(4n+2) .content-wrap .color-block {
    background-color: <?php echo $secondary;
    ?>;
}

.newsfeed-tile-02:nth-child(4n+3) .content-wrap .color-block {
    background-color: <?php echo $tertiary;
    ?>;
}

.newsfeed-tile-02:nth-child(4n+4) .content-wrap .color-block {
    background-color: <?php echo $quaternary;
    ?>;
}

/*------------------------------------*\
	 MODULE COLOURS
    \*------------------------------------*/

.row-social-twitter-01 {
    background-color: <?php echo $social_twitter_01_background;
    ?>;
}

.row-social-twitter-02 .tweet .content-wrap a {
    color: <?php echo $bt_primary;
    ?> !important;
}

.row-social-twitter-02 .tweet .tweet-author-name a {
    color: #000 !important;
}

.row-cta-3icon-01 {
    background-color: <?php echo $cta_3icon_01_background;
    ?>;
}

/*------------------------------------*\
	 MENU COLOURS
    \*------------------------------------*/

.wp-nav-wrap .menu-main-menu-container ul.menu li.menu-item ul.sub-menu li.menu-item::before {
    background-color: <?php echo $bt_primary;
    ?>;
}

/*------------------------------------*\
	 COOKIE BAR COLOURS
    \*------------------------------------*/

#cookie-law-info-bar {
    background-color: <?php echo $bt_primary;
    ?> !important;
}


/*------------------------------------*\
	 CAROUSEL PARAGRAPH
    \*------------------------------------*/
.row-cta-caro-01 .content-wrap a {
    color: <?php echo $bt_primary;
    ?> !important;
}

/*------------------------------------*\
	 COURSES
    \*------------------------------------*/
.course-content .module-wrap span {
    color: <?php echo $bt_primary;
    ?> !important;
}

.course-content .main-bar h1 {
    color: <?php echo $bt_primary;
    ?> !important;
}

.course-content .main-bar h2 {
    color: <?php echo $bt_primary;
    ?> !important;
}

.course-content .main-bar h3 {
    color: <?php echo $bt_primary;
    ?> !important;
}

.course-content .main-bar h4 {
    color: <?php echo $bt_primary;
    ?> !important;
}

.course-content .policy-title-wrap .title {
    color: <?php echo $bt_primary;
    ?> !important;
}

/*------------------------------------*\
	 SEARCH RESULTS COLOURS
    \*------------------------------------*/

.search-results-wrap-item a.page-title {
    color: <?php echo $bt_primary;
    ?>;
}

/*------------------------------------*\
	 VACANCIES 02 MODULE
    \*------------------------------------*/
.row-vacancy-pg-02 .vacancies-tiles-wrap .vacancy-tile-wrap .vacancy-content-wrap .preview-wrap .preview {
    color: <?php echo $bt_primary;
    ?>;
}


.row-vacancy-pg-02 .vacancies-tiles-wrap .vacancy-tile-wrap .vacancy-content-wrap .location-wrap svg path {
    fill: <?php echo $bt_primary;
    ?> !important;
}

/*------------------------------------*\
	 FORM SUBMISSION
    \*------------------------------------*/
.wpcf7-response-output.wpcf7-mail-sent-ok {
    background-color: <?php echo $bt_primary;
    ?> !important;
    color: #fff !important;
}

/*------------------------------------*\
	 PAGE CONTENT
    \*------------------------------------*/

.row-content-paragraph .content-paragraph-wrap .title {
    color: <?php echo $bt_primary;
    ?> !important;
}

.row-content-paragraph .content-paragraph-wrap a {
    color: <?php echo $bt_primary;
    ?> !important;
}

.content-wrap blockquote {
    border-left: 4px solid <?php echo $bt_primary;
    ?> !important;
}

/*------------------------------------*\
	 CONTACT US
    \*------------------------------------*/
.row-contact-pg-01 .column.sidebar .splitter .splitter-line {
    background-color: <?php echo $bt_primary;
    ?> !important;
}


/*------------------------------------*\
	 HEADER MENU
    \*------------------------------------*/

.solid_background header {
    background-color: #fff !important;
}

.force-header-visible header .logo-outer-wrap .school-name span {
    color: <?php echo $header_text_and_icon_colours;
    ?>;
}

.force-header-visible header .socials .header-ctas a.social span {
    color: <?php echo $header_text_and_icon_colours;
    ?>;
}

.force-header-visible header .socials .spacer {
    color: <?php echo $header_text_and_icon_colours;
    ?>;
}

.force-header-visible header .socials .social-network {
    fill: <?php echo $header_text_and_icon_colours;
    ?>;
}

.force-header-visible header .socials .social-network path {
    fill: <?php echo $header_text_and_icon_colours;
    ?>;
}

.force-header-visible header #google_translate_element svg path {
    fill: <?php echo $header_text_and_icon_colours;
    ?>;
}

.force-header-visible header #google_translate_element .goog-te-menu-value span {
    color: <?php echo $header_text_and_icon_colours;
    ?>;
}

.force-header-visible header .hamburger .hamburger-inner {
    background-color: <?php echo $header_text_and_icon_colours;
    ?>;
}

.force-header-visible header .hamburger .hamburger-inner:before {
    background-color: <?php echo $header_text_and_icon_colours;
    ?>;
}

.force-header-visible header .hamburger .hamburger-inner:after {
    background-color: <?php echo $header_text_and_icon_colours;
    ?>;
}

.force-header-visible .underlineWrap span.hover-3:after,
.force-header-visible .underlineWrap span.hover-3:before {
    background-color: <?php echo $header_text_and_icon_colours;
    ?> !important;
}

.force-header-visible .socials .header-cta-socials a svg.dark path {
    fill: <?php echo $header_text_and_icon_colours;
    ?> !important;
}

.force-header-visible .socials .header-cta-mail a svg.dark path,
.socials .header-cta-socials a svg.dark path {
    fill: <?php echo $header_text_and_icon_colours;
    ?> !important;
}

.force-header-visible header .socials .header-ctas .telephone span {
    color: <?php echo $header_text_and_icon_colours;
    ?>;
}

.force-header-visible header.header04 .search-box .new-search-wrap .search-wrap .search-bt .icon-wrap svg {
    fill: <?php echo $header_text_and_icon_colours;
    ?> !important;
}

.force-header-visible .socials .header-cta-mail a svg.dark {
    fill: <?php echo $header_text_and_icon_colours;
    ?> !important;
}

.force-header-visible header.header03 .wp-nav-wrap .menu-main-menu-container ul.menu li.menu-item a {
    color: <?php echo $header_text_and_icon_colours;
    ?>;
}

.force-header-visible header.header06 .wp-nav-wrap .menu-main-menu-container ul.menu li.menu-item a {
    color: <?php echo $header_text_and_icon_colours;
    ?>;
}

.force-header-visible header.header06.search-not-active .search-box .new-search-wrap .search-wrap .search-bt .icon-wrap svg {
    fill: <?php echo $header_text_and_icon_colours;
    ?> !important;
}

.show-scrolled-menu header .logo-outer-wrap .school-name span {
    color: <?php echo $header_text_and_icon_colours;
    ?>;
}

.show-scrolled-menu header .socials .header-ctas a.social span {
    color: <?php echo $header_text_and_icon_colours;
    ?>;
}

.show-scrolled-menu header .socials .spacer {
    color: <?php echo $header_text_and_icon_colours;
    ?>;
}

.show-scrolled-menu header .socials .social-network {
    fill: <?php echo $header_text_and_icon_colours;
    ?>;
}

.show-scrolled-menu header .socials .social-network path {
    fill: <?php echo $header_text_and_icon_colours;
    ?>;
}

.show-scrolled-menu header #google_translate_element svg path {
    fill: <?php echo $header_text_and_icon_colours;
    ?>;
}

.show-scrolled-menu header #google_translate_element .goog-te-menu-value span {
    color: <?php echo $header_text_and_icon_colours;
    ?>;
}

.show-scrolled-menu header .hamburger .hamburger-inner {
    background-color: <?php echo $header_text_and_icon_colours;
    ?>;
}

.show-scrolled-menu header .hamburger .hamburger-inner:before {
    background-color: <?php echo $header_text_and_icon_colours;
    ?>;
}

.show-scrolled-menu header .hamburger .hamburger-inner:after {
    background-color: <?php echo $header_text_and_icon_colours;
    ?>;
}

.show-scrolled-menu .underlineWrap span.hover-3:after,
.show-scrolled-menu .underlineWrap span.hover-3:before {
    background-color: <?php echo $header_text_and_icon_colours;
    ?> !important;
}

.show-scrolled-menu .socials .header-cta-socials a svg.dark path {
    fill: <?php echo $header_text_and_icon_colours;
    ?> !important;
}

.show-scrolled-menu .socials .header-cta-mail a svg.dark path,
.socials .header-cta-socials a svg.dark path {
    fill: <?php echo $header_text_and_icon_colours;
    ?> !important;
}

.show-scrolled-menu header .socials .header-ctas .telephone span {
    color: <?php echo $header_text_and_icon_colours;
    ?>;
}

.show-scrolled-menu header.header04 .search-box .new-search-wrap .search-wrap .search-bt .icon-wrap svg {
    fill: <?php echo $header_text_and_icon_colours;
    ?> !important;
}

.show-scrolled-menu .socials .header-cta-mail a svg.dark {
    fill: <?php echo $header_text_and_icon_colours;
    ?> !important;
}

.show-scrolled-menu header.header03 .wp-nav-wrap .menu-main-menu-container ul.menu li.menu-item a {
    color: <?php echo $header_text_and_icon_colours;
    ?>;
}

.show-scrolled-menu header.header06 .wp-nav-wrap .menu-main-menu-container ul.menu li.menu-item a {
    color: <?php echo $header_text_and_icon_colours;
    ?>;
}

.show-scrolled-menu header.header06.search-not-active .search-box .new-search-wrap .search-wrap .search-bt .icon-wrap svg {
    fill: <?php echo $header_text_and_icon_colours;
    ?> !important;
}

/*------------------------------------*\
	 USER LOGIN FORM
    \*------------------------------------*/

.login-page-custom .login-form-wrap input[type=submit] {
    background-color: <?php echo $bt_tertiary;
    ?> !important;
}
</style>