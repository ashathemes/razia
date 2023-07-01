<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Razia
 */
get_header();
?>

				<div class="col-lg-9">
					<div class="right-part">
						<div class="page-title">
							<h2><?php
								/* translators: %s: search query. */
								printf( esc_html__( 'Search Results for: %s', 'razia' ), '<span>' . get_search_query() . '</span>' );
							?></h2>
						</div>
						<div class="row masonry-post">
							<?php if ( have_posts() ) : ?>

								<?php
								/* Start the Loop */
								while ( have_posts() ) :
									the_post();

									/**
									 * Run the loop for the search to output the results.
									 * If you want to overload this in a child theme then include a file
									 * called content-search.php and that will be used instead.
									 */
									get_template_part( 'template-parts/content', 'search' );

							endwhile; ?>
						</div>
						<?php

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
get_footer();
