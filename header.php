<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Razia
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
	if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	}
	else { do_action( 'wp_body_open' ); 
	}
?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'razia' ); ?></a>
	<div class="full-site">
		<div class="container-fluid">
			<div class="top-header text-center">
				<div class="row">
					<div class="col-lg-12">
						<header id="masthead" class="header-area <?php if(has_header_image() && is_front_page()): ?>razia-header-img<?php endif; ?>">
							<?php if(has_header_image() && is_front_page()): ?>
						        <div class="header-img"> 
						        	<?php the_header_image_tag(); ?>
						        </div>
					        <?php endif; ?>
							<div class="site-branding">
								<?php
								the_custom_logo();
								if ( is_front_page() && is_home() ) :
									?>
									<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
									<?php
								else :
									?>
									<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
									<?php
								endif;
								$razia_description = get_bloginfo( 'description', 'display' );
								if ( $razia_description || is_customize_preview() ) :
									?>
									<p class="site-description"><?php echo esc_html($razia_description); ?></p>
								<?php endif; ?>
							</div>
						</header><!-- #masthead -->
						<div class="top-menu-area">
							<div class="razia-responsive-menu"></div>
							<button class="screen-reader-text menu-close"><?php esc_html_e( 'Close Menu', 'razia' ); ?></button>
							<div class="mainmenu">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									) );
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<div class="left-part">
						<header id="masthead" class="header-area <?php if(has_header_image() && is_front_page()): ?>razia-header-img<?php endif; ?>">
						<?php if(has_header_image() && is_front_page()): ?>
					        <div class="header-img"> 
					        	<?php the_header_image_tag(); ?>
					        </div>
				        <?php endif; ?>
						<div class="site-branding">
							<?php
							the_custom_logo();
							if ( is_front_page() && is_home() ) :
								?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php
							else :
								?>
								<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
								<?php
							endif;
							$razia_description = get_bloginfo( 'description', 'display' );
							if ( $razia_description || is_customize_preview() ) :
								?>
								<p class="site-description"><?php echo esc_html($razia_description); ?></p>
							<?php endif; ?>
						</div>
					</header><!-- #masthead -->
					<div class="menu-area">
						<div class="mainmenu">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								) );
							?>
						</div>
					</div>
					<div class="copyright">
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'razia' ) ); ?>">
							<?php
							/* translators: %s: CMS name, i.e. WordPress. */
							printf( esc_html__( 'Proudly powered by %s', 'razia' ), 'WordPress' );
							?>
						</a>
						<p><?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Theme: %1$s by %2$s.', 'razia' ), 'razia', 'ashathemes' );
						?></p>
					</div>
				</div>
			</div>
			