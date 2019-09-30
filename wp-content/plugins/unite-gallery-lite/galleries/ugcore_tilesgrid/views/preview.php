<?php


defined('UNITEGALLERY_TEXTDOMAIN') or die('Restricted access');

	
	$output = new UGTilesGridOutput();
	echo $output->putGallery(GlobalsUGGallery::$galleryID);

?>