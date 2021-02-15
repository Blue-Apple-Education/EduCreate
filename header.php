<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?></title>
    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <?php wp_head(); ?>

    <?php
    /*GET THEME BRANDING COLOURS
    include(get_stylesheet_directory() . "/header-styles.php"); */
    ?>

    <?php echo get_field('gm_header', 'option'); ?>
    <?php echo get_field('analytics_tracking_code', 'option'); ?>

    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/css/uikit.min.css" />
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

<body>
    <header>
        <?php include(get_stylesheet_directory() . "/views/page-builder/header/headerInc.php"); ?>
    </header>


    <!-- OPEN MAIN -->
    <main class="main">

        <?php /* include(get_stylesheet_directory() . "/template-parts/parts/login-page-form.php"); */ ?>