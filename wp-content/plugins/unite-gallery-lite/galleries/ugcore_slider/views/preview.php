<?php


defined('UNITEGALLERY_TEXTDOMAIN') or die('Restricted access');

	
	$output = new UGSliderThemeOutput();
	echo $output->putGallery(GlobalsUGGallery::$galleryID);

?>