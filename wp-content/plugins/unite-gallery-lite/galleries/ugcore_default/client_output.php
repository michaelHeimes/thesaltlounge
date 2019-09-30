<?php


defined('UNITEGALLERY_TEXTDOMAIN') or die('Restricted access');
/**
 * passed $arrOptions to this file
 */
	
	$output = new UGDefaultThemeOutput();
		
	$uniteGalleryOutput = $output->putGallery(GlobalsUGGallery::$galleryID, $arrOptions);
?>