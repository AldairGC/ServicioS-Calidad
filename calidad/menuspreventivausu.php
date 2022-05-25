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
      
      <li><font size=2><a href=preventivausu.php>Altas</li></a></font>
      <li><font size=2><a href=consultapreusu1.php>Consulta</li></a></font>
      <li><font size=2><a href=formato_productos1.php>Subir Evidencias</li></a></font>
      <li><a href=menu1.php><font size=2>Menu Principal</font></a>
<li></li>

<li><b><h3>MENU DEL USUARIO:  <?php echo $nomcal; ?></h3></b></li>
   

</ul>