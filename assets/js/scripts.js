jQuery(document).ready(function ($) {
  // Show Level 1
  $("#main-menu .menu-primary-menu-container ul.menu  li.level-0").hover(
    function (e) {
      $(".level-1").addClass("open");
      console.log("hover");
    }
  );

  $(".menu-item ul.sub-menu").each(function () {
    var getHeight = $(this).height();

    if (getHeight == 500) {
      $(this).addClass("show-scroll");
    }
  });

  $(".menu-primary-menu-container ul.menu li.level-0").on("hover", function () {
    // OPEN at time of click
    if ($(this).is(".open")) {
      // Close sub-menu
      $(".level-0 .sub-menu").slideUp(500);
      $("#main-menu").addClass("sub-menu-active");
      $(".level-0 .sub-menu").removeClass("open");
      $(".level-0 .sub-menu").addClass("closed");
    } else {
      // CLOSED at time of click

      // Open sub-menu
      $(this).parent("ul.sub-menu").addClass("sub-menu-show-desktop");
      $(".level-1 .sub-menu").slideDown(500);
      $(this).removeClass("closed");
      $(this).addClass("open");

      $(this).parent("li").addClass("menu-item-active");
      $(this).parent("ul.sub-menu").addClass("sub-menu-show-desktop");
      $(this).parent("li").children(".level-1 .sub-menu").slideDown(500);

      $("#main-menu").addClass("sub-menu-active");
    }
  });

  // MOBILE MENU - DROP DOWN AND SHOW MENU - LEVEL 0
  $(".level-0").on("click", function () {
    if ($(this).is(".open")) {
      $(this).parent("li").removeClass("menu-item-active");

      $(".sub-menu").slideUp(500);
      $(".menu-arrow-wrap.level-0").removeClass("open");

      $("#main-menu").removeClass("sub-menu-active");

      $(".menu-arrow-wrap").removeClass("open");
    } else {
      $(".level-0").parent("li").removeClass("menu-item-active");
      $(".sub-menu").slideUp(500);
      $(".menu-arrow-wrap.level-0").removeClass("open");

      $(this).parent("li").addClass("menu-item-active");
      $(this).parent("li").children(".sub-menu").slideDown(500);

      $("#main-menu").addClass("sub-menu-active");

      $(this).addClass("open");
    }
  });

  // MOBILE MENU - DROP DOWN AND SHOW MENU - LEVEL 1
  $(".menu-arrow-wrap.level-1").on("click", function () {
    if ($(this).is(".open")) {
      $(this).parent("li").removeClass("menu-item-active");

      $(".menu-arrow-wrap.level-1.closed").removeClass("open");

      $(".level-1 .sub-menu").slideUp(500);

      $("#main-menu").removeClass("sub-menu-active");

      $(".menu-arrow-wrap .level-1").removeClass("open");
    } else {
      $(".menu-arrow-wrap.level-1")
        .parent("li")
        .removeClass("menu-item-active");
      $(".level-1 .sub-menu").slideUp(500);
      $(".menu-arrow-wrap.level-1").removeClass("open");

      $(this).parent("li").addClass("menu-item-active");
      $(this).parent("li").children(".level-1 .sub-menu").slideDown(500);

      $("#main-menu").addClass("sub-menu-active");

      $(this).addClass("open");
    }
  });

  $(".header-type-scrollable #menu-main-menu .level-1").hover(
    function () {
      $(this).parent(".sub-menu").addClass("hover-active");
    },
    function () {
      $(this).parent(".sub-menu").removeClass("hover-active");
    }
  );

  // ADD ARROWS - MOBILE MENU STYLE
  $(
    "#main-menu .menu-primary-menu-container .menu .level-0.menu-item-has-children"
  ).each(function () {
    $(this).prepend(
      '<div class="menu-arrow-wrap level-0 closed"><i class="fas fa-plus"></i></svg></div>'
    );
  });

  $(
    "#main-menu .menu-primary-menu-container .menu .level-1.menu-item-has-children"
  ).each(function () {
    $(this).prepend(
      '<div class="menu-arrow-wrap level-1 closed"><i class="fas fa-plus"></i></div>'
    );
  });

  // ADD ARROWS - NORMAL MENU STYLE
  $(
    ".wp-nav-wrap .menu-primary-menu-container .menu li ul.sub-menu li.menu-item-has-children.level-1"
  ).each(function () {
    $(this).prepend(
      '<div class="menu-arrow-wrap level-1"><i class="fas fa-plus"></i></div>'
    );
  });

  $(
    ".header-type-scrollable .wp-nav-wrap .menu-primary-menu-container .menu .level-0 .sub-menu"
  ).each(function () {
    $(this).css("max-height", "70vh");
  });
});
