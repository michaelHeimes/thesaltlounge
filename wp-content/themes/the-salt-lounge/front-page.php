<?php
/**
 * The template for displaying the Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Salt_Lounge_Landing
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main inner-wrap">
			
				<?php $link = get_field('booking_link', 'option');?>
			
			<div id="the-salt-lounge" class="wrap-992">
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
			
			<div id="sessions" class="offset-combo-wrap">
				
				<div class="offset-copy-card corner-tl shadowed">
					
					<h2 class="centered">Sessions</h2>
					
						<div class="mobile-offset-img">
							<?php 
							$image = get_field('sessions_image');
							$size = 'service-image';
							if( $image ) {
								echo wp_get_attachment_image( $image, $size );
							}
							?>
						</div>
						
						<?php the_field('sessions_copy');?>
						
						<div class="sessions-book-wrap" style="text-align: center;">
							<a class="book-now-button" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
						</div>
						
				</div>
				
				<div id="relax-breathe"><p>-&nbsp;Relax & Breathe&nbsp;-</p></div>

				<div id="opening-offset-image-wrap"  class="corner-br">	
								
					<div id="benefits" class="benefit-session">
						
						<h2 id="benefits-title" class="centered">Benefits</h2>
					
						<?php the_field('offset-copy');?>
					
						<?php if( have_rows('benefits') ):?>
							<ul class="benefits">
							<?php while ( have_rows('benefits') ) : the_row();?>		
								<li><span class="pink-diamond"><i class="fas fa-check-circle"></i></span><?php the_sub_field('single_benefit');?></li>			
							<?php endwhile;?>
							</ul>
						<?php endif;?>	
					
					</div>
					
				
					<div class="desktop-offset-img">
						<?php 
						$image = get_field('sessions_image');
						$size = 'service-image';
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
					</div>
					
				</div>
				
			</div>
			
			<div id="salty-memberships" class="teal-bg-row">
				<h2><?php the_field('monthly_lounger_title');?></h2>
				<div class="wrap-1200">
					
					<div class="memberships-wrap">
						<div><?php the_field('salty_membership_1');?></div>
						<div><?php the_field('salty_membership_2');?></div>
						<div><?php the_field('salty_membership_3');?></div>
					</div>
					
					<p class="member-footnote wrap-992"><small><?php the_field('memberships_footnote');?></small></p>
					
					<div class="book-now-button-wrap">
						<?php 
						$link2 = get_field('membership_link', 'option');
						if( $link2 ): 
							$link2_url = $link2['url'];
							$link2_title = $link2['title'];
							$link2_target = $link2['target'] ? $link2['target'] : '_self';
							?>
							<a class="book-now-button" href="<?php echo esc_url($link2_url); ?>" target="<?php echo esc_attr($link2_target); ?>"><?php echo esc_html($link2_title); ?></a>
						<?php endif; ?>
					</div>
				</div>
			</div>

			<div id="kids">
				<div class="gold-bar"></div>
				<h2 class="centered">Kids</h2>
				<?php the_field('kids_copy');?>
				<div id="kids-image-wrap">
					<img id="kids_image_left" src="<?php the_field('kids_image_left');?>"/>
					<img id="kids_image_right" src="<?php the_field('kids_image_right');?>"/>
				</div>
			</div>

								
			<div id="massage" class="offset-combo-wrap">	
				<div class="offset-copy-card corner-tl shadowed">
					<h2 class="centered">Massage</h2>
						<div  class="mobile-offset-img">


							<?php 
							$image = get_field('massage_image');
							$size = 'service-image';
							if( $image ) {
								echo wp_get_attachment_image( $image, $size );
							}
							?>
						</div>
						<?php the_field('message_copy');?>
						<div class="sessions-book-wrap" style="text-align: center;">
							<a class="book-now-button" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
						</div>
				</div>
	
				<div id="opening-offset-image-wrap"  class="corner-br">				
					<div class="desktop-offset-img">
						
<!--
						<div class="video-container">
							<video src="/wp-content/uploads/2019/09/Thai-Herbal.mp4" playsinline="true" autoplay="true" loop="true" muted="true" width="740" height="416"></video>
						</div>
-->
						
						
<!--
						<div id="massage-video" class="video-container" playsinline="true" autoplay="true" loop="true" muted="true" width="740" height="416">   

						</div>
-->



						
						<?php 
						$image = get_field('massage_image');
						$size = 'service-image';
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
					</div>
				</div>			
			</div>
			
			
			<div id="reflexology" class="offset-combo-wrap">	
				<div class="offset-copy-card corner-tl shadowed">
					<h2 class="centered">Reflexology</h2>
						<div  class="mobile-offset-img">
							<?php 
							$image = get_field('reflexology_image');
							$size = 'service-image';
							if( $image ) {
								echo wp_get_attachment_image( $image, $size );
							}
							?>
						</div>
						<?php the_field('reflexology_copy');?>
						<div class="sessions-book-wrap" style="text-align: center;">
							<a class="book-now-button" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
						</div>
				</div>
	
				<div id="opening-offset-image-wrap"  class="corner-br">				
					<div class="desktop-offset-img">
						
<!--
						<div class="video-container">
							<video src="/wp-content/uploads/2019/09/Reflexology.mp4" playsinline="true" autoplay="true" loop="true" muted="true" width="740" height="416"></video>
						</div>
-->
						
						<?php 
						$image = get_field('reflexology_image');
						$size = 'service-image';
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
					</div>
				</div>			
			</div>
			
			
			<div id="reiki" class="offset-combo-wrap">	
				<div class="offset-copy-card corner-tl shadowed">
					<h2 class="centered">Reiki</h2>
						<div  class="mobile-offset-img">
							<?php 
							$image = get_field('reiki_image');
							$size = 'service-image';
							if( $image ) {
								echo wp_get_attachment_image( $image, $size );
							}
							?>
						</div>
						<?php the_field('reiki_copy');?>
						<div class="sessions-book-wrap" style="text-align: center;">
							<a class="book-now-button" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
						</div>
				</div>
	
				<div id="opening-offset-image-wrap"  class="corner-br">				
					<div class="desktop-offset-img" src="<?php the_field('reiki_image');?>">
						<?php 
						$image = get_field('reiki_image');
						$size = 'service-image';
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
					</div>
				</div>			
			</div>
			
			
			<div id="salty-yoga" class="offset-combo-wrap">	
				<div class="offset-copy-card corner-tl shadowed">
					<h2 class="centered">Salty Yoga</h2>
					
					<div class="mobile-offset-img" src="<?php the_field('yoga_image');?>">
					
						<?php 
						$image = get_field('yoga_image');
						$size = 'service-image';
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
					</div>
					
					<?php the_field('salty_yoga_copy');?>
					
					<div class="sessions-book-wrap" style="text-align: center;">
						<a class="book-now-button" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
					</div>
						
				</div>
	
				<div id="opening-offset-image-wrap"  class="corner-br">				
					<div class="desktop-offset-img">
						
<!--
						<div class="video-container">
							<video src="/wp-content/uploads/2019/09/Salty-Yoga.mp4" playsinline="true" autoplay="true" loop="true" muted="true" width="740" height="416"></video>
						</div>
-->
						
						<?php 
						$image = get_field('yoga_image');
						$size = 'service-image';
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
					</div>
				</div>			
			</div>
							
							
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
				
					if ( $count < 2 ):?>
						<div id="events-inner" class=" single-wide wrap-1000">
					
					<?php elseif ( $count < 3 ):?>
						<div id="events-inner" class="two-wide wrap-1000">
					
					<?php elseif ( $count > 2 ):?>
						<div id="events-inner" class="three-wide wrap-1200">
							
					<?php elseif ( $count < 1 ):?>
						<div id="events-inner" class="wrap-1200">
					<?php endif;?>
						
					<div class="grid">
				
					<?php if( $posts ) {
						
						foreach( $posts as $post ) {
							
				
							?>

							<?php setup_postdata( $post );?>	
					
							<?php if ( $count < 3 ):?>						
								
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
							
							<?php if( !$posts ) :?>
								<h3 id="no-events">We don't have any events scheduled right now.<br>Please check back soon!</h3>
							<?php endif; ?>	
							
					</div><!-- events-inner -->			
			</div><!-- events -->
			
			
			<?php if( have_rows('reviews') ):?>

				<div id="reviews" class="review-slider wrap-700">
				<?php while ( have_rows('reviews') ) : the_row();?>	
					<?php if( have_rows('single_review') ):?>
						<?php while ( have_rows('single_review') ) : the_row();?>	
						<div class="single_review shadowed">
							<div class="profile-pic-wrap">
								<?php 
								$image = get_sub_field('profile_pic');
								$size = 'profile-pic'; // (thumbnail, medium, large, full or custom size)
								if( $image ) {
									echo wp_get_attachment_image( $image, $size );
								}
								?>	
							</div>						
							<p class="reviewer-name"><?php the_sub_field('name');?></p>
<!-- 							<p><?php the_sub_field('date');?></p> -->
							<div class="star-wrap"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
							<div class="quote-wrap"><i class="fas fa-quote-left"></i><?php the_sub_field('quote');?><i class="fas fa-quote-right"></i></div>

						</div>
				
				
				
						<?php endwhile;?>
					<?php endif;?>
				<?php endwhile;?>
				</div>
				<div class="centered">
					<a class="book-now-button read-reviews" href="https://www.facebook.com/pg/TheSaltLounge/reviews/?ref=page_internal" target="_blank">Read All Reviews</a>
				</div>
			<?php endif;?>	
			
			<div id="video-review-wrap" class="wrap-992">
				<iframe width="992" height="558" src="https://www.youtube.com/embed/quXYn_SLuqg?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>


			
			<?php if( have_rows('faq') ):?>
				<div id="faq">
					<div id="faq-inner" class="wrap-992">
						<h2 class="centered">Frequently Asked Questions</h2>
						<div id="accordian">
				<?php while ( have_rows('faq') ) : the_row();?>	
					<?php if( have_rows('single_faq') ):?>
						<?php while ( have_rows('single_faq') ) : the_row();?>	
						<h3><?php the_sub_field('question');?></h3>
							<div><p><?php the_sub_field('answer');?></p></div>
						<?php endwhile;?>
					<?php endif;?>				
				<?php endwhile;?>
						</div>
					</div>
				</div>
			<?php endif;?>				
				
			<div id="gallery"><?php echo do_shortcode('[unitegallery home_justified_gallery]');?></div>
	
		</main><!-- #main -->
	</div><!-- #primary -->
	

<?php
// get_sidebar();
get_footer();
