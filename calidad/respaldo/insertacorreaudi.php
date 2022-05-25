<?php
session_start();
$no='Auditor';
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





include('menuse.php');
?>
</ul>
</div>
                               
			</div>

                    </div>
<ul>
</map>
</body>
</html>
<br><br><br><br>
				 <center><table width="50%" border="5px" bordercolor="black">
              			 <tr>
             			 	                     

                                </div>		
        </div>

  </body>
</html>



<?php
$var1 = $_SESSION['clave'];
$var2 = $_SESSION['usuario'];

include_once("conecta.php");

$nomdoc=$_POST['nomdoc'];
$folio=$_POST['folio'];
$codigo=$_POST['codigo'];
$hallazgo=$_POST['hallazgo'];
$notifica=$_POST['notifica'];
$area=$_POST['area'];
$lider=$_POST['lider'];
$nomhalla=$_POST['nomhalla'];
$nomres=$_POST['nomres'];
$descrip=$_POST['descrip'];
$accion=$_POST['accion'];
$audito=$_POST['audito'];
$fecha=$_POST['fecha'];
$tipo=$_POST['tipo'];


mysql_query("INSERT INTO corre(nomdoc,folio,codigo,hallazgo,notifica,area,lider,nomhalla,nomres,descrip,accion,audito,fecha,tipo,var1,var2) VALUES ('$nomdoc','$folio','$codigo','$hallazgo','$notifica','$area','$lider','$nomhalla','$nomres','$descrip','$accion','$audito','$fecha','$tipo','$var1','$var2')",$link); 
echo "<td></td>";
echo "<center><td bgcolor=ffffff><b>Se han insertado correctamente los datos a la Base de Datos...</center></td>";
echo "<td></td>";
echo "</table>";
echo "<br><br>";
mysql_close($link);
?>
</center>
