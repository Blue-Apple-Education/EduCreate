<!-- OFF CANVAS MENU -->
<!-- Hamburger Menu Toggle -->
<div class="hamburger-menu-01">
    <a href="#offcanvas-slide" class="uk-button uk-button-default" uk-toggle>Open</a>
</div>

<!-- Hamburger Sliding Menu -->
<?php do_action('uikit_offcanvas_menu'); ?>
<div id="offcanvas-slide" uk-offcanvas>
    <div class="uk-offcanvas-bar">

        <ul class="uk-nav uk-nav-default">
            <li class="uk-active"><a href="#">Active</a></li>
            <li><a href="#">Item</a></li>
            <li class="uk-nav-header">Header</li>
            <li><a href="#">Item</a></li>
            <li><a href="#">Item</a></li>
            <li class="uk-nav-divider"></li>
            <li><a href="#">Item</a></li>
        </ul>

    </div>
</div>