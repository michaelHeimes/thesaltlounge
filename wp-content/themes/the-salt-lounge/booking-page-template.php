<?php
/**
 * Template Name: Booking
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Salt_Lounge
 */

get_header(); ?>

<script>
jQuery( document ).ready(function() {
	jQuery('span.bw-header__title').html("Find a Session");
});
</script>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div id="booking-intro" class="wrap-1000 shadowed">
				<?php
				while ( have_posts() ) : the_post();
	
					get_template_part( 'template-parts/content', 'page' );
	
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
	
				endwhile; // End of the loop.
				?>
			</div>
			
			<div id="gift-card-wrap">
				<h3>Gift Cards are available</h3>
				<a href="<?php the_field('gift_card_link');?>" target="_blank">Buy Now</a>
			</div>
					
<!--
			<div id="mb-btn-wrap">			
				<iframe id="getOurApp" scrolling="no" allowtransparency="true" src="https://clients.mindbodyonline.com/connect/appbutton?siteID=558506&linkSourceID=10" style="border: none; width: 200px; height: 48px;"></iframe>
			</div>
-->
			
			<div id="booking-module-wrap" class="wrap-700">
				<script>
					jQuery( function() {
						jQuery( "#pricing" ).accordion({
						  collapsible: true,
						  animate: 500,
						  heightStyle: "content",
						  active: false
						}).show();
					});
				</script>				
				<div id="pricing">
				  <h3><span>click here to</span>View Pricing<i class="fas fa-angle-down"></i></h3>
				  <div id="pa-inner-wrap">
					  	<div class="price-cat-wrap">
						  	<div class="gold-pipe"></div>
						  	<h4 class="price-wrap-cat-title">Salt Therapy</h4>
						  	
						  		<?php if( have_rows('salt_sessions_left') ):?>
						  			<section class="price-section price-section-half" id="single-session-ps">
											<?php while ( have_rows('salt_sessions_left') ) : the_row();?>
												<div class="price-row">
											  		<?php if( have_rows('session_level') ):?>
														<?php while ( have_rows('session_level') ) : the_row();?>
																<h5><?php the_sub_field('label');?></h5>
														  		<?php if( have_rows('rows') ):?>
														  		<ul>
														  			<?php while ( have_rows('rows') ) : the_row();?>
																		<li><?php the_sub_field('single_row');?></li>		
																	<?php endwhile;?>
														  		</ul>
																<?php endif; ?>														
														<?php endwhile;?>
													<?php endif; ?>
											<?php endwhile;?>
						  			</section>
								<?php endif; ?>
								
						  		<?php if( have_rows('salt_sessions_right') ):?>
						  			<section class="price-section price-section-half" id="single-session-ps">
											<?php while ( have_rows('salt_sessions_right') ) : the_row();?>
												<div class="price-row">
											  		<?php if( have_rows('session_level') ):?>
														<?php while ( have_rows('session_level') ) : the_row();?>
																<h5><?php the_sub_field('label');?></h5>
														  		<?php if( have_rows('rows') ):?>
														  		<ul>
														  			<?php while ( have_rows('rows') ) : the_row();?>
																		<li><?php the_sub_field('single_row');?></li>		
																	<?php endwhile;?>
														  		</ul>
																<?php endif; ?>														
														<?php endwhile;?>
													<?php endif; ?>
											<?php endwhile;?>
						  			</section>
								<?php endif; ?>	
								

						  	<div class="gold-pipe gold-pipe-half"></div>
								

							
								
							<div class="price-cat-wrap">	
															
						  		<?php if( have_rows('other_services_left') ):?>
						  			<section class="price-section price-section-half" id="single-session-ps">
											<?php while ( have_rows('other_services_left') ) : the_row();?>
												<div class="price-row">
											  		<?php if( have_rows('session_level') ):?>
														<?php while ( have_rows('session_level') ) : the_row();?>
																<h5><?php the_sub_field('label');?></h5>
														  		<?php if( have_rows('rows') ):?>
														  		<ul>
														  			<?php while ( have_rows('rows') ) : the_row();?>
																		<li><?php the_sub_field('single_row');?></li>		
																	<?php endwhile;?>
														  		</ul>
																<?php endif; ?>														
														<?php endwhile;?>
													<?php endif; ?>
											<?php endwhile;?>
						  			</section>
								<?php endif; ?>
								
						  		<?php if( have_rows('other_services_right') ):?>
						  			<section class="price-section price-section-half" id="single-session-ps">
											<?php while ( have_rows('other_services_right') ) : the_row();?>
												<div class="price-row">
											  		<?php if( have_rows('session_level') ):?>
														<?php while ( have_rows('session_level') ) : the_row();?>
																<h5><?php the_sub_field('label');?></h5>
														  		<?php if( have_rows('rows') ):?>
														  		<ul>
														  			<?php while ( have_rows('rows') ) : the_row();?>
																		<li><?php the_sub_field('single_row');?></li>		
																	<?php endwhile;?>
														  		</ul>
																<?php endif; ?>														
														<?php endwhile;?>
													<?php endif; ?>
											<?php endwhile;?>
						  			</section>
								<?php endif; ?>	
							
							</div>
							
					  	</div>				
				  </div>
				</div>
				<script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>
<!-- 				<healcode-widget data-type="schedules" data-widget-partner="object" data-widget-id="2b576231cd1" data-widget-version="1"></healcode-widget> -->
				<healcode-widget data-type="appointments" data-widget-partner="object" data-widget-id="2b351011cd1" data-widget-version="0"></healcode-widget>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
