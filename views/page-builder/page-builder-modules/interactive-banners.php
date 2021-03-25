<?php
// Heading
$ib_title = get_sub_field('ib_title');
// Paragraph
// Strip Tags
$ib_desc = get_sub_field('ib_desc');
$ib_desc = strip_tags($ib_desc, null);
// Image
$ib_image = get_sub_field('ib_image');
// Icon
$ib_icon = get_sub_field('ib_icon');
// Button
$ib_button = get_sub_field('ib_button');

// Branding COLOURS
$branding_colours = get_field('button_colours', 'option');
$primary = $branding_colours['primary'];
$secondary = $branding_colours['secondary'];
$tertiary = $branding_colours['tertiary'];
$quarternary = $branding_colours['quarternary'];?>
 <div class="container-fluid">
   <div class="row">

     <!-- Loop -->
     <?php if (have_rows('interactive_banners')) : ?>
     <?php while (have_rows('interactive_banners')) : the_row(); ?>
 <!-- END Loop -->

       <!-- GRID ITEM -->
               <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 content-1-grid">
                 <div class="content">

                     <div class="content-caption">
                       <img class="caption" src="<?php the_sub_field('ib_icon');?>" alt="">
                       <h3 class="caption"><?php the_sub_field('ib_title');?></h3>
                     </div>

                     <div class="content-overlay"></div>
                     <img class="content-image" src="<?php the_sub_field('ib_image');?>" alt="<?php echo esc_attr($ib_image['alt']); ?>">
                     <div class="content-details fadeIn-top">
                       <p><?php the_sub_field('ib_desc');?></p>
                       <br>
                         <a href="<?php echo esc_url($ib_button); ?>" data-hover-border-color="#fff" class="ib-button">SEE MORE</a>
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
.interactive-banners{
  padding: 0;
}
.content {max-height: 500px;}
.content-1-grid {
  margin-bottom: 0;
  position: relative;
  position: relative;
  height: 346px;
  padding: 0;
}
.content-1-grid .content {
  position: relative;
  max-width: 100%;
  margin: auto;
  overflow: hidden;
  max-height: 100%;
  height: 100%;
}
.content:hover .content-overlay {
  opacity: 1;
}
.content-details {
  opacity: 0;
}
.content-caption{
  opacity: 1;
  z-index: 100;
}
.content:hover .content-details {
  top: 50%;
  left: 50%;
  opacity: 1;
}
.content .content-caption img.caption {max-height: 70px;max-width: 70px;}
.content .content-caption {
  position: absolute;
}
.content .content-caption,
.content .content-caption img.caption,
.content .content-caption h3.caption {
  opacity: 1;
  z-index: 99;
  color: #fff;
}
.content:hover .content-caption,
.content:hover .content-caption img.caption,
.content:hover .content-caption h3.caption {
  opacity: 0;
  z-index: 0;
  -webkit-transition: all 0.1s ease-in-out 0s;
	-moz-transition: all 0.1s ease-in-out 0s;
	transition: all 0.1s ease-in-out 0s;
}
.content-caption img.caption{
  margin-bottom: 5%;
}
.content-details a {
  text-decoration:none;
}
.content-overlay {
	background: rgba(61, 61, 61, 0.65);
  position: absolute;
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  opacity: 1;
  -webkit-transition: all 1s ease-in-out 0s;
  -moz-transition: all 1s ease-in-out 0s;
  transition: all 1s ease-in-out 0s;
}
.content-1-grid .content img.content-image {
      position: relative;
      display: block;
      object-fit: cover;
      height: 100%!important;
      width:100%;
      height:auto;
}
@media only and (max-width:1024px){
  .content-1-grid .content img.content-image {
  width: auto;
  }
}
.fadeIn-top {
	top:20%;
}
.content-details,
.content-caption {
  color:#fff;
	position: absolute;
	text-align: center;
	padding-left: 1em;
	padding-right: 1em;
	width: 100%;
	top: 50%;
	left: 50%;
	-webkit-transform: translate(-50%, -50%);
	-moz-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	-webkit-transition: all 1s ease-in-out 0s;
	-moz-transition: all 1s ease-in-out 0s;
	transition: all 1s ease-in-out 0s;
}
.content-details h3 {
	color:#fff;
	font-weight: 500;
	letter-spacing: 0.15em;
	margin-bottom: 0px;
	text-transform: uppercase;
	font-size: 52px;
	text-align: center;
	z-index: 100;
	line-height: 42px;
}
.content-details a.ib-button{
  z-index:100;
  color: rgb(255, 255, 255);
  border-color: rgb(255, 255, 255);
  border-radius: 12px;
  border-style: solid;
  padding: 12px 20px;
  font-weight: 600;
  height:38px;
  text-transform: capitalize!important;
}
.content-details a.ib-button:hover{
  z-index:100;
  color: rgb(255, 255, 255);
  border-color: <?php echo $primary;?>;
  background-color:<?php echo $primary;?>;
  border-radius: 12px;
  border-style: solid;
  padding: 12px 20px;
  font-weight: 600;
  text-transform: capitalize!important;
  -webkit-transition: all 0.3s ease-in-out 0s;
	-moz-transition: all 0.3s ease-in-out 0s;
	transition: all 0.3s ease-in-out 0s;
}

</style>
