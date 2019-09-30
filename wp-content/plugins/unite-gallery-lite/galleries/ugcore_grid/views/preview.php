<?php


defined('UNITEGALLERY_TEXTDOMAIN') or die('Restricted access');

	
	$output = new UGGridThemeOutput();
	echo $output->putGallery(GlobalsUGGallery::$galleryID);

?>