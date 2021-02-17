<?php
    $flexible_content_main = get_sub_field('right_column')['flexible_content_main'];
    $right_column = get_sub_field('right_column')['main_content'];

    echo '<div class="flex-two-column-wrap clearfix">';
    
        echo '<div class="flex-column side-bar">';
            echo '<div class="flexible-content-wrap clearfix">';
                echo '<section class="flexible-content row-side-bar-menu-01 row-index-1">';
                    include(get_stylesheet_directory() . "/template-parts/flexible-content-modules/side-bar-menu-01.php");
                echo '</section>';
            echo '</div>';
        echo '</div>';

        echo '<div class="flex-column main-bar viewport_check viewport_check_slideInRight">';

            if ( $flexible_content_main != 1 ):
                if ( $right_column ):
                    $postObject = $right_column;
                    include(get_stylesheet_directory() . "/template-parts/flexible-content/get-postobject-flexible-content.php");
                endif;
            endif;

            echo '<div class="flexible-content-wrap clearfix">';
                // GET ACF FLEXIBLE ROWS
                $flexIndex = 1;
                $module_name = get_field('show_module_name_and_code', 'option');

                $show_module_name = 'hide';
                if ( $module_name == 1 ) {
                    $show_module_name = 'show';
                }
                
                if (have_rows( 'content_flexible_content' )) :
                    while (have_rows( 'content_flexible_content' )) : the_row();

                        echo '<section class="flexible-content row-'.get_row_layout().' row-index-'.$flexIndex.'">';

                            echo '<div class="module-name '. $show_module_name .'">';
                                echo 'Module Code: '. get_row_layout();
                            echo '</div>';

                            // if ( $anchor_tag != '' ) {
                            //     echo '<div class="anchorLink" id="'.$anchor_tag.'"></div>';
                            // }

                            $file = get_stylesheet_directory() . "/template-parts/flexible-content-modules/" . get_row_layout() . ".php";
                            include($file);

                        echo '</section>';

                        $flexIndex++;

                    endwhile;
                endif;
            
                $flex_name = false;

                // IMPORTANT - reset the $post object so the rest of the page works correctly
                wp_reset_postdata(); 
            echo '</div>';

        echo '</div>';
    echo '</div>';