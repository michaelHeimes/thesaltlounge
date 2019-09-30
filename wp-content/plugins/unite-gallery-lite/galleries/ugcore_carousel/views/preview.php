<?php


defined('UNITEGALLERY_TEXTDOMAIN') or die('Restricted access');

	
	$output = new UGCarouselOutput();
	echo $output->putGallery(GlobalsUGGallery::$galleryID);

?>