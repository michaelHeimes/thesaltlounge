<?php


defined('UNITEGALLERY_TEXTDOMAIN') or die('Restricted access');

		
	$output = new UGVideoThemeOutput();
	echo $output->putGallery(GlobalsUGGallery::$galleryID);

?>