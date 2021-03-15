<?php
// Heading
$gallery_image = get_sub_field('gallery_image');

?>
<div class="container">
  <div class="row">

    <!-- GRID ITEM -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 image-gallery">
      <!-- Loop -->
      <?php if (have_rows('image_gallery')) : ?>
      <?php while (have_rows('image_gallery')) : the_row(); ?>
      <div class="image-gallery-inner">

        <div class="square">
          <div class="image" style="background-image: url('<?php the_sub_field('gallery_image');?>')">
          </div>
        </div>

      </div>
      <!-- END -->
      <?php endwhile; ?>
      <?php endif; ?>
      <!-- END Loop -->

    </div>
  </div>

  <style>
    /* Core Style */
    .image-gallery-inner {
      padding: 50px 0px;
    }

    .image {
      float: left;
      position: relative;
      width: 25%;
      padding-bottom: 25%;
      height: 100%;
      overflow: hidden;
      /* = width for a 1:1 aspect ratio */
      margin: 0;
      background-position: center center;
      background-repeat: no-repeat;
      background-size: cover;
      transition: all 1s;
    }


    .image:hover {
      transform: scale(1.1);
      z-index: 0;
      overflow: hidden;
    }

    .image:hover>square {
      overflow: hidden;
    }


    /*  */

    /* Animations */
    .image-gallery-inner:hover {}

    .square:hover>image {
      transform: scale(1.1);
      -webkit-transition: all 0.3s ease-in-out 0s;
      -moz-transition: all 0.3s ease-in-out 0s;
      transition: all 0.3s ease-in-out 0s;
    }
  </style>