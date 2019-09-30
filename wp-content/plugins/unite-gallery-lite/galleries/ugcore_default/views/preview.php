<?php


defined('UNITEGALLERY_TEXTDOMAIN') or die('Restricted access');

	
	$output = new UGDefaultThemeOutput();
	echo $output->putGallery(GlobalsUGGallery::$galleryID);

?>