<?php
function andre_shop_wc_modify(){
    // Modifing WooCommerce opening and closing HTML
    add_action( 'woocommerce_before_main_content', 'andre_shop_open_container_row', 5 );
    function andre_shop_open_container_row(){
    echo '<div class="container shop-content"><div class="row">'; 
    }

    add_action( 'woocommerce_after_main_content', 'andre_shop_close_container_row', 5);
    function andre_shop_close_container_row(){
    echo '<div></div>';
    }

    remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar');

    // change only products shop page
    if(is_shop()) {

        add_action( 'woocommerce_before_main_content', 'andre_shop_add_sidebar_tags', 6);
      function andre_shop_add_sidebar_tags(){
        echo '<div class="sidebar-shop col-lg-3 col-md-4 order-2 order-md-1">';
      }

      add_action( 'woocommerce_before_main_content', 'woocommerce_get_sidebar', 7 );

      add_action( 'woocommerce_before_main_content', 'andre_shop_close_sidebar_tags', 8);
      function andre_shop_close_sidebar_tags(){
          echo '</div>';
      }
      add_action( 'woocommerce_after_shop_loop_item_title', 'the_excerpt', 1);
    }

    add_action( 'woocommerce_before_main_content', 'andre_shop_add_shop_tags', 9);
    function andre_shop_add_shop_tags(){
        if( is_shop()){
            echo '<div class="col-lg-9 col-md-8 order-1 order-md-2">';
        } else {
            echo '<div class="col">';
        }
    }

    add_action( 'woocommerce_after_main_content', 'andre_shop_close_shop_tags', 4);
    function andre_shop_close_shop_tags(){
        echo '</div>';
    }

    // remove products page title(shop)
    /*add_filter('woocommerce_show_page_title', 'andre_shop_remove_shop_title');
    function andre_shop_remove_shop_title($val){
        $val = false;
        return $val;
    }*/
}
add_action('wp', 'andre_shop_wc_modify');

