<?php
/**
 * The search template file
 *
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

                      <h1>Search result for: <?php echo get_search_query(); ?></h1>

                        <?php 
                            get_search_form();

							// If there are any posts
							if( have_posts() ):

								// Load posts loop
								while( have_posts() ): the_post();
                                    get_template_part('template-parts/content', 'search');    
                                
								endwhile;
								the_posts_pagination(array(
									'prev_text'		=> 'Previous',
									'next_text'		=>  'Next',
								));								
							else:
						?>
							<p>trere are no results for your query.</p>
						<?php endif; ?>
					</div>
				</div>
			</main>
		</div>
<?php get_footer(); ?>