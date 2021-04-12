<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package andreshop
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="page" class="site">
        <header>
            <section class="search">
                <div class="container">
                    <div class="text-center d-md-flex align-items-center">
                      <?php get_search_form(); ?>
                    </div>
                </div>
            </section>
            <section class="top-bar">
                <div class="container">
                    <div class="row">
                    <div class="brand col-md-3 col-12 col-lg-2 text-center text-md-left">
                        <a href="<?php echo home_url('/'); ?>">
                            <?php if(has_custom_logo()): ?>
                            <?php the_custom_logo(); ?>
                            <?php else: ?>
                                <p class="site-title"><?php bloginfo('title') ?></p>
                                <span><?php bloginfo('description'); ?></span>
                            <?php endif; ?>
                        </a>                     
                    </div>
                    <div class="second-column col-md-9 col-12 col-lg-10">

                    <div class="row">
                        <?php if(class_exists( 'WooCommerce' ) ): ?>
                        <div class="account col-12">
                            <div class="navbar-expand">
                                <ul class="navbar-nav float-left">
                                    <?php if( is_user_logged_in() ): ?>
                                        <li>
                                            <a href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id') ) ); ?>" class="nav-link">My account</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo esc_url( wp_logout_url( get_permalink( get_option( 'woocommerce_myaccount_page_id') ) ) ) ?>" class="nav-link">Log out</a>
                                        </li>
                                    <?php else: ?>
                                        <li>
                                            <a href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id') ) ); ?>" class="nav-link">Register</a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>

                            <div class="cart text-right">
                                <a href="<?php echo wc_get_cart_url(); ?>"><span class="cart-icon"></span></a>
                                <span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                            </div>
                        </div> 
                            <?php endif;?>
                            <div class="col-12">
                              <nav class="main-menu navbar navbar-expand-md navbar-light" role="navigation">
        
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                    <?php
                                    wp_nav_menu( array(
                                        'theme_location'    => 'andre_shop_main_menu',
                                        'depth'             => 3,
                                        'container'         => 'div',
                                        'container_class'   => 'collapse navbar-collapse',
                                        'container_id'      => 'bs-example-navbar-collapse-1',
                                        'menu_class'        => 'nav navbar-nav',
                                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                        'walker'            => new WP_Bootstrap_Navwalker(),
                                    ) );
                                    ?>                      
                            </nav>
                            </div>  
                        </div>
                        </div>
                    </div>
                </div>              
            </section>
        </header>


















