<?php
/**
 * The front page template for the theme
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package deliver
 */

get_header(); ?>

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php if (get_theme_mod( 'show_about_section' )) { ?>
			<section id="about" class="about">
				<div class="container">
					<div class="section-header">
					
						<h1 class="section-heading">
						<?php echo get_theme_mod( 'about_title' ) ?>
						</h1>


						<p><?php echo get_theme_mod( 'about_sub_title' ) ?></p>
					</div>
					<div class="section-content">
						<div class="icon-box col-sm-3">
							<div class="icon">
								<i class="fa <?php echo get_theme_mod( 'icon1_name', 'fa-html5' ) ?>" aria-hidden="true"></i>
							</div>
							<h3 class="icon-heading">
								<?php echo get_theme_mod( 'icon1_heading', 'Modern & Unique' ) ?>
							</h3>
							<p><?php echo get_theme_mod( 'icon1_text', 'Phasellus varius commodo ipsum at maximus. Duis nec dignissim ante. Aliquam fermentum.' ) ?></p>
						</div>
						<div class="icon-box col-sm-3">
							<div class="icon">
								<i class="fa <?php echo get_theme_mod( 'icon2_name', 'fa-thumbs-o-up' ) ?>" ></i>
							</div>
							<h3 class="icon-heading">
								<?php echo get_theme_mod( 'icon2_heading', 'High Quality' ) ?>
							</h3>
							<p><?php echo get_theme_mod( 'icon2_text', 'Phasellus varius commodo ipsum at maximus. Duis nec dignissim ante. Aliquam fermentum.' ) ?></p>

						</div>
						<div class="icon-box col-sm-3">
							<div class="icon">
								<i class="fa <?php echo get_theme_mod( 'icon3_name', 'fa-tablet' ) ?>" ></i>
							</div>
							<h3 class="icon-heading">
								<?php echo get_theme_mod( 'icon3_heading', 'Ultra Responsive' ) ?>
							</h3>
							<p><?php echo get_theme_mod( 'icon3_text', 'Phasellus varius commodo ipsum at maximus. Duis nec dignissim ante. Aliquam fermentum.' ) ?></p>
						</div>
						<div class="icon-box col-sm-3">
							<div class="icon">
								<i class="fa <?php echo get_theme_mod( 'icon4_name','fa-star-o' ) ?>" ></i>
							</div>
							<h3 class="icon-heading">
								<?php echo get_theme_mod( 'icon4_heading','Free Updates ' ) ?>
							</h3>
							<p><?php echo get_theme_mod( 'icon4_text', 'Phasellus varius commodo ipsum at maximus. Duis nec dignissim ante. Aliquam fermentum.' ) ?></p>
						</div>
					</div>
				</div>
			</section>
		<?php } ?>
			<section id="services" class="our-services">
				<div class="container">
					
					<div class="section-header">
						<h1 class="section-main-heading">Our Services</h1>
					</div>
					<div class="section-content">
						<div class="services-row">
							<div class="service-box col-sm-4">
								<div class="icon-box">	
									<div class="icon-left">
										<i class="fa fa-bar-chart" aria-hidden="true"></i>
									</div>
									<div class="icon-content">
										<h3 class="icon-left-heading">
										Modern & Unique
									</h3>
									<p class="icon-left-content">Phasellus varius commodo ipsum at maximus. Duis nec dignissim ante. Aliquam fermentum.</p>
									</div>
								</div>
							</div>

							<div class="service-box col-sm-4">
								<div class="icon-box">	
									<div class="icon-left">
										<i class="fa fa-bar-chart" aria-hidden="true"></i>
									</div>
									<div class="icon-content">
										<h3 class="icon-left-heading">
										Modern & Unique
									</h3>
									<p class="icon-left-content">Phasellus varius commodo ipsum at maximus. Duis nec dignissim ante. Aliquam fermentum.</p>
									</div>
								</div>
							</div>

							<div class="service-box col-sm-4">
								<div class="icon-box">	
									<div class="icon-left">
										<i class="fa fa-bar-chart" aria-hidden="true"></i>
									</div>
									<div class="icon-content">
										<h3 class="icon-left-heading">
										Modern & Unique
									</h3>
									<p class="icon-left-content">Phasellus varius commodo ipsum at maximus. Duis nec dignissim ante. Aliquam fermentum.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="services-row">
							<div class="service-box col-sm-4">
								<div class="icon-box">	
									<div class="icon-left">
										<i class="fa fa-bar-chart" aria-hidden="true"></i>
									</div>
									<div class="icon-content">
										<h3 class="icon-left-heading">
										Modern & Unique
									</h3>
									<p class="icon-left-content">Phasellus varius commodo ipsum at maximus. Duis nec dignissim ante. Aliquam fermentum.</p>
									</div>
								</div>
							</div>

							<div class="service-box col-sm-4">
								<div class="icon-box">	
									<div class="icon-left">
										<i class="fa fa-bar-chart" aria-hidden="true"></i>
									</div>
									<div class="icon-content">
										<h3 class="icon-left-heading">
										Modern & Unique
									</h3>
									<p class="icon-left-content">Phasellus varius commodo ipsum at maximus. Duis nec dignissim ante. Aliquam fermentum.</p>
									</div>
								</div>
							</div>

							<div class="service-box col-sm-4">
								<div class="icon-box">	
									<div class="icon-left">
										<i class="fa fa-bar-chart" aria-hidden="true"></i>
									</div>
									<div class="icon-content">
										<h3 class="icon-left-heading">
										Modern & Unique
									</h3>
									<p class="icon-left-content">Phasellus varius commodo ipsum at maximus. Duis nec dignissim ante. Aliquam fermentum.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="services-row">
							<div class="service-box col-sm-4">
								<div class="icon-box">	
									<div class="icon-left">
										<i class="fa fa-bar-chart" aria-hidden="true"></i>
									</div>
									<div class="icon-content">
										<h3 class="icon-left-heading">
										Modern & Unique
									</h3>
									<p class="icon-left-content">Phasellus varius commodo ipsum at maximus. Duis nec dignissim ante. Aliquam fermentum.</p>
									</div>
								</div>
							</div>

							<div class="service-box col-sm-4">
								<div class="icon-box">	
									<div class="icon-left">
										<i class="fa fa-bar-chart" aria-hidden="true"></i>
									</div>
									<div class="icon-content">
										<h3 class="icon-left-heading">
										Modern & Unique
									</h3>
									<p class="icon-left-content">Phasellus varius commodo ipsum at maximus. Duis nec dignissim ante. Aliquam fermentum.</p>
									</div>
								</div>
							</div>

							<div class="service-box col-sm-4">
								<div class="icon-box">	
									<div class="icon-left">
										<i class="fa fa-bar-chart" aria-hidden="true"></i>
									</div>
									<div class="icon-content">
										<h3 class="icon-left-heading">
										Modern & Unique
									</h3>
									<p class="icon-left-content">Phasellus varius commodo ipsum at maximus. Duis nec dignissim ante. Aliquam fermentum.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section><!-- #services -->

			<div id="portfolio" class="our-portfolio">
				<div class="container">
					<div class="section-header">
						<h1 class="section-main-heading">Our Portfolio</h1>
					</div>
					<div class="section-content">
						<div class="portfolio-row">
							<div class="portfolio-box col-sm-3">
								<a class="group1" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/work-1.jpg" title="Me and my grandfather on the Ohoopee.">

									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/work-1.jpg" />

								</a>
							</div>
							<div class="portfolio-box col-sm-3">
								<a class="group1" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/work-2.jpg" title="Me and my grandfather on the Ohoopee." >
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/work-2.jpg" />
								</a>
							</div>
							<div class="portfolio-box col-sm-3">
								<a class="group1" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/work-3.jpg" title="Me and my grandfather on the Ohoopee." >
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/work-3.jpg" />
								</a>
							</div>
							<div class="portfolio-box col-sm-3">
								<a class="group1" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/work-4.jpg" title="Me and my grandfather on the Ohoopee." >
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/work-4.jpg" />
								</a>
							</div>
						</div>
						<div class="portfolio-row">
							<div class="portfolio-box col-sm-3">
								<a class="group1" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/work-5.jpg" title="Me and my grandfather on the Ohoopee." >
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/work-5.jpg" />
								</a>
							</div>
							<div class="portfolio-box col-sm-3">
								<a class="group1" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/work-6.jpg" title="Me and my grandfather on the Ohoopee." >
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/work-6.jpg" />
								</a>
							</div>
							<div class="portfolio-box col-sm-3">
								<a class="group1" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/work-7.jpg" title="Me and my grandfather on the Ohoopee." >
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/work-7.jpg" />
								</a>
							</div>
							<div class="portfolio-box col-sm-3">
								<a class="group1" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/work-8.jpg" title="Me and my grandfather on the Ohoopee." >
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/work-8.jpg" />
								</a>
							</div>
						</div>					
					</div>
				</div>
			</div><!-- #portfolio -->

			<section id="testimonials" class="testimonials">

				<div class="container">
					<div class="section-header">
						<h1 class="section-main-heading">Testimonials</h1>
					</div>
					<div class="section-content">
						<ul class="bxslider">
						  <li>
						  	<div class="client-image">
								<img class="img-responsive img-circle" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/client1.jpg">
							</div>
							<div class="quote">Consecetur adipiscing donec ipsum, loboris convallis rutrum culis. Aliquam vitae odio elit nullam condimentum varius. Consecetur adipiscing donec ipsum, loboris.</div>
							<div class="client-name">Jack Black - Web Designer </div>					


						  </li>

						  <li>
						  	<div class="client-image">
								<img class="img-responsive img-circle" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/client2.jpg">
							</div>
							<div class="quote">Consecetur adipiscing donec ipsum, loboris convallis rutrum culis. Aliquam vitae odio elit nullam condimentum varius. Consecetur adipiscing donec ipsum, loboris.</div>
							<div class="client-name">Jack Black - Web Designer </div>					


						  </li>
						  <li>
						  	<div class="client-image">
								<img class="img-responsive img-circle" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/client3.jpg">
							</div>
							<div class="quote">Consecetur adipiscing donec ipsum, loboris convallis rutrum culis. Aliquam vitae odio elit nullam condimentum varius. Consecetur adipiscing donec ipsum, loboris.</div>
							<div class="client-name">Jack Black - Web Designer </div>					


						  </li>
						 <li>
						  	<div class="client-image">
								<img class="img-responsive img-circle" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/client4.jpg">
							</div>
							<div class="quote">Consecetur adipiscing donec ipsum, loboris convallis rutrum culis. Aliquam vitae odio elit nullam condimentum varius. Consecetur adipiscing donec ipsum, loboris.</div>
							<div class="client-name">Jack Black - Web Designer </div>					


						  </li>
						</ul>
					</div>
				</div>
			</section><!-- #testimonials -->

			<section id="team-members" class="team-members">
				<div class="container">
					<div class="section-header">
						<h1 class="section-main-heading">Team Members</h1>
					</div>
					<div class="section-content">
						<div class="team-member col-sm-4">
							<div class="profile-header">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team-members/team-member-1.jpg" alt="#"> 
							</div>		
							<div class="profile-content">
								<h3>BRIAN STRATTOR</h3>
								<p class="position">Founder</p>				
							</div>	
							<div class="member_details">	
								<p>Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis.</p>
							</div>
							<div class="social">					
								<a href=" # " style="color:#02918c">
				              		<i class="fa fa-facebook fa-2x"></i>
				              	</a>
				              	<a href=" # " style="color:#02918c">
				              		<i class="fa fa-twitter fa-2x"></i>
				              	</a>
				              	<a href=" # " style="color:#02918c">
				              		<i class="fa fa-linkedin fa-2x"></i>
				              	</a>
				              	<a href=" # " style="color:#02918c">
				              		<i class="fa fa-vimeo fa-2x"></i>
				              	</a>
				              	<a href=" # " style="color:#02918c">
				              		<i class="fa fa-youtube fa-2x"></i>
				              	</a>
							</div>			
						</div>

						<div class="team-member col-sm-4">
							<div class="profile-header">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team-members/team-member-2.jpg" alt="#"> 
							</div>		
							<div class="profile-content">
								<h3>BRIAN STRATTOR</h3>
								<p class="position">Founder</p>				
							</div>	
							<div class="member_details">	
								<p>Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis.</p>
							</div>
							<div class="social">					
								<a href=" # " style="color:#02918c">
				              		<i class="fa fa-facebook fa-2x"></i>
				              	</a>
				              	<a href=" # " style="color:#02918c">
				              		<i class="fa fa-twitter fa-2x"></i>
				              	</a>
				              	<a href=" # " style="color:#02918c">
				              		<i class="fa fa-linkedin fa-2x"></i>
				              	</a>
				              	<a href=" # " style="color:#02918c">
				              		<i class="fa fa-vimeo fa-2x"></i>
				              	</a>
				              	<a href=" # " style="color:#02918c">
				              		<i class="fa fa-youtube fa-2x"></i>
				              	</a>
							</div>			
						</div>

						<div class="team-member col-sm-4">
							<div class="profile-header">		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team-members/team-member-3.jpg" alt="#"> 
							</div>		
							<div class="profile-content">
								<h3>BRIAN STRATTOR</h3>
								<p class="position">Founder</p>				
							</div>	
							<div class="member_details">	
								<p>Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis.</p>
							</div>
							<div class="social">					
								<a href=" # " style="color:#02918c">
				              		<i class="fa fa-facebook fa-2x"></i>
				              	</a>
				              	<a href=" # " style="color:#02918c">
				              		<i class="fa fa-twitter fa-2x"></i>
				              	</a>
				              	<a href=" # " style="color:#02918c">
				              		<i class="fa fa-linkedin fa-2x"></i>
				              	</a>
				              	<a href=" # " style="color:#02918c">
				              		<i class="fa fa-vimeo fa-2x"></i>
				              	</a>
				              	<a href=" # " style="color:#02918c">
				              		<i class="fa fa-youtube fa-2x"></i>
				              	</a>
							</div>			
						</div>
					</div>
				</div>
			</section><!-- #team-members -->

			<section id="our-blogs" class="our-blogs">
				<div class="container">
					<div class="section-header">
						<h1 class="section-main-heading">Our blogs</h1>
					</div>
					<div class="section-content">
						<?php
							global $post;
							$args = array( 'numberposts' => 3, 'order'=> 'ASC', 'orderby' => 'title' );
    						$myposts = get_posts( $args );
    						$comments_count = wp_count_comments();

    						if ($comments_count->approved == 0) {
    							$comments_count->approved = 'No';
    						} 

    					?>
    					<?php
    					foreach($myposts as $post) 
    						:setup_postdata($post); ?>
						<div style="background:#fff" class="col-sm-4 latest_post">
						    <div class="post-image">
						    	<?php the_post_thumbnail() ?>
						    </div>						    
						    <h1 class="post-name">
						    	<a 						    	href="<?php the_permalink() ?> "> 			<?php the_title(); ?>   
						    	</a>
						    </h1>
						    <h5 class="post-date">

						    <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i><?php the_time(get_option('date_format')); ?></span>
						    <span class="comments"><i class="fa fa-comments" aria-hidden="true"></i> <?php echo $comments_count->approved ." Comments";
							?></span></h5>
						    <div class="post-excerpt"><?php the_excerpt(); ?></div>
						     </div>
						<?php  
						    endforeach;
						?>
					</div>
				</div>
			</section><!-- #our-blogs -->

			<section id="contact" class="contact">
				<div class="container">
					<div class="section-header">
						<h1 class="section-main-heading">Contact Us</h1>
					</div>
					<div class="section-content">
						<div class="col-sm-4">
							<div class="address">
								<div class="contact-address">
								<h4 class="address-title">Address </h4>
								1600 Amphitheatre Parkway, Mountain View, CA 94043, United States</div>
							</div>
							<div class="address-phone">
								<div class="contact-phone">
								<h4 class="address-title">Phone </h4>
								<p>1+(999)-323-0202<br>
								1+(777)-444-6565 FAX
								</p></div>
							</div>
							<div class="address-hours">
								<div class="contact-hours">
								<h4 class="address-title">Hours </h4>
								<p>Mon-Fri 5am - 11pm<br>
								Sat-Sun 3am - 8am
								</p></div>
							</div>
						</div>
						<div class="col-sm-8">
						<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]');  ?> 
						</div>
					</div>
				</div>
			</section><!-- #contact -->
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

