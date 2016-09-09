<?php
	//Proceso de conexión con la base de datos
	$dbhost = "mysql17.000webhost.com";
	$dbname = "a4053351_db";
	$dbuser = "a4053351_user";
	$dbpass = "desde23794";
	try {
		$db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass,  
				     array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(Exception $error) {
		die("Error conexión BBDD " . $error->getMessage());
	}	
?>