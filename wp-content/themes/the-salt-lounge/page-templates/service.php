<?php
/**
 * Template Name: Service
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Salt_Lounge
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main inner-wrap">
											
			<div class="main-content shadowed wrap-1000">
				
				<h1 class="centered"><?php the_title();?></h1>
				
<!--
				<div class="intro-copy-wrap">
					<?php the_field('intro_copy');?>
				</div>
-->
				
				<div class="centered">
					<div class="img-wrap corner-tl">
						<?php 
						$image = get_field('image');
						$size = 'service-image'; // (thumbnail, medium, large, full or custom size)
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
						<div class="corner-br"></div>
					</div>
				</div>
					
				
				<div class="text-content-wrap">
						<?php the_field('services_copy_and_prices');?>
	
				</div>
				

			</div>
								
<!-- 					<div id="relax-breathe"><p>-&nbsp;Relax & Breathe&nbsp;-</p></div> -->


			
			<?php if(is_page('salt-therapy')):?>
			
			<div id="salty-memberships" class="teal-bg-row">
				<h2><?php the_field('monthly_lounger_title', '6');?></h2>
				<div class="wrap-1200">
					
					<div class="memberships-wrap">
						<div><?php the_field('salty_membership_1', '6');?></div>
						<div><?php the_field('salty_membership_2', '6');?></div>
						<div><?php the_field('salty_membership_3', '6');?></div>
					</div>
					
					<p class="member-footnote wrap-992"><small><?php the_field('memberships_footnote', '6');?></small></p>
					
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
				<?php the_field('kids_copy', '6');?>
				<div id="kids-image-wrap">
					<img id="kids_image_left" src="<?php the_field('kids_image_left', '6');?>"/>
					<img id="kids_image_right" src="<?php the_field('kids_image_right', '6');?>"/>
				</div>
			</div>
			
			<?php endif;?>



		</main><!-- #main -->
		
		
			<?php global $post;
				$page_slug = $post->post_name
			?>
			
			<?php
			$args = array( 
			'post_type' => 'staff',
			'category_name' => $page_slug,
			'posts_per_page' => -1 ,
			'order' => 'DESC'
			
			);				
			$loop = new WP_Query( $args );
			
			if ( $loop->have_posts() ) :?>
			
			<div id="staff" class="wrap-992">
				
				<div class="centered">
					
					<h2><?php the_field('staff_heading');?></h2>
					
					<?php the_field('staff_intro');?>		
				
				</div>
			
			<?php while ( $loop->have_posts() ) : $loop->the_post();?>
				
					<div class="single-staff">
															  
						<?php $staff = get_post();?>
			  
							<h3 class="single-staff-name"><?php the_title(); ?></h3>
							
							<div class="single-staff-content-wrap">
								
								<div class="single-staff-img">
								<?php 
								
								$image = get_field('image');
								$size = 'staff'; // (thumbnail, medium, large, full or custom size)
								
								if( $image ) {
								
									echo wp_get_attachment_image( $image, $size );
								
								}
								
								?>
								</div>
								
								<div class="single-staff-text-wrap">
								
									<?php the_content();?>
								
								</div>
							
							</div>
				  	
					</div>
						
			<?php endwhile;?> 
			
			</div>
			
			<?php endif; wp_reset_query();?>

				<div id="faq">
					<div id="faq-inner" class="wrap-992">
						<h2 class="centered">Frequently Asked Questions</h2>
						<div id="accordian">
							
						<?php
						global $post;
						$args = array( 
						'post_type' => 'faq',
						'category_name' => $post->post_name,
						'posts_per_page' => -1 ,
						'order' => 'DESC'
						
						);
						
						$loop = new WP_Query( $args );
						
						while ( $loop->have_posts() ) : $loop->the_post();?>
						

			  
						<?php $faq = get_post();?>
			  
							<h3><?php echo the_title()?></h3>
				  	
							<div><p><?php the_field('answer');?></p></div>
				  	
			
			<?php endwhile; wp_reset_query();?>     
					</div>
				</div>
			</div>
		
		
	</div><!-- #primary -->
	
		<?php if(!is_page('salt-therapy')):?>
		
			<div id="salty-memberships" class="teal-bg-row">
				<h2><?php the_field('monthly_lounger_title', '6');?></h2>
				<div class="wrap-1200">
					
					<div class="memberships-wrap">
						<div><?php the_field('salty_membership_1', '6');?></div>
						<div><?php the_field('salty_membership_2', '6');?></div>
						<div><?php the_field('salty_membership_3', '6');?></div>
					</div>
					
					<p class="member-footnote wrap-992"><small><?php the_field('memberships_footnote', '6');?></small></p>
					
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
		
		<?php endif;?>
	
	<div class="service-footer">
		<div class="wrap-1000 inner">
			
			<h2>Learn About Our Other Services</h2>	
			
			<div class="footer-services-wrap">	
				<?php		
				$args = array(
				    'post_type'  => 'page', 
				    'post__not_in' => array( $post->ID ),
				    'meta_query' => array( 
				        array(
				            'key'   => '_wp_page_template', 
				            'value' => 'page-templates/service.php'
				        )
				    )
				);
				
				$loop = new WP_Query( $args );
						
				while ( $loop->have_posts() ) : $loop->the_post();?>		
				
				<div class="service-footer-single-service">
					
<!-- 				<?php $service = get_post();?> -->

					<a href="<?php echo get_the_permalink();?>">
												
						<?php
							$imgID = get_field('image');
							$imgSize = "other-services";
							$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
						?>
										
						<div class="other-img" style="background-image: url(<?php echo $imgArr[0]; ?> )"></div>	
						
						<label><span><?php echo the_title();?></span></label>
					</a>
				
				</div>
				
				<?php endwhile; wp_reset_query();?> 		
			</div>
		
		</div>
	</div>
	
<?php
get_footer();
