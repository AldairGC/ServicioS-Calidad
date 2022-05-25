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
<ul>
      
      <li><font size=2><a href=horacorrectiva-audi.php>Correctivas</li></a></font>
      <li><font size=2><a href=horapreventiva-audi.php>Preventivas</li></a></font>
      <li><font size=2><a href=horacorreccion-audi.php>Correccion</li></a></font>
      <li><a href=menu2.php><font size=2>Menu Principal</font></a>
<li></li>

<li><b><h3>MENU AUDITOR:  <?php echo $nomcal; ?></h3></b></li>

   

</ul>