<?php
/*
Plugin Name: Unite Gallery Lite
Plugin URI: http://wp.unitegallery.net
Description: Unite Gallery Lite - All in one image and video gallery
Author: Valiano
Version: 1.7.51
Author URI: http://unitegallery.net
*/

//ini_set("display_errors", "on");
//ini_set("error_reporting", E_ALL);

if(!defined("UNITEGALLERY_TEXTDOMAIN"))
	define("UNITEGALLERY_TEXTDOMAIN", true);

$mainFilepath = __FILE__;
$currentFolder = dirname($mainFilepath);

try{
	require_once $currentFolder.'/includes.php';
	
	require_once $currentFolder."/inc_php/framework/provider/provider_main_file.php";

}catch(Exception $e){
	
	$message = $e->getMessage();
	echo $message;
}

