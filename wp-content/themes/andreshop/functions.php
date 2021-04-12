<?php

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


function andre_shop_scripts(){
    //Boostrap javascript and css files
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array( 'jquery'),  '4.5.2', true);
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.5.2', 'all');

    // Theme's main stylesheet
    wp_enqueue_style( 'andre-shop-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all' );

    // Google Fonts
    wp_enqueue_style( 'google-fonts', "https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap|https://fonts.googleapis.com/css2?family=Seaweed+Script&display=swap");
}
add_action('wp_enqueue_scripts', 'andre_shop_scripts');

function andre_shop_config(){
    register_nav_menus(
        array(
            'andre_shop_main_menu' => 'Andre Shop Main Menu',
            'andre_shop_footer_menu' => 'Andre Shop Footer Menu'
        )
    );
    // add compatibility to woocommerce 
    add_theme_support('woocommerce', array(
        'thumbnail_image_width' => 255,
        'single_image_width' => 255,
        'product_grid' => array(
            'default_rows'    => 10,
            'min_rows'        => 5,
            'max-rows'        => 10,
            'default_columns' => 1,
            'min_columns'     => 1,
            'max_columns'     => 1
        )
    )); 
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');

    add_theme_support('custom-logo', array(
        'height'            => 85,
        'width'             => 160,
        'flex_heigth'       => true,
        'flex_width'        => true,
    ));

    if ( ! isset( $content_width ) ) {
        $content_width = 600;
    }
    
}
add_action('after_setup_theme', 'andre_shop_config', 0);

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'andre_shop_woocommerce_header_add_to_cart_fragment' );

function andre_shop_woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
	<?php
	$fragments['span.items'] = ob_get_clean();
	return $fragments;
}


if(class_exists('Woocommerce')){
    //call wc-modifications.php 
require get_template_directory() . '/inc/wc-modifications.php';
}
