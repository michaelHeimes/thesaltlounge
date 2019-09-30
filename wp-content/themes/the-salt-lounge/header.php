<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
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
	<script data-search-pseudo-elements defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120939847-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	
	  gtag('config', 'UA-120939847-1');
	</script>
	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	 fbq('init', '168312840687197'); 
	fbq('track', 'PageView');
	</script>
	<noscript>
	 <img height="1" width="1" 
	src="https://www.facebook.com/tr?id=168312840687197&ev=PageView
	&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code -->
	

		
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'the-salt-lounge' ); ?></a>
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<div id="nav-container" class="wrap-1200">
				<div id="pre-header">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2018/04/SL-FB-300x167.png"/></a>
				</div>
				<div id="right-nav">
					<div id="header-social" class="hs-mobile">
						<span class="pink-diamond"><i class="fas fa-ellipsis-v"></i></span>
						<span><a href="tel:1-610-743-4613"><i class="fas fa-phone"></i></a></span>
						<span><a href="mailto:info@thesaltlounge.net"><i class="far fa-envelope"></i></a></span>
						<span><a href="https://www.facebook.com/TheSaltLounge/" target="_blank"><i class="fab fa-facebook-f"></i></a></span>
						<span><a href="https://www.instagram.com/the_salt_lounge/" target="_blank"><i class="fab fa-instagram"></i></a></span>
						<span><a href="https://www.youtube.com/channel/UCulB9Dcp9onuTqGviKz1QBA" target="_blank"><i class="fab fa-youtube"></i></a></span>
					</div>

	<!-- 			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'the-salt-lounge' ); ?></button> -->
				<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
					?>
					<div id="header-social" class="hs-desktop">
						<span class="pink-diamond"><i class="fas fa-ellipsis-v"></i></span>
						<span><a href="tel:1-610-743-4613"><i class="fas fa-phone"></i></a></span>
						<span><a href="mailto:info@thesaltlounge.net"><i class="far fa-envelope"></i></a></span>
						<span><a href="https://www.facebook.com/TheSaltLounge/" target="_blank"><i class="fab fa-facebook-f"></i></a></span>
						<span><a href="https://www.instagram.com/the_salt_lounge/" target="_blank"><i class="fab fa-instagram"></i></a></span>
						<span><a href="https://www.youtube.com/channel/UCulB9Dcp9onuTqGviKz1QBA" target="_blank"><i class="fab fa-youtube"></i></a></span>
					</div>
					<button id="mmenu-button"><a href="#mmenu">
						<i class="fas fa-bars"></i>
					</a></button>
				</div>
		</nav><!-- #site-navigation -->
		
		<div id="nav-spacer"></div>
						
		<?php if( get_field('alert_message', 'option') ): ?>
			<p id="alert_message"><?php the_field('alert_message', 'option'); ?></p>
		<?php endif; ?>	
		

	</header><!-- #masthead -->
	
		<div class="canvas-wrap"><canvas></canvas></div>
		
		<div id="logo-wrap">		
			<img src="<?php the_field('header_logo', 'option');?>" />
		</div>

	<div id="content" class="site-content">


