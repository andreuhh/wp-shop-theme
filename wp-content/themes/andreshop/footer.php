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

<footer>
            <section class="footer-widgets">
                <div class="container">
                    <div class="row">Foooter Widgets</div>
                </div>
            </section>
            <section class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="copyright-text col12 col-md-6">Copyright</div>
                        <nav class="footer-menu col-12 col-md-6 text-left text-md-right">
                            <?php 
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'andre_shop_footer_menu'
                                    )
                                )
                            ?>
                        </nav>
                    </div>
                </div>
            </section>
        </footer>
        <?php wp_footer(); ?>
    </div>
</body>
</html>