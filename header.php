<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?></title>
    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">



    <?php
    /*GET THEME BRANDING COLOURS
include(get_stylesheet_directory() . "/header-styles.php"); */
    ?>


    <?php echo get_field('gm_header', 'option'); ?>
    <?php echo get_field('analytics_tracking_code', 'option'); ?>

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/css/uikit.min.css" />
    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <?php wp_head(); ?>
</head>

<?php
$google_translate = get_field('google_translate', 'option');

if ($google_translate == 1) {
?>
<script type="text/javascript">
var custom_languages = '<?php echo get_field('translate_languages', 'option') ?>';

function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'en',
        includedLanguages: custom_languages,
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
        autoDisplay: true
    }, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>
<?php
}
?>

<!-- Header Selection -->
<?php
//GET THEME LAYOUT
$getHeaderSelect = get_field('header_select', 'option');
$getHeader = basename($getHeaderSelect, '.jpg') . PHP_EOL;
$getHeader = preg_replace("/[^a-zA-Z0-9]/", "", $getHeader);
$menu_style = get_field('menu_style', 'option');
$header_options = get_field('header_options', 'option');
$force_header_background_on_load = $header_options['force_header_background_on_load'];
$force_header_large = $header_options['force_header_large'];

?>

<body>
    <header class="<?php echo $getHeader; ?>">
        <!-- Include Header Template -->
        <?php include(get_stylesheet_directory() . "/views/page-builder/header/" . $getHeader . ".php"); ?>
    </header>

    <!-- OPEN MAIN -->
    <main class="main">

        <?php /* include(get_stylesheet_directory() . "/template-parts/parts/login-page-form.php"); */ ?>