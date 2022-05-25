<?php
$host="localhost";
$username="syscompras";
$password="AdminCompras";
$db="calidad";
$con=mysql_connect($host,$username,$password) or die("No se puede acceder a la base de datos");
mysql_select_db($db,$con);
?>