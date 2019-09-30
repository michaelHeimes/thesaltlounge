<?php


defined('UNITEGALLERY_TEXTDOMAIN') or die('Restricted access');

	
	$output = new UGTilesJustifiedOutput();
	echo $output->putGallery(GlobalsUGGallery::$galleryID);

?>