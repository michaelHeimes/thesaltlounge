<?php
/**
 * Template Name: POS
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Salt_Lounge
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">		
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'the-salt-lounge' ); ?></a>
	<header id="masthead" class="site-header">
		<div class="site-branding">

		</div><!-- .site-branding -->
		
		<div class="canvas-wrap"><canvas></canvas></div>
		
		<div id="logo-wrap">		
			<img src="<?php the_field('header_logo', 'option');?>" />
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">



	<div id="primary" class="content-area">
		<main id="main" class="site-main inner-wrap">
			
			


			
			
			
			
		</main>		
		
	</div><!-- #primary -->
	
<?php
get_footer();
