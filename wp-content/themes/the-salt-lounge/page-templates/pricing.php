<?php
/**
 * Template Name: Pricing
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Salt_Lounge
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main inner-wrap">
			
			
			<?php $image = get_field('image');?>
									
				<div class="main-content shadowed wrap-992">
					
					<h1 class="centered"><?php the_title();?></h1>
					
				<div id="pricing">
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
								
						  	<h4 class="price-wrap-cat-title">Spa Services</h4>
							
								
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
					

				</div>
								
<!-- 					<div id="relax-breathe"><p>-&nbsp;Relax & Breathe&nbsp;-</p></div> -->


		</main><!-- #main -->



			<?php
			$args = array( 
			'post_type' => 'faq',
			'category_name' => 'pricing',
			'posts_per_page' => -1 ,
			'order' => 'DESC'
			
			);
			
			$loop = new WP_Query( $args );
			
			while ( $loop->have_posts() ) : $loop->the_post();?>
			
				<div id="faq">
					<div id="faq-inner" class="wrap-992">
						<h2 class="centered">Frequently Asked Questions</h2>
						<div id="accordian">
			  
						<?php $faq = get_post();?>
			  
							<h3><?php echo $faq->post_name;?></h3>
				  	
							<div><p><?php the_field('answer');?></p></div>
				  	
						</div>
					</div>
				</div>
			
			<?php endwhile; wp_reset_query();?>     

		
		
	</div><!-- #primary -->
	
<?php
get_footer();
