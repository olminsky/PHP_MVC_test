<?php
	$pàthsConfig = Config::singleton();

	//
	$pàthsConfig->set('controllersFolder', 'controladores/');
	$pàthsConfig->set('modelsFolder', 'modelos/');
	$pàthsConfig->set('viewsFolder', 'vistas/');

	defined("LIBRARY_PATH")
		or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));

	defined("TEMPLATES_PATH")
		or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));
?>
