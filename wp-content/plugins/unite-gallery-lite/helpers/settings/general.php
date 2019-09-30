<?php


defined('UNITEGALLERY_TEXTDOMAIN') or die('Restricted access');


$settings = new UniteGallerySettingsUG();
$settings->loadXMLFile(GlobalsUG::$pathHelpersSettings."general.xml");

$settings->updateSelectToSkins("gallery_skin", "default", true);

?>