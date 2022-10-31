<?php
$db_host="boao7rjp41fpfhja6cgs-mysql.services.clever-cloud.com"; //localhost server 
$db_user="urh7rtr48otdetu6";	//database username
$db_password="gAmUNwUt4h9A8oOsTK1M";	//database password   
$db_name="boao7rjp41fpfhja6cgs";	//database name

try
{
	$db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
	$e->getMessage();
}

?>
