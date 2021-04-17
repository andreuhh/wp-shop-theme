<?php 

/*
Template Name: Home Page
*/

get_header(); 
?>

<div class="content-area">
    <main>
        <div class="container">
            <div class="error-404">
                <header>
                    <h1><?php esc_html_e('Page not found', 'fancy-lab');?></h1>
                    <p><?php esc_html_e('Unfortunately, the page is not found', 'fancy-lab');?></p>
                </header>
                <?php 
                    the_widget( 'WP_Widget_Recent_Posts', 
                        array(
                            'title'     => esc_html__('Take a look at our Latest Post', 'fancy-lab'),
                            'number'    => 3,
                    ) );
                ?>
            </div>
        </div>
    </main>
</div>

<?php get_footer(); ?>