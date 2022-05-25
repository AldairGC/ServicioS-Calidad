<?php
session_start();
$no='Administrador del Sistema';
?>
	<meta name="author" content="Luka Cvrk (www.solucija.com)" />
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/main.css" type="text/css" />
	<title>Abstract Studio</title>

	<div id="content">
		<div id="logo"><br>
                     <img src=SIRCA01.jpg alt="kkk">
			
		</div>


		
		<div id="intro"><br><br>
	      <?php echo $no; ?><a href="indexx.html"><img src="exit.jpg" width="30" border="0" /><center><h2><b><i>Coordinacion del Sistema de <br> Gestion de la Calidad.........</h2></i></b></a>
			<div id="login">
				
                        <div id="menu">
                        <ul>




<?php
$var1=$_SESSION['usuario'];
$var2=$_SESSION['clave'];





include('menus.php');
?>
</ul>
</div>
                               
			</div>

                    </div>
<ul>
</map>
</body>
</html>

				 <center><table width="50%" border="5px" bordercolor="black">
              			 <tr>



<?php
$var1 = $_SESSION['clave'];
$var2 = $_SESSION['usuario'];



include('conecta.php');

$conforme=$_POST['conforme'];
$folio=$_POST['folio'];
$dete=$_POST['dete'];
$dete1=$_POST['dete1'];
$dete2=$_POST['dete2'];
$dete3=$_POST['dete3'];
$dete4=$_POST['dete4'];
$otra=$_POST['otra'];
$fechanoti=$_POST['fechanoti'];
$area=$_POST['area'];
$area1=$_POST['area1'];
$area2=$_POST['area2'];
$area3=$_POST['area3'];
$auditor=$_POST['auditor'];
$nombreno=$_POST['nombreno'];
$nombreres=$_POST['nombreres'];
$nombreres1=$_POST['nombreres1'];
$nombreres2=$_POST['nombreres2'];
$nombreres3=$_POST['nombreres3'];
$nombre=$_POST['nombre'];
$accionin=$_POST['accionin'];
$resultado=$_POST['resultado'];
$accion1=$_POST['accion1'];
$res1=$_POST['res1'];
$fecha1=$_POST['fecha1'];
$accion2=$_POST['accion2'];
$res2=$_POST['res2'];
$fecha2=$_POST['fecha2'];
$accion3=$_POST['accion3'];
$res3=$_POST['res3'];
$fecha3=$_POST['fecha3'];
$accion4=$_POST['accion4'];
$res4=$_POST['res4'];
$fecha4=$_POST['fecha4'];
$accion5=$_POST['accion5'];
$res5=$_POST['res5'];
$fecha5=$_POST['fecha5'];
$porque1=$_POST['porque1'];
$porque2=$_POST['porque2'];
$porque3=$_POST['porque3'];
$porque4=$_POST['porque4'];
$porque5=$_POST['porque5'];
$otratec=$_POST['otratec'];
$causa1=$_POST['causa1'];
$causa2=$_POST['causa2'];
$causa3=$_POST['causa3'];
$causa4=$_POST['causa4'];
$causa5=$_POST['causa5'];
$causa6=$_POST['causa6'];
$subcausa1=$_POST['subcausa1'];
$subcausa2=$_POST['subcausa2'];
$subcausa3=$_POST['subcausa3'];
$subcausa4=$_POST['subcausa4'];
$subcausa5=$_POST['subcausa5'];
$subcausa6=$_POST['subcausa6'];
$efecto=$_POST['efecto'];
$tipo=$_POST['tipo'];
$efectivo=$_POST['efectivo'];
$auditorarea=$_POST['auditorarea'];
$fechaarea=$_POST['fechaarea'];
$veriefectivo=$_POST['veriefectivo'];
$auditorveri=$_POST['auditorveri'];
$fechaveri=$_POST['fechaveri'];

mysql_query("INSERT INTO ap(conforme,folio,dete,dete1,dete2,dete3,dete4,otra,fechanoti,area,auditor,nombreno,nombreres,nombre,accionin,resultado,accion1,res1,fecha1,accion2,res2,fecha2,accion3,res3,fecha3,accion4,res4,fecha4,accion5,res5,fecha5,porque1,porque2,porque3,porque4,porque5,otratec,causa1,causa2,causa3,causa4,causa5,causa6,subcausa1,subcausa2,subcausa3,subcausa4,subcausa5,subcausa6,efecto,tipo,efectivo,auditorarea,fechaarea,veriefectivo,auditorveri,fechaveri,var1,var2,area1,area2,area3,nombreres1,nombreres2,nombreres3) VALUES ('$conforme','$folio','$dete','$dete1','$dete2','$dete3','$dete4','$otra','$fechanoti','$area','$auditor','$nombreno','$nombreres','$nombre','$accionin','$resultado','$accion1','$res1','$fecha1','$accion2','$res2','$fecha2','$accion3','$res3','$fecha3','$accion4','$res4','$fecha4','$accion5','$res5','$fecha5','$porque1','$porque2','$porque3','$porque4','$porque5','$otratec','$causa1','$causa2','$causa3','$causa4','$causa5','$causa6','$subcausa1','$subcausa2','$subcausa3','$subcausa4','$subcausa5','$subcausa6','$efecto','$tipo','$efectivo','$auditorarea','$fechaarea','$veriefectivo','$auditorveri','$fechaveri','$var1','$var2','$area1','$area2','$area3','$nombreres1','$nombreres2','$nombreres3')",$link); 










echo "<td></td>";
echo "<td bgcolor=ffffff><b><center>Se han insertado correctamente los datos a la Base de Datos...</center></td>";
echo "<td></td>";
echo "</table>";
echo "<br><br>";
mysql_close($link);
?>






