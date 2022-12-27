<?php 
$siteName = 'Fifa Worldcup'; 
$siteEmail = ''; 
 
define('DB_HOST', ''); 
define('DB_USERNAME', ''); 
define('DB_PASSWORD', ''); 
define('DB_NAME', ''); 
 
$siteURL = (!empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on")?'https://':'http://'; 
$siteURL = $siteURL.$_SERVER["SERVER_NAME"].dirname($_SERVER['REQUEST_URI']).'/'; 
 
?>