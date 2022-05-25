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


  <li><font size=3><a href=menucorrectivaaudi.php>Correctivas</font></a>
<li><font size=3><a href=menupreventivaaudi.php>Preventivas</font></a>
<li><font size=3><a href=menucorreaudi.php>Correccion</font></a>


 </li>




  <li><font size=3><a href=menuaccionesauditor.php>Alerta de Acciones</font></a>



  <li><a href=evauditor.php><font size=3>Evidencias</a></font> </li>
<li><a href=index.php><img src=exit.jpg></a></li>

<li></li>

<li><b><h3>MENU AUDITOR:  <?php echo $nomcal; ?></h3></b></li>
</ul>