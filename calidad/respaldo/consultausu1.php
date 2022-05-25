<?php
session_start();
$no='Usuario';
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





include('menusee.php');
?>
</ul>
</div>
                               
			</div>

                    </div>
<ul>
</map>
</body>
</html>				 
             			 	                     

             <center><h3>Lista de acciones correctivas Levantadas por el Auditor</h3><br><br>
             
             <center><table width="40%" border="4px" bordercolor="black">
              <tr>
              <td bgcolor=#ffffff align="center"><b>No.</td>
              <td bgcolor=#ffffff align="center"><b>Folio</td>
              <td bgcolor=#ffffff align="center"><b>Nombre del Auditor</td>
              <td bgcolor=#ffffff align="center"><b>Modificacion</td>

              </tr>
              <?php
$va1=$_POST['va1'];
$va2=$_POST['va2'];

include('conecta.php');


				$consulta1=mysql_query("SELECT * FROM areas WHERE passusu='$va1'",$link);
				while($row=mysql_fetch_array($consulta1))
				{
                                  $nomarea=$row['nomarea'];
                                  $x=1;
                                  


                                 }


if($x==1)
{


				$consulta=mysql_query("SELECT * FROM ac WHERE area='$nomarea' or area1='$nomarea' or area2='$nomarea' or area3='$nomarea'",$link);
				while($row=mysql_fetch_array($consulta))
				{
					$idac=$row['idac'];
					$var1=$row['var1'];
					$var2=$row['var2'];
					$conforme=$row['conforme'];
					$folio=$row['folio'];
					$dete=$row['dete'];
					$otra=$row['otra'];
					$fechanoti=$row['fechanoti'];
					$area=$row['area'];
					$area1=$row['area1'];
					$area2=$row['area2'];
					$area3=$row['area3'];
					$auditor=$row['auditor'];
					$nombreno=$row['nombreno'];
					$nombreres=$row['nombreres'];
					$nombre=$row['nombre'];
					$accionin=$row['accionin'];
					$resultado=$row['resultado'];
					$accion1=$row['accion1'];
					$res1=$row['res1'];
					$fecha1=$row['fecha1'];
					$accion2=$row['accion2'];
					$res2=$row['res2'];
					$fecha2=$row['fecha2'];
					$accion3=$row['accion3'];
					$res3=$row['res3'];
					$fecha3=$row['fecha3'];
					$accion4=$row['accion4'];
					$res4=$row['res4'];
					$fecha4=$row['fecha4'];
					$accion5=$row['accion5'];
					$res5=$row['res5'];
					$fecha5=$row['fecha5'];

			  	 echo "<td bgcolor=#ffffff>$idac</td>";
        			 echo "<td bgcolor=#ffffff>$folio</td>";	


				 echo "<td bgcolor=#ffffff>$auditor</td>";
				 echo "<form action=modiusu.php method=post>";
                                 echo "<input type=hidden name=idac value=$idac>";
                                 echo "<input type=hidden name=folio value=$folio>";

                                 echo "<td bgcolor=#ffffff><input type=submit value='modificar accion' name=modifica>";
                                 echo "</form>";

				  echo "</tr>";				
				}
				echo "</table>";
				?>
             </table>


             <center><h3>Lista de acciones correctivas Levantadas por el Usuario</h3><br><br>
             
             <center><table width="40%" border="4px" bordercolor="black">
              <tr>
              <td bgcolor=#ffffff align="center"><b>No.</td>
              <td bgcolor=#ffffff align="center"><b>Folio</td>
              <td bgcolor=#ffffff align="center"><b>Nombre del Auditor</td>


              </tr>
              <?php
$var1=$_POST['var1'];
$var2=$_POST['var2'];

include('conecta.php');

				$consulta1=mysql_query("SELECT * FROM areas WHERE usuusu='$var1'",$link);
				while($row=mysql_fetch_array($consulta1))
				{
                                  $nomcal=$row['nomcal'];

                                 }


				$consulta=mysql_query("SELECT * FROM ac WHERE var1='$var1' and auditor<>'$nomcal' order by auditor",$link);
				while($row=mysql_fetch_array($consulta))
				{
					$idac=$row['idac'];
					$conforme=$row['conforme'];
					$folio=$row['folio'];
					$dete=$row['dete'];
					$otra=$row['otra'];
					$fechanoti=$row['fechanoti'];
					$area=$row['area'];
					$auditor=$row['auditor'];
					$nombreno=$row['nombreno'];
					$nombreres=$row['nombreres'];
					$nombre=$row['nombre'];
					$accionin=$row['accionin'];
					$resultado=$row['resultado'];
					$accion1=$row['accion1'];
					$res1=$row['res1'];
					$fecha1=$row['fecha1'];
					$accion2=$row['accion2'];
					$res2=$row['res2'];
					$fecha2=$row['fecha2'];
					$accion3=$row['accion3'];
					$res3=$row['res3'];
					$fecha3=$row['fecha3'];
					$accion4=$row['accion4'];
					$res4=$row['res4'];
					$fecha4=$row['fecha4'];
					$accion5=$row['accion5'];
					$res5=$row['res5'];
					$fecha5=$row['fecha5'];

			  	 echo "<td bgcolor=#ffffff>$idac</td>";
        			 echo "<td bgcolor=#ffffff>$folio</td>";	


				 echo "<td bgcolor=#ffffff>$auditor</td>";

				  echo "</tr>";				
				}
				echo "</table>";
				
             echo "</table>";


                                echo "</div>";		
        echo "</div>";
}
else
{
echo "Usuario o Contraseña Incorrecta";
}
mysql_close($link);
?>

  </body>
</html>
             

