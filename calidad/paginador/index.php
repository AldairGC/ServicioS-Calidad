<?php
require_once("db.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />áá
<title>Paginación PHP con MySQL: Concepto y ejemplos</title>
<style type="text/css">

ul.paginador
{
	
}
ul.paginador li
{
	float:left;
}
ul.paginador li a
{
	float:left;
}
ul.paginador li.paginador-active a, ul.paginador li a:hover
{
	background-color: #337ab7;
	border-color: #337ab7;
	color:#FFFFFF;
}
ul.paginador li.paginador-disabled a, ul.paginador li.paginador-disabled a:hover
{
	cursor:default;
}
ul.paginador li.paginador-current
{
}
</style>
<link type="text/css" href="bootstrap.min.css" rel="stylesheet">
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 4px;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
    background-color: #4CAF50;
    color: white;
}
.main-wrapper{
	width:80%;
	margin:0 auto;
}
hr {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
}
</style>
</head>
<body>
<div class="main-wrapper">
<br>

<br>
<table width="90%" border="0" cellspacing="3" cellpadding="0">
	<tr>
		<th width="10%"><strong>ID</strong></th>
		<th width="70%"><strong>Clave</strong></th>
		<th width="10%"><strong>Nombre</strong></th>
		
	</tr>
	<?php
	include("class.pagina.php");
	$sql="select * from areas order by idarea";
	$PAGINADOR=new PAGINADOR($sql);
	
	$sql=$PAGINADOR->sql;
	
	$res=mysql_query($sql) or die($sql." - ".mysql_error());
	while($row=mysql_fetch_array($res))
	{
	?>
	<tr>
		<td><?php echo $row[0]?></td>
		<td><?php echo $row[1]?></td>
		<td><?php echo $row[2]?></td>
		
	</tr>
	<?php
	}
	?>
</table>
<hr />
<div><?php echo $PAGINADOR->ver_pagina("index.php")?></div>
</div>
</body>
</html>