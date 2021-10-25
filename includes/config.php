<?php
	session_start();
	require_once "API/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("478138733320-akab5qmsgi9jjic6ps4vsei4vtb988th.apps.googleusercontent.com");
	$gClient->setClientSecret("HCB-JC7h9WCEBr94RrA_wTUC");
	$gClient->setApplicationName("LoginWith Google");
	$gClient->setRedirectUri("https://educompiler.herokuapp.com/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");	
	$con = new mysqli('remotemysql.com', 'xKNpK4OQM2','SuaIp7sgSd' ,'xKNpK4OQM2');
    if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}	
?>