<?php


defined('UNITEGALLERY_TEXTDOMAIN') or die('Restricted access');

	
	$output = new UGTilesColumnsOutput();
	echo $output->putGallery(GlobalsUGGallery::$galleryID);

?>