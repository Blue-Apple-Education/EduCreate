<?php
    $affiliations = get_sub_field('affiliations');

    $counter = 0;

    if ($affiliations) {
        foreach ($affiliations as $slide) {
            $counter++;
        }
    }

    if ($counter >= 5) {
        $noSlides = 'moreThanFive';
    }

    echo '<div class="container viewport_check viewport_check-up">';
        echo '<ul class="affiliations-logos no-of-slides-'.$counter.' '. $noSlides .'  '. $carousel .'">';
            if ($affiliations) {
                foreach ($affiliations as $slide) {
                    $image = $slide['image']['url'];
                    $link = $slide['link'];

                    echo '<li class="slide">';
                    if ($link != '') {
                        echo '<a class="" href="'. $link['url'] .'" alt="affiliate link"></a>';
                    }
                    echo '<img src="'. $image .'" alt="affiliate image" />';
                    echo '</li>';
                }
            }
        echo '</ul>';
    echo '</div>';
?>
<style>

/* line 31, src/sass/flexible-content-modules/_affiliation-caro-01.scss */
.row-affiliation-caro-01 .affiliations-logos {
  margin: 0 auto;
  width: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 100%;
}

/* line 37, src/sass/flexible-content-modules/_affiliation-caro-01.scss */
.row-affiliation-caro-01 .affiliations-logos .flickity-viewport {
  min-height: 100% !important;
  width: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

/* line 44, src/sass/flexible-content-modules/_affiliation-caro-01.scss */
.row-affiliation-caro-01 .affiliations-logos.no-of-slides-2:after {
  content: 'flickity';
  display: none;
}

@media only screen and (min-width: 640px) {
  /* line 50, src/sass/flexible-content-modules/_affiliation-caro-01.scss */
  .row-affiliation-caro-01 .affiliations-logos.no-of-slides-2:after {
    content: '';
  }
}

/* line 55, src/sass/flexible-content-modules/_affiliation-caro-01.scss */
.row-affiliation-caro-01 .affiliations-logos.no-of-slides-2 .slide {
  width: 100%;
  text-align: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

@media only screen and (min-width: 640px) {
  /* line 55, src/sass/flexible-content-modules/_affiliation-caro-01.scss */
  .row-affiliation-caro-01 .affiliations-logos.no-of-slides-2 .slide {
    width: 50%;
    text-align: unset;
  }
}

/* line 72, src/sass/flexible-content-modules/_affiliation-caro-01.scss */
.row-affiliation-caro-01 .affiliations-logos.no-of-slides-3:after {
  content: 'flickity';
  display: none;
}

@media only screen and (min-width: 1024px) {
  /* line 78, src/sass/flexible-content-modules/_affiliation-caro-01.scss */
  .row-affiliation-caro-01 .affiliations-logos.no-of-slides-3:after {
    content: '';
  }
}

/* line 83, src/sass/flexible-content-modules/_affiliation-caro-01.scss */
.row-affiliation-caro-01 .affiliations-logos.no-of-slides-3 .slide {
  width: 100%;
  display: inline-block;
}

@media only screen and (min-width: 640px) {
  /* line 83, src/sass/flexible-content-modules/_affiliation-caro-01.scss */
  .row-affiliation-caro-01 .affiliations-logos.no-of-slides-3 .slide {
    width: 50%;
  }
}

@media only screen and (min-width: 1024px) {
  /* line 83, src/sass/flexible-content-modules/_affiliation-caro-01.scss */
  .row-affiliation-caro-01 .affiliations-logos.no-of-slides-3 .slide {
    text-align: center;
    width: 33.333333%;
  }
}

/* line 100, src/sass/flexible-content-modules/_affiliation-caro-01.scss */
.row-affiliation-caro-01 .affiliations-logos.no-of-slides-4:after {
  content: 'flickity';
  display: none;
}

@media only screen and (min-width: 1024px) {
  /* line 106, src/sass/flexible-content-modules/_affiliation-caro-01.scss */
  .row-affiliation-caro-01 .affiliations-logos.no-of-slides-4:after {
    content: '';
  }
}

/* line 111, src/sass/flexible-content-modules/_affiliation-caro-01.scss */
.row-affiliation-caro-01 .affiliations-logos.no-of-slides-4 .slide {
  width: 100%;
  display: inline-block;
}

@media only screen and (min-width: 640px) {
  /* line 111, src/sass/flexible-content-modules/_affiliation-caro-01.scss */
  .row-affiliation-caro-01 .affiliations-logos.no-of-slides-4 .slide {
    width: 50%;
  }
}

@media only screen and (min-width: 1024px) {
  /* line 111, src/sass/flexible-content-modules/_affiliation-caro-01.scss */
  .row-affiliation-caro-01 .affiliations-logos.no-of-slides-4 .slide {
    width: 25%;
  }
}

/* line 128, src/sass/flexible-content-modules/_affiliation-caro-01.scss */
.row-affiliation-caro-01 .affiliations-logos.no-of-slides-5:after, .row-affiliation-caro-01 .affiliations-logos.moreThanFive:after {
  content: 'flickity';
  display: none;
}

/* line 133, src/sass/flexible-content-modules/_affiliation-caro-01.scss */
.row-affiliation-caro-01 .affiliations-logos.no-of-slides-5 .slide, .row-affiliation-caro-01 .affiliations-logos.moreThanFive .slide {
  width: 100%;
  display: inline-block;
}

@media only screen and (min-width: 640px) {
  /* line 133, src/sass/flexible-content-modules/_affiliation-caro-01.scss */
  .row-affiliation-caro-01 .affiliations-logos.no-of-slides-5 .slide, .row-affiliation-caro-01 .affiliations-logos.moreThanFive .slide {
    width: 50%;
  }
}

@media only screen and (min-width: 1024px) {
  /* line 133, src/sass/flexible-content-modules/_affiliation-caro-01.scss */
  .row-affiliation-caro-01 .affiliations-logos.no-of-slides-5 .slide, .row-affiliation-caro-01 .affiliations-logos.moreThanFive .slide {
    width: 25%;
  }
}

/* line 147, src/sass/flexible-content-modules/_affiliation-caro-01.scss */
.row-affiliation-caro-01 .affiliations-logos .flickity-slider {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

/* line 151, src/sass/flexible-content-modules/_affiliation-caro-01.scss */
.row-affiliation-caro-01 .affiliations-logos .slide {
  width: auto;
  margin: 0;
  padding: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  width: 100%;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -ms-flex-item-align: center;
      align-self: center;
}

@media only screen and (min-width: 640px) {
  /* line 151, src/sass/flexible-content-modules/_affiliation-caro-01.scss */
  .row-affiliation-caro-01 .affiliations-logos .slide {
    padding: 0 30px 0 0;
  }
}

/* line 168, src/sass/flexible-content-modules/_affiliation-caro-01.scss */
.row-affiliation-caro-01 .affiliations-logos .slide a {
  position: absolute;
  top: 0;
  left: 0;
  height: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  z-index: 25;
}

/* line 179, src/sass/flexible-content-modules/_affiliation-caro-01.scss */
.row-affiliation-caro-01 .affiliations-logos .slide img {
  height: auto;
  width: auto;
  max-width: 100%;
  margin: 0 auto;
  -ms-flex-item-align: center;
      align-self: center;
  max-width: 75%;
  margin: 0 auto;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

@media only screen and (min-width: 1024px) {
  /* line 179, src/sass/flexible-content-modules/_affiliation-caro-01.scss */
  .row-affiliation-caro-01 .affiliations-logos .slide img {
    max-width: 70%;
    margin: 0 auto;
  }
}

</style>
