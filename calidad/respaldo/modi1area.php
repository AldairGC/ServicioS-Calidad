﻿<?php
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

$idarea=$_POST['idarea'];
$clave=$_POST['clave'];
$nomarea=$_POST['nomarea'];
$nomcal=$_POST['nomcal'];
$titu=$_POST['titu'];



				
				mysql_query("UPDATE areas SET idarea='$idarea', clave='$clave', nomarea='$nomarea', nomcal='$nomcal', titu='$titu' WHERE idarea='$idarea'",$link);
				
			        echo "<td bgcolor=ffffff align=center><b>Se ha Modificado la Informacion</td>";   
             mysql_close($link);
           
			?>
             
           </div>
       
     </div>
     
  </body>
</html>
