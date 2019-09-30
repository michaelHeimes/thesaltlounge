<?php


defined('UNITEGALLERY_TEXTDOMAIN') or die('Restricted access');

	
	$output = new UGCompactThemeOutput();
	echo $output->putGallery(GlobalsUGGallery::$galleryID);

?>