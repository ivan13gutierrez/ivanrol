

<?php 


function conectar(){
    $host="boao7rjp41fpfhja6cgs-mysql.services.clever-cloud.com";
    $user="urh7rtr48otdetu6";
    $pass="gAmUNwUt4h9A8oOsTK1M";

    $bd="boao7rjp41fpfhja6cgs";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
    

}
?>
