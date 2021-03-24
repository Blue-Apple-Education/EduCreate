<?php
    $title = get_sub_field('title');
    $calendar_list_type = get_sub_field('calendar_list_type');
    $number_of_dates = get_sub_field('number_of_dates');
    $hide_search = get_sub_field('hide_search');
    $hide_calendar_navigation = get_sub_field('hide_calendar_navigation');
    $navigation_options = 'show_options';
    if ($hide_calendar_navigation == 1) {
        $navigation_options = 'hide_options';
    } ?>

    <?php if ($title) { ?>
        <div class="col-lg-12 col-md-12 col-sm-12 calendar-title">
          <h2><?php echo $title;?></h2>
        </div>
    <?php } ?>

    <?php if ($hide_search != 1) { ?>
        <div class="calendar-search">
          <div class="container clearfix">
            <div class="search-wrapper">
              <?php echo do_shortcode('[add_eventon_search number_of_months="2" search_all="yes"]');?>
            </div>
          </div>
        </div>
    <?php } ?>

    <div style="background-color: <?php echo $background_colours_basic;?>" class="calendar-grid <?php echo $navigation_options;?> tiles-show-<?php echo $number_of_dates;?>">
        <div class="container">
        <?php if ($calendar_list_type == 'list') { ?>
                <?php echo do_shortcode('[add_eventon event_count="<?php echo $number_of_dates ;?>"]');
            } elseif ($calendar_list_type == 'tile') { ?>
                <?php echo do_shortcode('[add_eventon tiles="yes" exp_so="no" hide_so="yes" event_count="<?php echo $number_of_dates;?>" tile_height="250"]');?>
          <?php } ?>
        </div>
      </div>

<style>
.calendar-title{
  text-align: center;
  padding: 0 0 50px 0;
}
.calendar-title h2{
  color: #191919 !important;
  font-size: 46px;
}
.calendar{
  padding:100px 0;
}
.eventon_list_event{
  opacity:1!important;
}
.eventon_events_list .eventon_list_event .evcal_cblock em{
  color:#fff;
}
</style>
