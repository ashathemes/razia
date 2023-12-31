<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Razia
 */
get_header();
?>
			<div class="col-lg-9">
				<div class="right-part">
					<div class="archive-title">
						<?php
							the_archive_title( '<h2>', '</h2>' );
							the_archive_description( '<div class="archive-description">', '</div>' );
						?>
					</div>
					<div class="row masonry-post">
					<?php if ( have_posts() ) : ?>
						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
							 * Include the Post-Type-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_type() );

						endwhile;?>
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
