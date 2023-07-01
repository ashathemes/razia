<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Razia
 */

get_header();
?>
			<div class="col-lg-9 text-center">
				<div class="right-part">
					<div class="error-title">
						<h2><?php esc_html_e('404 Error Page','razia'); ?></h2>
					</div>
					<h2><?php esc_html_e('Page not found!','razia'); ?></h2>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button error"><?php esc_html_e('Back To Home','razia'); ?></a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
get_footer();
