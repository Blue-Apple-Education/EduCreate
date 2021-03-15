
<div class="wrap-404">
    <div class="content-wrap-404">
        <div class="content-404">
            <div class="container-404">
                <div class="fill-container flexbox alignCenter row">
                    <div class="flexboxitem block midLeft pageCenter">
                        <div class="block content-wrap">
                            <span class="title-404 viewport_check">404</span>
                            <span class="text-404 large caps white viewport_check">Page not found</span>
                            <div class="button-wrap viewport_check">
                                <a href="/" class="pageLoader button ghost-white button--ujarak button--border-thin button--text-thick"><span>Back to home</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="image-404">
        <div class="container-404">
            <div class="background-container">
                <div class="overlay"></div>
                <?php
                    $desktopImageURL = get_field('404_background_image', 'option')['url'];
                    include(get_stylesheet_directory() . "/views/partial/hero-background-image.php");
                ?>
            </div>
        </div>
    </div>
</div>
