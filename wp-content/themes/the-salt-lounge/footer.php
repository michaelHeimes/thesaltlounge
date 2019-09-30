<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Salt_Lounge
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div id="footer-contact-wrap">
<!--
			<div id="contact" class="footer-half">
				<p id="message-copy">Contact<br>The Salt Lounge</p>
				<?php echo do_shortcode('[contact-form-7 id="271" title="Contact form 1"]');?>
			</div>
			<div id="mailing-list" class="footer-half">
				<p id="mailing-list-copy">Subscribe to our mailing list<br>and we'll notify you about our<br>grand opening<br>as well as future events and promotions.</p>
				<script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>
				<healcode-widget data-type="prospects" data-widget-partner="object" data-widget-id="2b236221cd1" data-widget-version="0"></healcode-widget>
			</div>
-->
<!--
			<div id="mailing-list">
				<p id="mailing-list-copy">Subscribe to our mailing list and we'll notify you about future events and promotions.</p>
				<script src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"></script>
				<healcode-widget data-type="prospects" data-widget-partner="object" data-widget-id="2b236221cd1" data-widget-version="0"></healcode-widget>
			</div>
-->
		

		</div>
		
		<?php if(!is_page_template('page-templates/pos.php')):?>
			<p id="site-info">Copyright &copy;<?php echo date("Y"); ?> The Salt Lounge<br>Site by <a href="https://portfolio.cairndigitalmedia.com/" target="_blank">Cairn</a></p>
		<?php endif;?>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

	<?php if(!is_page_template('page-templates/pos.php')):?>
	
		<div class="service-book-wrap teal-bg-row" style="text-align: center;">
			
			<?php 
			$link = get_field('booking_link', 'option');
			if( $link ): 
				$link_url = $link['url'];
				$link_title = $link['title'];
				$link_target = $link['target'] ? $link['target'] : '_self';
				?>
				<a class="book-now-button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
			<?php endif; ?>
			
		</div>
		
	<?php endif;?>

	<?php if(is_page_template('page-templates/contact.php')):?>	
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
	   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
	   crossorigin=""/>
	    <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
	   integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
	   crossorigin=""></script>
   <?php endif;?>

<?php wp_footer(); ?>

</body>
</html>
