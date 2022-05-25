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
<center>			 <table width="50%" border="5px" bordercolor="black">
              			 <tr>
             
             
                       <?php
include_once("conecta.php");

$idco=$_POST['idco'];
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


				
				mysql_query("UPDATE corre SET idco='$idco', nomdoc='$nomdoc', folio='$folio', codigo='$codigo', hallazgo='$hallazgo', notifica='$notifica', area='$area', lider='$lider', nomhalla='$nomhalla', nomres='$nomres', descrip='$descrip', accion='$accion', audito='$audito', fecha='$fecha' WHERE idco='$idco'",$link);
				
			        echo "<td bgcolor=ffffff align=center><b>Se ha Modificado la Informacion</td>";   
             mysql_close($link);
           
			?>
             
           </div>
       
     </div>
     
  </body>
</html>

