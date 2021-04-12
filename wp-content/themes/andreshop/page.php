<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fancy Lab
 */

get_header();
?>
		<div class="content-area">
			<main>
				<div class="container">
					<div class="row">
						<?php 
							// Load posts loop
							while( have_posts() ): the_post();
								get_template_part( 'template-parts/content', 'page');
							
							endwhile;
						?>
		
					</div>
				</div>
			</main>
		</div>
<?php get_footer(); ?>