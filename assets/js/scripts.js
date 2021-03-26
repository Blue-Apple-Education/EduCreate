
$(document).ready(function() {
  // previous
  $(".accordion-item").on("click", function() {
    if (!$(this).hasClass("exspand")) {
      $(this).addClass("exspand");
    } else {
      $(this).removeClass("exspand");
    }
  });
});

// Detect browser version and osx in html
$(function() {
  function slugify(text) {
    return text
      .toString()
      .toLowerCase()
      .replace(/\s+/g, "-") // Replace spaces with -
      .replace(/[^\w\-]+/g, "") // Remove all non-word chars
      .replace(/\-\-+/g, "-") // Replace multiple - with single -
      .replace(/^-+/, "") // Trim - from start of text
      .replace(/-+$/, ""); // Trim - from end of text
  }

  navigator.sayswho = (function() {
    var ua = navigator.userAgent,
      tem,
      M =
        ua.match(
          /(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i
        ) || [];
    if (/trident/i.test(M[1])) {
      tem = /\brv[ :]+(\d+)/g.exec(ua) || [];
      return "IE " + (tem[1] || "");
    }

    if (M[1] === "Chrome") {
      tem = ua.match(/\b(OPR|Edge)\/(\d+)/);
      if (tem != null)
        return tem
          .slice(1)
          .join(" ")
          .replace("OPR", "Opera");
    }

    M = M[2] ? [M[1], M[2]] : [navigator.appName, navigator.appVersion, "-?"];
    if ((tem = ua.match(/version\/(\d+)/i)) != null) M.splice(1, 1, tem[1]);
    return M.join(" ");
  })();

  $("html").addClass(navigator.sayswho);
  // console.log(navigator.sayswho);

  var nVer = navigator.appVersion;
  var nAgt = navigator.userAgent;
  var browserName = navigator.appName;
  var fullVersion = "" + parseFloat(navigator.appVersion);
  var majorVersion = parseInt(navigator.appVersion, 10);
  var nameOffset, verOffset, ix;

  // In Opera 15+, the true version is after "OPR/"
  if ((verOffset = nAgt.indexOf("OPR/")) != -1) {
    browserName = "Opera";
    fullVersion = nAgt.substring(verOffset + 4);
  }
  // In older Opera, the true version is after "Opera" or after "Version"
  else if ((verOffset = nAgt.indexOf("Opera")) != -1) {
    browserName = "Opera";
    fullVersion = nAgt.substring(verOffset + 6);
    if ((verOffset = nAgt.indexOf("Version")) != -1)
      fullVersion = nAgt.substring(verOffset + 8);
  }
  // In MSIE, the true version is after "MSIE" in userAgent
  else if ((verOffset = nAgt.indexOf("MSIE")) != -1) {
    browserName = "Microsoft Internet Explorer";
    fullVersion = nAgt.substring(verOffset + 5);
  }
  // In Chrome, the true version is after "Chrome"
  else if ((verOffset = nAgt.indexOf("Chrome")) != -1) {
    browserName = "Chrome";
    fullVersion = nAgt.substring(verOffset + 7);
  }
  // In Safari, the true version is after "Safari" or after "Version"
  else if ((verOffset = nAgt.indexOf("Safari")) != -1) {
    browserName = "Safari";
    fullVersion = nAgt.substring(verOffset + 7);
    if ((verOffset = nAgt.indexOf("Version")) != -1)
      fullVersion = nAgt.substring(verOffset + 8);
  }
  // In Firefox, the true version is after "Firefox"
  else if ((verOffset = nAgt.indexOf("Firefox")) != -1) {
    browserName = "Firefox";
    fullVersion = nAgt.substring(verOffset + 8);
  }
  // In most other browsers, "name/version" is at the end of userAgent
  else if (
    (nameOffset = nAgt.lastIndexOf(" ") + 1) <
    (verOffset = nAgt.lastIndexOf("/"))
  ) {
    browserName = nAgt.substring(nameOffset, verOffset);
    fullVersion = nAgt.substring(verOffset + 1);
    if (browserName.toLowerCase() == browserName.toUpperCase()) {
      browserName = navigator.appName;
    }
  }
  // trim the fullVersion string at semicolon/space if present
  if ((ix = fullVersion.indexOf(";")) != -1)
    fullVersion = fullVersion.substring(0, ix);
  if ((ix = fullVersion.indexOf(" ")) != -1)
    fullVersion = fullVersion.substring(0, ix);

  majorVersion = parseInt("" + fullVersion, 10);
  if (isNaN(majorVersion)) {
    fullVersion = "" + parseFloat(navigator.appVersion);
    majorVersion = parseInt(navigator.appVersion, 10);
  }

  // document.write(''
  //  +'Browser name  = '+browserName+'<br>'
  //  +'Full version  = '+fullVersion+'<br>'
  //  +'Major version = '+majorVersion+'<br>'
  //  +'navigator.appName = '+navigator.appName+'<br>'
  //  +'navigator.userAgent = '+navigator.userAgent+'<br>'
  // )
  $("html")
    .addClass(
      "browser-" +
        slugify(browserName) +
        " browser-" +
        slugify(browserName) +
        "-" +
        fullVersion
    )
    .addClass("os-" + slugify(navigator.userAgent));

  // $('html').addClass(browserName);
  // $('html').addClass(fullVersion);
  // $('html').addClass(majorVersion);
  // $('html').addClass(navigator.appName);
  // $('html').addClass(navigator.userAgent);s
});
$(document).ready(function() {
  if ($("#evo_search")[0]) {
    $("#evo_search")
      .children(".evo_search_entry")
      .children("p")
      .children(".evo_do_search")
      .css("opacity", 0);
  }

  $(".evo_eventtop").hover(
    function() {
      /* Mouse enter */
      $(this).addClass("reset-delay");
    },
    function() {}
  );

  $(".evcal_arrows").on("click", function() {
    $(".calendar-grid").addClass("show-all-events");
  });

  // CHECK IF SEARCH IS EMPTY
  if ($(".eventon_list_event .no_events")[0]) {
    $(".hide-mod-if-empty")
      .parent(".row-calendar")
      .css("display", "none");
  }
});
$(document).ready(function() {
  /*------------------------------------*\
	// CTA - Carousel title and paragraph
\*------------------------------------*/
  var $ctaCarousel = $(".cta-carousel-title-paragraph").flickity({
    contain: true,
    prevNextButtons: true,
    freeScroll: false,
    wrapAround: true,
    pageDots: true,
    fullscreen: true,
    lazyLoad: 1,
    autoPlay: 6000,
    pauseAutoPlayOnHover: true
  });
});
$(document).ready(function() {
  /*------------------------------------*\
	// News and Events Carousel
\*------------------------------------*/

  $(".affiliations-logos").flickity({
    prevNextButtons: false,
    groupCells: 1,
    contain: true,
    cellAlign: "left",
    wrapAround: true,
    contain: true,
    pageDots: true,
    watchCSS: true,
    wrapAround: true,
    freeScroll: false,
    autoPlay: 3000,
    pauseAutoPlayOnHover: false
  });
});
$(document).ready(function() {
  /*------------------------------------*\
	// HERO - Full height carousel
\*------------------------------------*/
  $(".hero-carousel-image").flickity({
    asNavFor: ".hero-carousel-content",
    prevNextButtons: false,
    freeScroll: false,
    fade: true,
    wrapAround: true,
    pageDots: false,
    fullscreen: true,
    lazyLoad: 1,
    accessibility: false
  });

  // HERO CAROUSEL CONTENT
  var $carousel = $(".hero-carousel-content").flickity({
    contain: true,
    fade: true,
    prevNextButtons: true,
    freeScroll: false,
    wrapAround: true,
    pageDots: true,
    fullscreen: true,
    lazyLoad: 1,
    accessibility: false,
    autoPlay: 8000,
    pauseAutoPlayOnHover: false
  });

  // Flickity instance
  var flkty = $carousel.data("flickity");
  var $cellButtonGroup = $(".button-group--cells");
  var $cellButtons = $cellButtonGroup.find(".carousel-button");

  // update selected cellButtons
  $carousel.on("select.flickity", function() {
    $cellButtons.filter(".is-selected").removeClass("is-selected");

    $cellButtons.eq(flkty.selectedIndex).addClass("is-selected");
  });

  // select cell on button click
  $cellButtonGroup.on("click", ".button", function() {
    var index = $(this).index();
    $carousel.flickity("select", index);
  });

  // select cell on button click
  $cellButtonGroup.on("click", ".carousel-button", function() {
    var index = $(this).index();
    $carousel.flickity("select", index);
  });

  // GO TO ANCHOR
  $(".hero-carousel-downAarrow").on("click", function() {
    $target = $("#get-started");
    $("html, body")
      .stop()
      .animate(
        {
          scrollTop: $target.offset().top - 70
        },
        900,
        "swing",
        function() {
          window.location.hash = target;
        }
      );
  });

  $(".hero-carousel-content-navigation").hover(
    function() {
      var $this = $(this),
        timer = $this.data("timer") || 0;

      clearTimeout(timer);
      $this.addClass("hover");

      timer = setTimeout(function() {
        $this.addClass("full-on-hover");
      }, 1300); // 2000 is in mil sec eq to 2 sec.

      $this.data("timer", timer);
    },
    function() {
      var $this = $(this),
        timer = $this.data("timer") || 0;

      clearTimeout(timer);
      $this.removeClass("hover full-on-hover");
    }
  );

  // var $images = $('.background-images img');
  // var loaded_images_count = 0;

  // $images.load(function(){
  // 	loaded_images_count++;

  // 	if (loaded_images_count == $images.length) {
  // 		// $("div").show();

  // 		alert('loaded');
  // 	}
  // });
});
$(document).ready(function() {
  /*------------------------------------*\
		// vacancies - Full height carousel
	\*------------------------------------*/
  $(".vacancies-carousel-image").flickity({
    asNavFor: ".vacancies-carousel-content",
    prevNextButtons: false,
    freeScroll: false,
    fade: true,
    wrapAround: false,
    pageDots: false,
    fullscreen: true,
    lazyLoad: 1,
    accessibility: false
  });

  // vacancies CAROUSEL CONTENT
  var $vac_carousel = $(".vacancies-carousel-content").flickity({
    contain: true,
    fade: true,
    prevNextButtons: false,
    freeScroll: false,
    wrapAround: false,
    pageDots: true,
    fullscreen: true,
    lazyLoad: 1,
    accessibility: false,
    autoPlay: 6000,
    pauseAutoPlayOnHover: false
  });

  // Flickity instance
  var vac_flkty = $vac_carousel.data("flickity");

  // elements
  var $vac_cellButtonGroup = $(".button-group--cells");
  var $vac_cellButtons = $vac_cellButtonGroup.find(".carousel-button");

  // update selected vac_cellButtons
  $vac_carousel.on("select.flickity", function() {
    $vac_cellButtons.filter(".is-selected").removeClass("is-selected");

    $vac_cellButtons.eq(vac_flkty.selectedIndex).addClass("is-selected");
  });

  // select cell on button click
  $vac_cellButtonGroup.on("click", ".button", function() {
    var index = $(this).index();
    $vac_carousel.flickity("select", index);
  });

  // select cell on button click
  $vac_cellButtonGroup.on("click", ".carousel-button", function() {
    var index = $(this).index();
    $vac_carousel.flickity("select", index);
  });

  // previous
  $(".button--previous").on("click", function() {
    $vac_carousel.flickity("previous");
  });

  // next
  $(".button--next").on("click", function() {
    $vac_carousel.flickity("next");
  });

  $(".vacancies-carousel-content-navigation").hover(
    function() {
      var $this = $(this),
        timer = $this.data("timer") || 0;

      clearTimeout(timer);
      $this.addClass("hover");

      timer = setTimeout(function() {
        $this.addClass("full-on-hover");
      }, 1300); // 2000 is in mil sec eq to 2 sec.

      $this.data("timer", timer);
    },
    function() {
      var $this = $(this),
        timer = $this.data("timer") || 0;

      clearTimeout(timer);
      $this.removeClass("hover full-on-hover");
    }
  );
});
$(document).ready(function() {
  /*------------------------------------*\
	// News and Events Carousel
\*------------------------------------*/

  $(".carousel-newsfeed-01").flickity({
    prevNextButtons: true,
    freeScroll: false,
    cellAlign: "left",
    groupCells: true,
    wrapAround: false,
    watchCSS: true,
    pageDots: true
  });

  $(".carousel-newsfeed-02").flickity({
    prevNextButtons: true,
    freeScroll: false,
    groupCells: true,
    cellAlign: "left",
    wrapAround: false,
    watchCSS: true,
    pageDots: true
  });
});
$(document).ready(function() {
  /*------------------------------------*\
	// CONTENT - Paragraph carousel
\*------------------------------------*/
  var $contentCarousel = $(".content-paragraph-carousel").flickity({
    contain: true,
    prevNextButtons: true,
    freeScroll: false,
    wrapAround: false,
    pageDots: true,
    fullscreen: true,
    lazyLoad: 1,
    pauseAutoPlayOnHover: true,
    autoPlay: 6000
  });
});
$(document).ready(function() {
  /*------------------------------------*\
	// CONTENT - Paragraph carousel
\*------------------------------------*/
  var $contentCarousel = $(".twitter-carousel").flickity({
    contain: true,
    prevNextButtons: false,
    freeScroll: false,
    wrapAround: true,
    pageDots: true,
    fullscreen: true,
    lazyLoad: 1,
    pauseAutoPlayOnHover: true,
    autoPlay: 6000
  });
});
$(document).ready(function() {
  // remove no courses available message

  if ($(".list-course-content")[0]) {
    if ($(".module-wrap")[0]) {
      $(".no-courses-available").remove();
    }
  }
});
$(document).ready(function() {
  if ($(".wp-signup-form-placeholder")[0]) {
    var get_placeholder = $(".wp-signup-form-placeholder").html();
    $(".es_required_field").attr("placeholder", get_placeholder);
  }

  $(".wp-signup-form-bt").on("click", function() {
    $(".es_subscription_form_submit").click();
  });
});

$(document).ready(function() {
  $(document).on("click", "[data-lightbox-lity]", lity);

  function create_cookie(name, value, days2expire, path) {
    var date = new Date();
    date.setTime(date.getTime() + days2expire * 24 * 60 * 60 * 1000);
    var expires = date.toUTCString();
    document.cookie =
      name +
      "=" +
      value +
      ";" +
      "expires=" +
      expires +
      ";" +
      "path=" +
      path +
      ";";
  }

  function getCookie(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
      begin = dc.indexOf(prefix);
      if (begin != 0) return null;
    } else {
      begin += 2;
      var end = document.cookie.indexOf(";", begin);
      if (end == -1) {
        end = dc.length;
      }
    }
    // because unescape has been deprecated, replaced with decodeURI
    //return unescape(dc.substring(begin + prefix.length, end));
    return decodeURI(dc.substring(begin + prefix.length, end));
  }

  function loadVimeoPlayer() {
    loadVideo = $(
      ".emergency-notification-wrapper .media-wrap .embed-container.vimeo-player"
    );

    loadVideo.addClass("fade-preview");

    video_url = loadVideo.attr("data-video-url");
    video_allow = loadVideo.attr("data-allow");
    video_auto = loadVideo.attr("data-auto");

    loadVideo.append(
      '<iframe id="emergency-vimeo-video" src="' +
        video_url +
        "?autoplay=" +
        video_auto +
        '" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen ' +
        video_allow +
        "></iframe>"
    );
  }

  function loadYoutubePlayer() {
    loadVideo = $(
      ".emergency-notification-wrapper .media-wrap .embed-container.youtube-player"
    );

    loadVideo.addClass("fade-preview");

    video_url = loadVideo.attr("data-video-url");
    video_allow = loadVideo.attr("data-allow");
    video_auto = loadVideo.attr("data-auto");

    loadVideo.append(
      '<iframe src="' +
        video_url +
        "?autoplay=" +
        video_auto +
        '" frameborder="0" allowfullscreen ' +
        video_allow +
        "></iframe></div>"
    );
  }

  function loadWordpressPlayer() {
    loadVideo = $(
      ".emergency-notification-wrapper .media-wrap .embed-container.wordpress-player"
    );

    loadVideo.addClass("fade-preview");

    video_url = loadVideo.attr("data-video-url");
    video_autoplay = loadVideo.attr("data-autoplay");
    video_auto = loadVideo.attr("data-auto");

    loadVideo.append(
      "<video controls " +
        video_autoplay +
        '><source src="' +
        video_url +
        "?autoplay=" +
        video_auto +
        '" type="video/mp4"></video>'
    );
  }

  $(".emergency-lity-bt").on("click", function() {
    $("#emergency-button").click();
  });

  // SHOW POP UP ON LOAD IF NOT ALREADY SEEN WITHIN TIME LIMIT
  if ($("#emergency-popup")[0]) {
    emergencyCookie = getCookie("emergency-popup");
    number_days = $(".emergency-button").attr("data-frequency");

    if (number_days != "none") {
      if (emergencyCookie == null || number_days == "every") {
        $("#emergency-button").click();
      }
    }
  }

  // IF NO PREVIEW IMAGE LOAD VIDEO ON OPEN
  $(document).on("lity:ready", function(event, instance) {
    if (
      $(
        ".emergency-notification-wrapper .media-wrap .embed-container.no-preview-image.vimeo-player"
      )[0]
    ) {
      loadVimeoPlayer();
    } else if (
      $(
        ".emergency-notification-wrapper .media-wrap .embed-container.no-preview-image.youtube-player"
      )[0]
    ) {
      loadYoutubePlayer();
    } else if (
      $(
        ".emergency-notification-wrapper .media-wrap .embed-container.no-preview-image.wordpress-player"
      )[0]
    ) {
      loadWordpressPlayer();
    }
  });

  // IF PREVIEW IMAGE LOAD VIDEO ON CLICK
  $(
    ".emergency-notification-wrapper .media-wrap .embed-container.vimeo-player"
  ).on("click", function() {
    loadVimeoPlayer();
  });

  $(
    ".emergency-notification-wrapper .media-wrap .embed-container.youtube-player"
  ).on("click", function() {
    loadYoutubePlayer();
  });

  $(
    ".emergency-notification-wrapper .media-wrap .embed-container.wordpress-player"
  ).on("click", function() {
    loadWordpressPlayer();
  });

  // ON POPUP CLOSE
  $(document).on("lity:close", function(event, instance) {
    $(".embed-container").removeClass("fade-preview");
    $(
      ".emergency-notification-wrapper .media-wrap .embed-container iframe"
    ).remove();

    if ($("#emergency-popup")[0]) {
      number_days = $(".emergency-button").attr("data-frequency");
      data_hide = $(".emergency-button").attr("data-hide");

      create_cookie("emergency-popup", "message-viewed", number_days, "/");
      // console.log('days '+ number_days);
      // console.log('cookie created');

      if (data_hide == 1) {
        $(".emergency-button").addClass("hide");
      }
    }
  });
});
/**
 * Flickity fade v1.0.0
 * Fade between Flickity slides
 */

/* jshint browser: true, undef: true, unused: true */

(function(window, factory) {
  // universal module definition
  /*globals define, module, require */
  if (typeof define == "function" && define.amd) {
    // AMD
    define(["flickity/js/index", "fizzy-ui-utils/utils"], factory);
  } else if (typeof module == "object" && module.exports) {
    // CommonJS
    module.exports = factory(require("flickity"), require("fizzy-ui-utils"));
  } else {
    // browser global
    factory(window.Flickity, window.fizzyUIUtils);
  }
})(this, function factory(Flickity, utils) {
  // ---- Slide ---- //

  var Slide = Flickity.Slide;

  var slideUpdateTarget = Slide.prototype.updateTarget;
  Slide.prototype.updateTarget = function() {
    slideUpdateTarget.apply(this, arguments);
    if (!this.parent.options.fade) {
      return;
    }
    // position cells at selected target
    var slideTargetX = this.target - this.x;
    var firstCellX = this.cells[0].x;
    this.cells.forEach(function(cell) {
      var targetX = cell.x - firstCellX - slideTargetX;
      cell.renderPosition(targetX);
    });
  };

  Slide.prototype.setOpacity = function(alpha) {
    this.cells.forEach(function(cell) {
      cell.element.style.opacity = alpha;
    });
  };

  // ---- Flickity ---- //

  var proto = Flickity.prototype;

  Flickity.createMethods.push("_createFade");

  proto._createFade = function() {
    this.fadeIndex = this.selectedIndex;
    this.prevSelectedIndex = this.selectedIndex;
    this.on("select", this.onSelectFade);
    this.on("dragEnd", this.onDragEndFade);
    this.on("settle", this.onSettleFade);
    this.on("activate", this.onActivateFade);
    this.on("deactivate", this.onDeactivateFade);
  };

  var updateSlides = proto.updateSlides;
  proto.updateSlides = function() {
    updateSlides.apply(this, arguments);
    if (!this.options.fade) {
      return;
    }
    // set initial opacity
    this.slides.forEach(function(slide, i) {
      var alpha = i == this.selectedIndex ? 1 : 0;
      slide.setOpacity(alpha);
    }, this);
  };

  /* ---- events ---- */

  proto.onSelectFade = function() {
    // in case of resize, keep fadeIndex within current count
    this.fadeIndex = Math.min(this.prevSelectedIndex, this.slides.length - 1);
    this.prevSelectedIndex = this.selectedIndex;
  };

  proto.onSettleFade = function() {
    delete this.didDragEnd;
    if (!this.options.fade) {
      return;
    }
    // set full and 0 opacity on selected & faded slides
    this.selectedSlide.setOpacity(1);
    var fadedSlide = this.slides[this.fadeIndex];
    if (fadedSlide && this.fadeIndex != this.selectedIndex) {
      this.slides[this.fadeIndex].setOpacity(0);
    }
  };

  proto.onDragEndFade = function() {
    // set flag
    this.didDragEnd = true;
  };

  proto.onActivateFade = function() {
    if (this.options.fade) {
      this.element.classList.add("is-fade");
    }
  };

  proto.onDeactivateFade = function() {
    if (!this.options.fade) {
      return;
    }
    this.element.classList.remove("is-fade");
    // reset opacity
    this.slides.forEach(function(slide) {
      slide.setOpacity("");
    });
  };

  /* ---- position & fading ---- */

  var positionSlider = proto.positionSlider;
  proto.positionSlider = function() {
    if (!this.options.fade) {
      positionSlider.apply(this, arguments);
      return;
    }

    this.fadeSlides();
    this.dispatchScrollEvent();
  };

  var positionSliderAtSelected = proto.positionSliderAtSelected;
  proto.positionSliderAtSelected = function() {
    if (this.options.fade) {
      // position fade slider at origin
      this.setTranslateX(0);
    }
    positionSliderAtSelected.apply(this, arguments);
  };

  proto.fadeSlides = function() {
    if (this.slides.length < 2) {
      return;
    }
    // get slides to fade-in & fade-out
    var indexes = this.getFadeIndexes();
    var fadeSlideA = this.slides[indexes.a];
    var fadeSlideB = this.slides[indexes.b];
    var distance = this.wrapDifference(fadeSlideA.target, fadeSlideB.target);
    var progress = this.wrapDifference(fadeSlideA.target, -this.x);
    progress = progress / distance;

    fadeSlideA.setOpacity(1 - progress);
    fadeSlideB.setOpacity(progress);

    // hide previous slide
    var fadeHideIndex = indexes.a;
    if (this.isDragging) {
      fadeHideIndex = progress > 0.5 ? indexes.a : indexes.b;
    }
    var isNewHideIndex =
      this.fadeHideIndex != undefined &&
      this.fadeHideIndex != fadeHideIndex &&
      this.fadeHideIndex != indexes.a &&
      this.fadeHideIndex != indexes.b;
    if (isNewHideIndex) {
      // new fadeHideSlide set, hide previous
      this.slides[this.fadeHideIndex].setOpacity(0);
    }
    this.fadeHideIndex = fadeHideIndex;
  };

  proto.getFadeIndexes = function() {
    if (!this.isDragging && !this.didDragEnd) {
      return {
        a: this.fadeIndex,
        b: this.selectedIndex
      };
    }
    if (this.options.wrapAround) {
      return this.getFadeDragWrapIndexes();
    } else {
      return this.getFadeDragLimitIndexes();
    }
  };

  proto.getFadeDragWrapIndexes = function() {
    var distances = this.slides.map(function(slide, i) {
      return this.getSlideDistance(-this.x, i);
    }, this);
    var absDistances = distances.map(function(distance) {
      return Math.abs(distance);
    });
    var minDistance = Math.min.apply(Math, absDistances);
    var closestIndex = absDistances.indexOf(minDistance);
    var distance = distances[closestIndex];
    var len = this.slides.length;

    var delta = distance >= 0 ? 1 : -1;
    return {
      a: closestIndex,
      b: utils.modulo(closestIndex + delta, len)
    };
  };

  proto.getFadeDragLimitIndexes = function() {
    // calculate closest previous slide
    var dragIndex = 0;
    for (var i = 0; i < this.slides.length - 1; i++) {
      var slide = this.slides[i];
      if (-this.x < slide.target) {
        break;
      }
      dragIndex = i;
    }
    return {
      a: dragIndex,
      b: dragIndex + 1
    };
  };

  proto.wrapDifference = function(a, b) {
    var diff = b - a;

    if (!this.options.wrapAround) {
      return diff;
    }

    var diffPlus = diff + this.slideableWidth;
    var diffMinus = diff - this.slideableWidth;
    if (Math.abs(diffPlus) < Math.abs(diff)) {
      diff = diffPlus;
    }
    if (Math.abs(diffMinus) < Math.abs(diff)) {
      diff = diffMinus;
    }
    return diff;
  };

  // ---- wrapAround ---- //

  var _getWrapShiftCells = proto._getWrapShiftCells;
  proto._getWrapShiftCells = function() {
    if (!this.options.fade) {
      _getWrapShiftCells.apply(this, arguments);
    }
  };

  var shiftWrapCells = proto.shiftWrapCells;
  proto.shiftWrapCells = function() {
    if (!this.options.fade) {
      shiftWrapCells.apply(this, arguments);
    }
  };

  return Flickity;
});

$(document).ready(function() {
  // ON CLICK ADD CLASS TO BODY
  $("form .bt-primary").on("click", function() {
    $(".wpcf7-form-control.wpcf7-submit").click();
  });

  $("form .button").on("click", function() {
    $(".wpcf7-form-control.wpcf7-submit").click();
  });
});
$(document).ready(function() {
  /*------------------------------------*\
	// GALLERY GRID ISOTOPE
\*------------------------------------*/
  // init Isotope
  var $grid = $(".gallery-grid").isotope({
    itemSelector: ".gallery-item",
    layoutMode: "fitRows"
  });

  // bind filter button click
  $(".filters-button-group").on("click", "button", function() {
    var filterValue = $(this).attr("data-filter");

    // use filterFn if matches value
    filterValue = filterValue || filterValue;
    $grid.isotope({filter: filterValue});
  });

  // change is-checked class on buttons
  $(".button-group").each(function(i, buttonGroup) {
    var $buttonGroup = $(buttonGroup);

    $buttonGroup.on("click", "button", function() {
      $buttonGroup.find(".is-checked").removeClass("is-checked");
      $(this).addClass("is-checked");
    });
  });

  $(".filters-button-group .button").on("click", function() {
    $(".gallery-list").removeClass("animate-gallery");
  });

  $(".gallery-item").addClass("in_viewport");
});
// $(document).ready(function () {

// 	$('#google_translate_element').on("click", function () {

// 		$("iframe").contents().find(".goog-te-menu2-item div, .goog-te-menu2-item:link div, .goog-te-menu2-item:visited div, .goog-te-menu2-item:active div, .goog-te-menu2 *")
// 			.css({
// 				'color': '#544F4B',
// 				'font-family': 'Roboto',
// 				'width': '100%'
// 			});

// 		// Change menu's padding
// 		$("iframe").contents().find('.goog-te-menu2-item-selected').css('display', 'none');

// 		// Change menu's padding
// 		$("iframe").contents().find('.goog-te-menu2').css('padding', '0px');

// 		// Change the padding of the languages
// 		$("iframe").contents().find('.goog-te-menu2-item div').css('padding', '20px');

// 		// Change the width of the languages
// 		$("iframe").contents().find('.goog-te-menu2-item').css('width', '100%');

// 		$("iframe").contents().find('tbody')
// 			.css(
// 				'display', 'block',
// 				'float', 'left',
// 				'width', '100%'
// 			);

// 		$("iframe").contents().find('tr')
// 			.css(
// 				'display', 'block',
// 				'float', 'left',
// 				'width', '100%'
// 			);

// 		$("iframe").contents().find('td')
// 			.css(
// 				'display', 'block',
// 				'float', 'left',
// 				'width', '100%'
// 			);

// 		$("iframe").contents().find('.goog-te-menu2-colpad')
// 			.css(
// 				'display', 'none'
// 			);

// 		// Change hover effects
// 		$("iframe").contents().find(".goog-te-menu2-item div").hover(function () {
// 			$(this).css('background-color', '#4385F5').find('span.text').css('color', 'white');
// 		}, function () {
// 			$(this).css('background-color', 'white').find('span.text').css('color', '#544F4B');
// 		});

// 		// Change Google's default blue border
// 		$("iframe").contents().find('.goog-te-menu2').css('border', 'none');

// 		// Change the iframe's box shadow
// 		$(".goog-te-menu-frame").css('box-shadow', '0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.3)');

// 		// Change the iframe's size and position?
// 		$(".goog-te-menu-frame").css({
// 			'height': '100%',
// 			'width': '100%',
// 			'top': '0px'
// 		});

// 		// Change iframes's size
// 		$("iframe").contents().find('.goog-te-menu2').css({
// 			'height': '100%',
// 			'width': '100%'
// 		});
// 	});

// });

$(document).ready(function() {
  // COUNTER SOCIAL ICONS PRESENT
  var numSocialIcons = $(".social-icon").length;
  $(".header-cta-socials").addClass("icons-present-" + numSocialIcons);

  // HAMBURRGER ON CLICK ADD CLASS TO BODY
  $(".hamburger").on("click", function() {
    $("body").toggleClass("menu-is-active");
    $("#menu-main-menu li").removeClass("li-item-active");

    setTimeout(function() {
      $("body").toggleClass("removeMenuDelay");
    }, 1500);
  });

  // ACTIVATE SEARCH SEARCH BUTTON
  $(".header-search-activate").on("click", function() {
    $("header").removeClass("search-not-active");
    $("header").addClass("search-active");
    $("#search").focus();
  });

  // HIDE SEARCH
  $(".close-bt").on("click", function() {
    $("header").addClass("search-not-active");
    $("header").removeClass("search-active");
  });

  // HAMBURRGER ON CLICK ADD CLASS TO BODY
  $(".close-menu .hamburger").on("click", function() {
    $(".menu-arrow-wrap")
      .parent("li")
      .removeClass("menu-item-active");
    $(".sub-menu").slideUp(500);
    $(".menu-arrow-wrap").removeClass("open");

    $("#main-menu").removeClass("sub-menu-active");
  });

  // HIDE MENU ON PAGE RESIZE
  $(window).resize(function() {
    if ($(window).width() < 1024) {
      $("body").removeClass("menu-is-active");
      $("#menu-main-menu li").removeClass("li-item-active");

      setTimeout(function() {
        $("body").removeClass("removeMenuDelay");
      }, 1500);
    }
  });

  // STICKY NAV
  var userScroll = $(document).scrollTop();
  $(window).on("scroll", function() {
    onScrollHeader();
  });

  function onScrollHeader() {
    var newScroll = $(document).scrollTop();

    if (newScroll > 114 || userScroll > 114) {
      $("body").addClass("user-has-scrolled");
    } else {
      $("body").removeClass("user-has-scrolled");
    }

    if (newScroll > 100) {
      $("body").addClass("show-scrolled-menu");
    } else {
      $("body").removeClass("show-scrolled-menu");
    }
  }
  onScrollHeader();
});
$(document).ready(function() {
  $(".row-hero-narrow")
    .children(".hero-narrow")
    .children(".hero-narrow-image")
    .children(".background-container")
    .children(".background-images")
    .addClass("image-zoom");
});
$(document).ready(function() {
  // remove no courses available message
  if ($(".login-validation-check")[0]) {
    if ($(".user-logged-out")[0]) {
      $("section.flexible-content").remove();
      $(".row-hero-nrw-01").remove();
      $(".login-page-custom").css("display", "flex");
    }
  }
});
$(document).ready(function() {
  $('input[type="text"]').on("keyup", function() {
    if ($(this).val().length == 0) {
      $(this)
        .parent()
        .removeClass("has_text");
    } else {
      $(this)
        .parent()
        .addClass("has_text");
    }
  });

  // ON PAGE LOAD CHECK INPUT FIELDS ARE NOT EMPTY
  $('input[type="text"]').each(function() {
    if (this.value.trim() !== "") {
      $(this)
        .parent()
        .addClass("has_text");
    }
  });

  $('input[type="password"]').on("keyup", function() {
    if ($(this).val().length == 0) {
      $(this)
        .parent()
        .removeClass("has_text");
    } else {
      $(this)
        .parent()
        .addClass("has_text");
    }
  });

  // ON PAGE LOAD CHECK INPUT FIELDS ARE NOT EMPTY
  $('input[type="password"]').each(function() {
    if (this.value.trim() !== "") {
      $(this)
        .parent()
        .addClass("has_text");
    }
  });

  /*==================================================================
    [ Focus Contact2 ]*/
  $(".input100").each(function() {
    $(this).on("blur", function() {
      if (
        $(this)
          .val()
          .trim() != ""
      ) {
        $(this).addClass("has-val");
      } else {
        $(this).removeClass("has-val");
      }
    });
  });

  /*==================================================================
    [ Validate ]*/
  var input = $(".validate-input .input100");

  $(".validate-form").on("submit", function() {
    var check = true;

    for (var i = 0; i < input.length; i++) {
      if (validate(input[i]) == false) {
        showValidate(input[i]);
        check = false;
      }
    }

    return check;
  });

  $(".validate-form .input100").each(function() {
    $(this).focus(function() {
      hideValidate(this);
    });
  });

  function validate(input) {
    if ($(input).attr("type") == "email" || $(input).attr("name") == "email") {
      if (
        $(input)
          .val()
          .trim()
          .match(
            /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/
          ) == null
      ) {
        return false;
      }
    } else {
      if (
        $(input)
          .val()
          .trim() == ""
      ) {
        return false;
      }
    }
  }

  function showValidate(input) {
    var thisAlert = $(input).parent();

    $(thisAlert).addClass("alert-validate");
  }

  function hideValidate(input) {
    var thisAlert = $(input).parent();

    $(thisAlert).removeClass("alert-validate");
  }
});
$(document).ready(function() {
  $(".menu-item ul.sub-menu").each(function() {
    var getHeight = $(this).height();

    if (getHeight == 500) {
      $(this).addClass("show-scroll");
    }
  });
});
$(document).ready(function() {
  // ADD ARROWS - MOBILE MENU STYLE
  $(
    "#main-menu .menu-main-menu-container .menu .level-0.menu-item-has-children"
  ).each(function() {
    $(this).prepend(
      '<div class="menu-arrow-wrap level-0 closed"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 407.437 407.437" style="enable-background:new 0 0 407.437 407.437;" xml:space="preserve"><polygon points="386.258,91.567 203.718,273.512 21.179,91.567 0,112.815 203.718,315.87 407.437,112.815 "/></svg></div>'
    );
  });

  $(
    "#main-menu .menu-main-menu-container .menu .level-1.menu-item-has-children"
  ).each(function() {
    $(this).prepend(
      '<div class="menu-arrow-wrap level-1 closed"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 407.437 407.437" style="enable-background:new 0 0 407.437 407.437;" xml:space="preserve"><polygon points="386.258,91.567 203.718,273.512 21.179,91.567 0,112.815 203.718,315.87 407.437,112.815 "/></svg></div>'
    );
  });

  // ADD ARROWS - NORMAL MENU STYLE
  $(
    ".wp-nav-wrap .menu-main-menu-container .menu li ul.sub-menu li.menu-item-has-children.level-1"
  ).each(function() {
    $(this).prepend(
      '<div class="menu-arrow-wrap level-1"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 407.437 407.437" style="enable-background:new 0 0 407.437 407.437;" xml:space="preserve"><polygon points="386.258,91.567 203.718,273.512 21.179,91.567 0,112.815 203.718,315.87 407.437,112.815 "/></svg></div>'
    );
  });

  $(
    ".header-type-scrollable .wp-nav-wrap .menu-main-menu-container .menu .level-0 .sub-menu"
  ).each(function() {
    $(this).css("max-height", "70vh");
  });

  // HIDE MENU WHEN SCREEN SIZE CHANGES
  $(".level-0 ul.sub-menu").each(function() {
    var element = $(this).offset(), // this will return the left and top
      left = element.left, // this will return left
      right = $(window).width() - left - $(this).width(); // you can get right by calculate

    // alert(right);

    if (right > 340) {
      $(this).addClass("show-nav-right");
    } else {
      $(this).addClass("show-nav-left");
    }
  });

  // MOBILE MENU - DROP DOWN AND SHOW MENU - LEVEL 0
  $(".menu-arrow-wrap.level-0").on("click", function() {
    if ($(this).is(".open")) {
      $(this)
        .parent("li")
        .removeClass("menu-item-active");

      $(".sub-menu").slideUp(500);
      $(".menu-arrow-wrap.level-0").removeClass("open");

      $("#main-menu").removeClass("sub-menu-active");

      $(".menu-arrow-wrap").removeClass("open");
    } else {
      $(".menu-arrow-wrap.level-0")
        .parent("li")
        .removeClass("menu-item-active");
      $(".sub-menu").slideUp(500);
      $(".menu-arrow-wrap.level-0").removeClass("open");

      $(this)
        .parent("li")
        .addClass("menu-item-active");
      $(this)
        .parent("li")
        .children(".sub-menu")
        .slideDown(500);

      $("#main-menu").addClass("sub-menu-active");

      $(this).addClass("open");
    }
  });

  // MOBILE MENU - DROP DOWN AND SHOW MENU - LEVEL 1
  $(".menu-arrow-wrap.level-1").on("click", function() {
    if ($(this).is(".open")) {
      $(this)
        .parent("li")
        .removeClass("menu-item-active");

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

      $(this)
        .parent("li")
        .addClass("menu-item-active");
      $(this)
        .parent("li")
        .children(".level-1 .sub-menu")
        .slideDown(500);

      $("#main-menu").addClass("sub-menu-active");

      $(this).addClass("open");
    }
  });

  // SIDE BAR NAVIGATION
  // ADD ARROWS - NORMAL MENU STYLE
  $(".row-side-bar-menu-01 .page_item.page_item_has_children").each(function() {
    $(this).prepend(
      '<div class="menu-arrow-wrap"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 407.437 407.437" style="enable-background:new 0 0 407.437 407.437;" xml:space="preserve"><polygon points="386.258,91.567 203.718,273.512 21.179,91.567 0,112.815 203.718,315.87 407.437,112.815 "/></svg></div>'
    );
  });

  // SHOW DROP DOWN MENU ITEMS IN SIDE BAR NAV
  $(
    ".row-side-bar-menu-01 .page_item.page_item_has_children .menu-arrow-wrap"
  ).on("click", function() {
    if ($(this).is(".open")) {
      $(this)
        .parent("li")
        .removeClass("sub-menu-active");
      $(this)
        .parent("li")
        .children(".children")
        .slideUp(500);
      $(this).removeClass("open");
    } else {
      // Close all menus
      $(".page_item_has_children").removeClass("sub-menu-active");
      $(".page_item_has_children")
        .children(".children")
        .slideUp(500);
      $(".page_item_has_children")
        .children(".menu-arrow-wrap")
        .removeClass("open");

      $(this)
        .parent("li")
        .addClass("sub-menu-active");
      $(this)
        .parent("li")
        .children(".children")
        .slideDown(500);
      $(this).addClass("open");
    }
  });

  $(
    ".header-type-scrollable #menu-main-menu .menu-item-has-children.level-1"
  ).hover(
    function() {
      $(this)
        .parent(".sub-menu")
        .addClass("hover-active");
    },
    function() {
      $(this)
        .parent(".sub-menu")
        .removeClass("hover-active");
    }
  );
});
$(document).ready(function() {
  function link_is_external(link_element) {
    return link_element.host !== window.location.host;
  }



$(document).ready(function() {
  // Reveal page on loading
  function pageloaded() {
    $("html").addClass("page-loaded");
  }
  pageloaded();

  // Fix back and forward browser navigation
  window.addEventListener("pageshow", function(event) {
    var historyTraversal =
      event.persisted ||
      (typeof window.performance != "undefined" &&
        window.performance.navigation.type === 2);
    if (historyTraversal) {
      // Handle page restore.
      window.location.reload();
    }
  });
});
$(document).ready(function() {
  // ACTIVATE SEARCH ON KEY UP
  $(".policy-info-wrap").on("click touch", function(e) {
    // e.preventDefault();
    var self = $(this)
      .children(".policy-inner-wrap")
      .children(".policy-icon-wrap")
      .children(".upload");
    var parent = $(this).parent(".policy-item");
    self.addClass("loading");
    parent.addClass("active");

    setTimeout(function() {
      self.removeClass("loading");
      parent.removeClass("active");
    }, 4200);
  });

  // ACTIVATE GRID
  if ($(".policies-list-grid")[0]) {
    $(".policies-list-grid").filterizr({
      styles: {
        height: "75px",
        margin: "50px",
        width: "75px",
        "z-index": 2
      }
    });
  }

  // LOAD TILES ON PAGE LOAD
  $(".policy-info-wrap").addClass("in_viewport");

  // CHECK IF SEARCH IS EMPTY
  $(".quicksearch").on("keyup change", function() {
    setTimeout(function() {
      listItems = $(".policies-list-grid li").length;
      filteredOut = $(".filteredOut").length;

      if (listItems == filteredOut) {
        $(".no-policies").addClass("show");
      } else {
        $(".no-policies").removeClass("show");
      }
    }, 2500);
  });
});

(function(e, t) {
  if (typeof define != "function" || !define.amd)
    return t(e, e.document, e.jQuery);
  define(["jquery"], function(n) {
    return t(e, e.document, n);
  });
})(this, function(e, t, n) {
  if (e.responsiveTables) {
    console.error(
      "window.responsiveTables is already defined globally",
      e.responsiveTables
    );
    return;
  }
  var r = {
    version: "1.0.6",
    titleTpl: function(e) {
      return "<span data-type='responsive'>" + e + "</span>";
    },
    init: function(e, t) {
      var r = this,
        i = n(e ? e : "table.responsive"),
        s,
        o,
        u,
        a,
        f,
        l,
        c,
        h;
      if (i.length > 0)
        for (var p = 0, d = i.length; p < d; p++) {
          s = n(i[p]);
          if (s.attr("data-type") && !t) continue;
          s.attr("data-type", "responsive"),
            (a = s.find("> thead > tr, > tbody > tr, > tr")),
            (o = a.find("> th"));
          for (var v = 0, m = a.length; v < m; v++) {
            f = n(a[v]).find("> td");
            for (var g = 0, y = f.length; g < y; g++)
              (u = o[g]),
                (h = n(f[g])),
                (c = u.textContent || u.innerText || ""),
                t && h.find("span[data-type='responsive']").remove(),
                (l = h.prepend(r.titleTpl(c)));
          }
        }
    }
  };
  return (e.responsiveTables = r), r;
});
$(document).ready(function() {
  $("table").each(function(i, obj) {
    $(this).attr("data-type", "responsive");
    $(this).addClass("responsive");
  });

  /*------------------------------------*\
        // Add default class to tables
    \*------------------------------------*/
  $("table").addClass("full-width");

  $(".table-fixed table").removeClass("full-width");
  $(".table-fixed table").removeClass("responsive");
  $(".table-fixed table").css("width", "2000px");

  $(".table-fixed").each(function() {
    $(this)
      .children("table")
      .wrap('<div style="width: 100%; overflow-x: scroll;"></div>');
  });

  /*------------------------------------*\
        // START RESPONSIVE TABLES JS
    \*------------------------------------*/
  window.responsiveTables.init("table");
});

$(document).ready(function() {
  $(".school-tile-01").addClass("in_viewport");
});
$(".search-button-submit").click(function() {
  $("#searchform").submit();
});
$(document).ready(function() {
  if (window.location.href.indexOf(".local") > -1) {
    $("body").addClass("development-env");
  }
});
$(document).ready(function() {
  // Enable smooth scrolling
  $(function() {
    $("a[href*=\\#]:not([href=\\#])").click(function() {
      if (
        location.pathname.replace(/^\//, "") ==
          this.pathname.replace(/^\//, "") &&
        location.hostname == this.hostname
      ) {
        var target = $(this.hash);
        target = target.length
          ? target
          : $("[name=" + this.hash.slice(1) + "]");
        if (target.length) {
          $("html,body").animate(
            {
              scrollTop: target.offset().top
            },
            1000
          );
          return false;
        }
      }
    });
  });
});

$(document).ready(function() {
  console.log("Website built by www.blend-digital.co.uk");
});
$(document).ready(function() {
  var checkView = $(".viewport_check:not(.in_viewport)").waypoint(
    function() {
      $(this.element).addClass("in_viewport");

      this.destroy();
    },
    {
      offset: "90%"
    }
  );

  var checkViewFast = $(".viewport_check_fast:not(.in_viewport)").waypoint(
    function() {
      $(this.element).addClass("in_viewport");

      this.destroy();
    },
    {
      offset: "100%"
    }
  );

  var checkLeft = $(".viewport_check-left:not(.in_viewport)").waypoint(
    function() {
      $(this.element).addClass("in_viewport");

      this.destroy();
    },
    {
      offset: "90%"
    }
  );

  var checkRight = $(".viewport_check-right:not(.in_viewport)").waypoint(
    function() {
      $(this.element).addClass("in_viewport");

      this.destroy();
    },
    {
      offset: "90%"
    }
  );

  var checkUp = $(".viewport_check-up:not(.in_viewport)").waypoint(
    function() {
      $(this.element).addClass("in_viewport");

      this.destroy();
    },
    {
      offset: "90%"
    }
  );

  var checkUp = $(".viewport_check-down:not(.in_viewport)").waypoint(
    function() {
      $(this.element).addClass("in_viewport");

      this.destroy();
    },
    {
      offset: "90%"
    }
  );

  var calendarCheck = $(".evo_eventtop:not(.in_viewport)").waypoint(
    function() {
      $(this.element).addClass("in_viewport");

      this.destroy();
    },
    {
      offset: "90%"
    }
  );
});
$(document).ready(function() {
  if ($(".fci-hero")[0]) {
    heroImageLoadIn();
  }

  function loadAllHeroImages() {
    $(".img-mobile")
      .children(".background-image")
      .addClass("loaded");
    $(".img-tablet-port")
      .children(".background-image")
      .addClass("loaded");
    $(".img-tablet-land")
      .children(".background-image")
      .addClass("loaded");
    $(".img-desktop")
      .children(".background-image")
      .addClass("loaded");
  }

  function heroImageLoadIn() {
    var w =
      window.innerWidth ||
      document.documentElement.clientWidth ||
      document.body.clientWidth;
    if (w <= 768) {
      $(".img-mobile")
        .children(".background-image")
        .waitForImages(function() {
          $(this).addClass("loaded animated fadeIn slow");
        });

      setTimeout(function() {
        loadAllHeroImages();
      }, 3000);
    } else if (w <= 1024) {
      $(".img-tablet-port")
        .children(".background-image")
        .waitForImages(function() {
          $(this).addClass("loaded animated fadeIn slow");
        });

      setTimeout(function() {
        loadAllHeroImages();
      }, 3000);
    } else if (w <= 1280) {
      $(".img-tablet-land")
        .children(".background-image")
        .waitForImages(function() {
          $(this).addClass("loaded animated fadeIn slow");
        });

      setTimeout(function() {
        loadAllHeroImages();
      }, 3000);
    } else {
      $(".img-desktop")
        .children(".background-image")
        .waitForImages(function() {
          $(this).addClass("loaded animated fadeIn slow");
        });

      setTimeout(function() {
        loadAllHeroImages();
      }, 3000);
    }
  }
});
$(document).ready(function() {



  if ($(".login.wp-core-ui")[0]) {
    setTimeout(function() {
      $(".login.wp-core-ui").addClass("login-page-loaded");
    }, 100);

    setTimeout(function() {
      $(".login-bg").addClass("show");
    }, 200);

    setTimeout(function() {
      $("#login").addClass("show");
    }, 1000);

    $("#login")
      .children("h1")
      .remove();

    $(".login-logo").prependTo("form");
    $(".social-links-wrap").appendTo("form");

    if ($(".login-action-resetpass")[0]) {
      $(".login-logo").prependTo("#login");
      $(".social-links-wrap").appendTo("#login");
    }

    $("#backtoblog").remove();
    $("#nav").insertAfter(".forgetmenot");
  }
});
