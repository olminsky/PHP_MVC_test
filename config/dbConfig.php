<?php
	$dbConfig = Config::singleton();

	//DSN
	$dbConfig->set('dbdriver',	'mysql');
	$dbConfig->set('dbhost',	'localhost');
	$dbConfig->set('dbport',	'3306');
	$dbConfig->set('dbname',	'pruebas');
	//
	$dbConfig->set('dbusername',	'root');
	$dbConfig->set('dbpassword',	'');
?>
