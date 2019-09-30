<?php
/**
 * Template Name: Events Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Salt_Lounge
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main inner-wrap">
			
			<div id="events" class="teal-bg-row">
				
					
				<h2 id="events-title" class="centered">Events!</h2>
			
				<div id="events-copy" class="wrap-700"><?php the_field('events_copy');?></div>
				
								
				<?php 
			
				$currentdate = current_time('Ymd');
				
				// get posts
				$posts = get_posts(array(
			        'post_type' => 'events',
			       	'meta_key'	=> 'date_time',
					'orderby'	=> 'meta_value',
					'order'		=> 'ASC',
			        'posts_per_page' => -1,
					'meta_query'=> array(
			        array(
			          'key' => 'date_time',
			          'compare' => '>=',
			          'value' => date("Y-m-d", strtotime("0 day")),
			          'type' => 'DATE'	))
				));
				
					$count = count($posts);
					
					$date = new DateTime(get_field('date_time'));
				
					if ( $count < 3 ):?>
						<div id="events-inner" class=" single-wide wrap-1000">
					
					<?php elseif ( $count > 2 ):?>
						<div id="events-inner" class="three-wide wrap-1200">
					<?php endif;?>
						
					<div class="grid">
				
					<?php if( $posts ) {
						
						foreach( $posts as $post ) {
							
							setup_postdata( $post );
					
							if ( $count < 3 ):?>						
								
							<div class="single grid-item">
									
							<?php else:?>
							
							<div class="single grid-item three-wide">
							
							<?php endif;?>
							
								<div class="grid-sizer"></div>
								<div class="gutter"></div>
								
									<?php 
										$image = get_field('image');
										$size = 'event-pic';
										if( $image ) {
										echo wp_get_attachment_image( $image, $size );}
									?>
									
									<h3 class="event-card-title"><?php the_title();?></h3>
									
									<p class="date_time"><?php the_field('date_time');?> to <?php the_field('end_time');?></p>
									
									<div class="event-card-copy"><?php the_field('copy');?></div>
									
										<div class="event-card-button-wrap">
										<?php 
											$soldout = get_field('sold_out');
												if( $soldout && in_array('Sold Out', $soldout) ): ?>
												<p class="sold_out">Sold Out!</p>
												<? else:?>
											<?php 
												$link = get_field('link');
												if( $link ): ?>
													<a class="event-card-button" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
											<?php endif; ?>
											
											<?php if( get_field('event_popup_script') ): ?>
												<?php the_field('event_popup_script');?>
											<?php endif; ?>
										<?php endif; ?>
										</div>
										
							</div><!-- single -->
				<?php } 
				 
				wp_reset_postdata();}?>	
							</div><!-- grid -->
					</div><!-- events-inner -->	
					
					<?php if( !$posts ) :?>
					<h3 id="no-events">We don't have any events scheduled right now.<br>Please check back soon!</h3>
					<?php endif; ?>	
						
			</div><!-- events -->

		</main><!-- #main -->
				
<!--
		<div id="events" class="teal-bg-row">
				<?php if( have_rows('events_cards') ):
							$count = count( get_field( 'events_cards' ) );?>
								<?php if ( $count < 2 ):?>
									<div id="events-inner" class=" single-wide wrap-1000">
								
								<?php elseif ( $count < 3 ):?>
									<div id="events-inner" class="two-wide wrap-1000">
								
								<?php elseif ( $count > 2 ):?>
									<div id="events-inner" class="three-wide wrap-1200">
										
								<?php elseif ( $count < 1 ):?>
									<div id="events-inner" class="wrap-1200">
								<?php endif;?>
					
			<h2 id="events-title" class="centered">Events!</h2>
			
					<div id="events-copy" class="wrap-700"><?php the_field('events_copy');?></div>
					<div class="grid">
						<?php while ( have_rows('events_cards') ) : the_row();?>
							<?php if( have_rows('single_event') ):?>
								<?php while ( have_rows('single_event') ) : the_row();
								$count = count( get_field( 'events_cards' ) );
								
								if ( $count < 3 ) { ?>
									<div class="single grid-item  <?php $hide = get_sub_field('hide_for_now');
													if( $hide && in_array('Yes', $hide) ): ?>
													hide_for_now
														<?php endif;?>">
								<?php } else { ?>
									<div class="single grid-item three-wide <?php $hide = get_sub_field('hide_for_now');
													if( $hide && in_array('Yes', $hide) ): ?>
													hide_for_now
														<?php endif;?>">
								<?php } ?>
														<div class="grid-sizer"></div>
						<div class="gutter"></div>
								
										<?php 
											$image = get_sub_field('image');
											$size = 'event-pic';
											if( $image ) {
											echo wp_get_attachment_image( $image, $size );}
										?>
										<h3 class="event-card-title"><?php the_sub_field('title');?></h3>
										<p class="date_time"><?php the_sub_field('date_&_time');?></p>
										<div class="event-card-copy"><?php the_sub_field('copy');?></div>
											<div class="event-card-button-wrap">
											<?php 
												$soldout = get_sub_field('sold_out');
													if( $soldout && in_array('Sold Out', $soldout) ): ?>
													<p class="sold_out">Sold Out!</p>
													<? else:?>
												<?php 
													$link = get_sub_field('link');
													if( $link ): ?>
														<a class="event-card-button" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
												<?php endif; ?>
												
												<?php if( get_sub_field('event_popup_script') ): ?>
													<?php the_sub_field('event_popup_script');?>
												<?php endif; ?>
											<?php endif; ?>
											</div>
									</div>
								<?php endwhile;?>
							<?php endif; ?>			
						<?php endwhile;?>
								<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
								<script>
								jQuery( document ).ready(function() {
									jQuery('.single').imagesLoaded( function() {
										jQuery('.grid').isotope({
											itemSelector: '.single',
											percentPosition: true,
											masonry: {
											// use outer width of grid-sizer for columnWidth
											columnWidth: '.single',
											gutter: '.gutter'
											}
										})
									});
								});
								</script>
					</div>
					
			<?php else:?>
				<h2 id="events-title" class="centered">Events!</h2>

				<p id="no-events">There are no events scheduled right now.<br>Check back soon!</p>
				
			<?php endif; ?>
				</div>
				
			</div>
-->

		
		
		
		
		
		
		
		
		
		

<!--
			<div id="staff" class="wrap-992">
				
				<div class="centered">
					
					<h2><?php the_field('staff_heading');?></h2>
					
					<?php the_field('staff_intro');?>		
				
				</div>
				
				<?php
				$args = array( 
				'post_type' => 'staff',
				'category_name' => 'massage',
				'posts_per_page' => -1 ,
				'order' => 'DESC'
				
				);
				
				$loop = new WP_Query( $args );
				
				while ( $loop->have_posts() ) : $loop->the_post();?>
				

					<div class="single-staff">
									  
						<?php $staff = get_post();?>
			  
							<h3 class="single-staff-name"><?php the_title(); ?></h3>
							
							<div class="single-staff-content-wrap">
				  	
								<?php 
	
								$image = get_field('image');
								
								if( !empty($image) ): ?>
								
									<img class="single-staff-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								
								<?php endif; ?>
								
								<div class="single-staff-text-wrap">
								
									<?php the_content();?>
								
								</div>
							
							</div>
				  	
					</div>
				
				<?php endwhile; wp_reset_query();?> 
			
			</div> 

			<?php
			$args = array( 
			'post_type' => 'faq',
			'category_name' => 'massage',
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
-->     

		
		
	</div><!-- #primary -->
	
<?php
get_footer();
