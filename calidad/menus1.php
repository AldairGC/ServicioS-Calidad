<?php
session_start();
$var1=$_SESSION['usuario'];
$var2=$_SESSION['clave'];

include('conecta.php');
$consultaa=mysql_query("SELECT * FROM areas1 where passusu='$var2'",$link);
				while($row=mysql_fetch_array($consultaa))
				{



    
					$nomcal=$row['nomcal'];
					$passauditor=$row['passauditor'];
                                                            }


?>
<ul>


  <li><font size=3><a href=menucorrectivausu.php>Correctivas</font></a>
<li><font size=3><a href=menupreventivausu.php>Preventivas</font></a>
<li><font size=3><a href=menucorreusu.php>Correccion</font></a>
<li><font size=3><a href=menuaccionesusu.php>Alerta de Acciones</font></a>
<li><a href=index.php><img src=exit.jpg></a></li>

<li></li>

<li><b><h3>MENU DEL USUARIO:  <?php echo $nomcal; ?></h3></b></li>




</ul>