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
             			 	                     

                                </div>		
        </div>

  </body>
</html>



<?php

include('conecta.php');


$clave=$_POST['clave'];
$nomarea=$_POST['nomarea'];
$nomcal=$_POST['nomcal'];
$titu=$_POST['titu'];
$usuauditor=$_POST['usuauditor'];
$passauditor=$_POST['passauditor'];
$usuusu=$_POST['usuusu'];
$passusu=$_POST['passusu'];


mysql_query("INSERT INTO areas(clave,nomarea,nomcal,titu,usuauditor,passauditor,usuusu,passusu) VALUES ('$clave','$nomarea','$nomcal','$titu','$usuauditor','$passauditor','$usuusu','$passusu')",$link); 
echo "<td></td>";
echo "<td bgcolor=ffffff><b><center>Se han insertado correctamente los datos a la Base de Datos...</center></td>";
echo "<td></td>";
echo "</table>";
echo "<br><br>";
mysql_close($link);
?>






