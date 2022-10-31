<?php 
$contrasena = "gAmUNwUt4h9A8oOsTK1M";
$usuario = "urh7rtr48otdetu6";
$nombre_bd = "boao7rjp41fpfhja6cgs";

try {
	$bd = new PDO (
		'mysql:host=boao7rjp41fpfhja6cgs-mysql.services.clever-cloud.com;
		dbname='.$nombre_bd,
		$usuario,
		$contrasena,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);
} catch (Exception $e) {
	echo "Problema con la conexion: ".$e->getMessage();
}
?>