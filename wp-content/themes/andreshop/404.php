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
                    <h1>Page not found</h1>
                    <p>Unfortunately, the page is not found</p>
                </header>
                <?php 
                    the_widget( 'WP_Widget_Recent_Posts', 
                        array(
                            'title'     => 'Take a look at our Latest Post',
                            'number'    => 3,
                    ) );
                ?>
            </div>
        </div>
    </main>
</div>

<?php get_footer(); ?>