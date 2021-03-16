<?php


// Navigation Menus
if (function_exists('register_nav_menus')) {
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu', 'EduCreate'),
            'modal-menu' => __('mobile Modal menu', 'EduCreate'),
            'off-canvas-menu' => __('offCanvas menu', 'EduCreate'),
            'footer-menu' => __('Footer Menu', 'EduCreate'),
        )
    );
}

/*
  * ADD CLASSES TO MENU
  */
function my_menu_class($menu) {
  $level = 0;
  $stack = array('0');
  foreach($menu as $key => $item) {
    while($item->menu_item_parent != array_pop($stack)) {
      $level--;
    }
    $level++;
    $stack[] = $item->menu_item_parent;
    $stack[] = $item->ID;
    $menu[$key]->classes[] = 'level-'. ($level - 1);
  }
  return $menu;
}
add_filter('wp_nav_menu_objects' , 'my_menu_class');
?>
