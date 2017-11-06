<?php
	$server="localhost";
	$username="root";
	$password="";
	$db='tiendabd';

	$dbConn = new PDO('mysql:host=localhost;dbname=tiendabd;charset=utf8mb4', 'root', '', array(PDO::ATTR_EMULATE_PREPARES => false, 
                                                                                                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

	//$con=mysql_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
	//$sdb=mysql_select_db($db,$con)or die("la base de datos no existe");
?>