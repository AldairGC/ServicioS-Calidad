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
include_once("conecta.php");

$idac=$_POST['idac'];
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
$efecto=$_POST['efecto'];
$subcausa1=$_POST['subcausa1'];
$subcausa2=$_POST['subcausa2'];
$subcausa3=$_POST['subcausa3'];
$subcausa4=$_POST['subcausa4'];
$subcausa5=$_POST['subcausa5'];
$subcausa6=$_POST['subcausa6'];



				mysql_query("UPDATE ap SET idac='$idac', conforme='$conforme', folio='$folio', dete='$dete', dete1='$dete1', dete2='$dete2', dete3='$dete3', dete4='$dete4', otra='$otra', fechanoti='$fechanoti', area='$area', area1='$area1', area2='$area2', area3='$area3', auditor='$auditor', nombreno='$nombreno', nombreres='$nombreres', nombreres1='$nombreres1',nombreres2='$nombreres2',nombreres3='$nombreres3',nombre='$nombre', accionin='$accionin', resultado='$resultado', accion1='$accion1', res1='$res1', fecha1='$fecha1' , accion2='$accion2', res2='$res2', fecha2='$fecha2', accion3='$accion3', res3='$res3', fecha3='$fecha3', accion4='$accion4', res4='$res4', fecha4='$fecha4', accion5='$accion5', res5='$res5', fecha5='$fecha5', porque1='$porque1', porque2='$porque2', porque3='$porque3', porque4='$porque4', porque5='$porque5', otratec='$otratec', causa1='$causa1', causa2='$causa2', causa3='$causa3', causa4='$causa4', causa5='$causa5', causa6='$causa6', subcausa1='$subcausa1', subcausa2='$subcausa2', subcausa3='$subcausa3', subcausa4='$subcausa4', subcausa5='$subcausa5', subcausa6='$subcausa6', efecto='$efecto' WHERE idac='$idac'",$link);


				
			        echo "<td bgcolor=ffffff align=center><b>Se ha Modificado la Informacion</td>";   
             mysql_close($link);
           
			?>
             
           </div>
       
     </div>
     
  </body>
</html>

