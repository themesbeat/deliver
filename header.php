<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package deliver
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'deliver' ); ?></a>

	<header id="header" class="site-header" role="banner">
		<div class="header-content container clearfix">
			<div class="site-branding col-sm-3">	
					<a class="logo" href="#">
					<?php
					if (get_theme_mod( 'site_logo' )) { ?>
						<img src="<?php echo get_theme_mod( 'site_logo' ); ?>" alt="">
					<?php
					} else { ?>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="">
					<?php } ?>
					
					
					</a>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation col-sm-9" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'deliver' ); ?></button>
				<?php if (has_nav_menu('primary')) {
					  wp_nav_menu( array(
					      'theme_location' => 'primary-menu',      
					      'menu_id' 		=> 'primary-menu',
					      'fallback_cb' => 'wp_page_menu',
					  ) );
					} 
				?>
				
			</nav><!-- #site-navigation -->
		</div><!-- .header-content -->
		<?php if (get_theme_mod( 'show_header_section' )) { ?>
		<div class = "header-banner">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
					<h2><span class="banner-heading">
						<?php echo get_theme_mod( 'banner_heading', 'We Deliver nothing Short of Awesome! ' ); ?>	
						</span></h2>			
						<h3><span class="banner-subheading">
						<?php
							echo get_theme_mod( 'banner_sub_heading', 'Check out our portfolio to see our great work. ' ); ?>
							</span></h3>
						<div class="banner-button">	
							<a class="header-button" href="<?php echo get_theme_mod( 'button_link', '#' ); ?>" title="<?php echo get_theme_mod( 'button_text','Our Portfolio' ); ?>"><?php echo get_theme_mod( 'button_text','Our Portfilio' ); ?></a>	
						</div>
					</div>
				</div>				
			</div><!-- .container -->
		</div> <!-- .header-banner -->
		<?php } ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
