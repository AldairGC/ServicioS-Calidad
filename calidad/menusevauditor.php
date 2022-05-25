<?php
session_start();
$var1=$_SESSION['usuario'];
$var2=$_SESSION['clave'];

include('conecta.php');
$consultaa=mysql_query("SELECT * FROM areas1 where passauditor='$var2'",$link);
				while($row=mysql_fetch_array($consultaa))
				{



    
					$nomcal=$row['nomcal'];
					$passauditor=$row['passauditor'];
                                                            }


?>

      <li><font size=2><a href=leerr.php>Correctivas</li></a></font>
      <li><font size=2><a href=leer33.php>Preventivas</li></a></font>
      <li><font size=2><a href=leer66.php>Correccion</li></a></font>
<li><font size=2><a href=menu2.php>Menu Principal</li></a></font>

<li></li>
<li></li>
<li><b><h3>MENU AUDITOR:  <?php echo $nomcal; ?></h3></b></li>

