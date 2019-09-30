<?php


defined('UNITEGALLERY_TEXTDOMAIN') or die('Restricted access');

	
	$output = new UGTilesNestedOutput();
	echo $output->putGallery(GlobalsUGGallery::$galleryID);

?>