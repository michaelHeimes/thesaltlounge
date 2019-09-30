<?php
/**
 * Template Name: Contact
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
		
					<div id="contact-row">
						
						<div id="contact-left">
							<div id="address"><?php the_field('address');?></div>
							<div id="hours"><?php the_field('hours');?></div>
							<p><a id="phone" href="tel:<?php the_field('phone_number');?>"><?php the_field('phone_number');?></a></p>
							<p><a id="email" href="<?php the_field('email_address');?>">mailto<?php the_field('email_address');?></a></p>
						</div>
				
						<div id="map" style="height: 400px;"></div>
					
					</div>
		
		            
		            
		
		       <div class="container-fluid zenoti-contact-wrap">
		            <img id="loader" src="/wp-content/themes/the-salt-lounge/loader.gif" style=" display:none; position: fixed; top: 0; bottom: 0; left: 0; right: 0; margin: auto; z-index:100;" style="display:none;"/>
		            <div>&nbsp;</div>
		            <div>&nbsp;</div>
		            <form class="col-xl-8 col-lg-8 col-md-12 col-sm-12" id="form" method="post" >
		                <div class="form-group row">				
		                    <label for="firstname" class="col-sm-12 col-form-label">First Name (required)</label>
		                    <div class="col-sm-10">
		                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
		                    </div>
		                </div>
		                    
		                <div class="form-group row">
		                    <label for="lastname" class="col-sm-12 col-form-label">Last Name (required)</label>
		                    <div class="col-sm-10">
		                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
		                    </div>
		                </div>
		                    
		                <div class="form-group row">
		                    <label for="email" class="col-sm-12 col-form-label">Your Email (required)</label>
		                    <div class="col-sm-10">
		                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
		                    </div>
		                </div>
		                    
		                <div class="form-group row">
		                    <label for="number" class="col-sm-12 col-form-label">Your Telephone Number</label>
		                    <div class="col-sm-10">
		                        <input type="number" class="form-control" id="number" name="number" placeholder="Number">
		                    </div>
		                </div>
		                <div class="form-group row">
		                    <label for="time" class="col-sm-12 col-form-label">Preferred time of visit</label>
		                    <div class="col-sm-10">
		                        <select name="time" id="time" class="form-control">
		                            <option value="Select" selected disabled>Select preferred time</option>
		                            <option value="Morning">Morning</option>
		                            <option value="Afternoon">Afternoon</option>                                                                    
		                            <option value="Evening">Evening</option>                                                                    
		                        </select>
		                        <!-- <input type="text" class="form-control" id="time" name="time" > -->
		                    </div>
		                </div>
		                <div class="form-group row">
		                    <div class="col-sm-10">
		                        <button type="submit" class="btnSubmit">Send</button>
		                    </div>
		                </div>
		            </form>
		        </div>			
			
			</div>
			
			<div id="gallery"><?php echo do_shortcode('[unitegallery home_justified_gallery]');?></div>
			
			
			
		</main>		
		
	</div><!-- #primary -->
	
<?php
get_footer();
