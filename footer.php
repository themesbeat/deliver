<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package deliver
 */

?>

	</div><!-- #content -->

	<footer id="footer" class="site-footer" >
		<div class="widgets-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<?php
		                if(is_active_sidebar('footer-area-1')){
		                dynamic_sidebar('footer-area-1');
		                }
		                ?>
					</div>
					<div class="col-sm-4">
						<?php
		                if(is_active_sidebar('footer-area-2')){
		                dynamic_sidebar('footer-area-2');
		                }
		                ?>
					</div>
					<div class="col-sm-4">
						<?php
		                if(is_active_sidebar('footer-area-3')){
		                dynamic_sidebar('footer-area-3');
		                }
		                ?>
					</div>	
				</div>		
			</div><!-- .continer -->
		</div>
		<div class="bottom-band">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 copy-info">
						© <a href="#">Deliver</a>
						All Rights Reserved <?php echo date("Y"); ?> - Powered By
						<a href="http://wordpress.org">WordPress</a>
					</div>
					<div class="col-sm-8 extra-info">
						<?php if (has_nav_menu('footer')) {
							  wp_nav_menu( array(
							      'theme_location' => 'footer',      
							      'menu_id' 		=> 'footer',
							      'container_class' => 'footer-menu',
							      'fallback_cb' => 'wp_page_menu',
							  ) );
							} 
						?>						
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
