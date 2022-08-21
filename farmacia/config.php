<?php

	/*=======================================================
	constantes que se utilizaran en la app web
	=========================================================*/
	#Configuracion de acceso a la base de datos
	define('SGDB','mysql');
	define('DB_HOST','localhost');
	define('DB_PORT','3306'); # Default: 3306 -- Mac: 8889
	define('DB_NAME','farmaci_ra');
	define('DB_USER','root');
	define('DB_PWD','');
	define('DB_CHARSET',"SET NAMES 'utf8'");

	#Ruta base de url
	define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"]."/farmaci_ra/");
	#Ruta de la app
	define("BASE_URL", "/farmaci_ra/");

	 #Configurar sona horaria.
	 date_default_timezone_set('America/Mexico_City');
	 setlocale(LC_ALL,"es_ES");
	 #activar errores.
	 ini_set("display_errors","1");
	
	



	