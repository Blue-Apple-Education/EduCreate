<?php
// Heading
$gallery_image = get_sub_field('gallery_image'); ?>
 <div class="container-fluid">
   <div class="row">
     <!-- Loop -->
     <?php if (have_rows('image_gallery')) : ?>
     <?php while (have_rows('image_gallery')) : the_row(); ?>
       <!-- GRID ITEM -->
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 image-gallery-inner">
            <img class="gallery-image" src="<?php the_sub_field('gallery_image');?>" alt="<?php echo esc_attr($ib_image['alt']); ?>">
        </div>
       <!-- END -->
     <?php endwhile; ?>
     <?php endif; ?>
  <!-- END Loop -->
   </div>
 </div>
<style>
.image-gallery{
  padding: 50px 0px;
  -webkit-transition: all 0.3s ease-in-out 0s;
	-moz-transition: all 0.3s ease-in-out 0s;
	transition: all 0.3s ease-in-out 0s;
}
.image-gallery-inner{

}
.image-gallery-inner:hover{
  
}
.image-gallery-inner img.gallery-image{

}
</style>
