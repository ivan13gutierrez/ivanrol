

<?php 


function conectar(){
    $host="localhost";
    $user="root";
    $pass="";

    $bd="multilogin";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
    

}
?>











<!-- $contrasena = "";
$usuario = "root";
$nombre_bd = "multilogin";

try {
	$bd = new PDO (
		'mysql:host=localhost;
		dbname='.$nombre_bd,
		$usuario,
		$contrasena,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);
} catch (Exception $e) {
	echo "Problema con la conexion: ".$e->getMessage();
}
?> -->