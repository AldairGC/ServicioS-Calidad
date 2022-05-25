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




             <center><h3>Lista de correcciones Levantadas por el Auditor</h3><br><br>
             
             <center><table width="40%" border="4px" bordercolor="black">
              <tr>
              <td align="center"><b>No.</td>
              <td align="center"><b>Folio</td>
              <td align="center"><b>Nombre del Auditor</td>
              <td align="center"><b>Modificacion</td>

              </tr>
              <?php
$va1=$_POST['va1'];
$va2=$_POST['va2'];

include('conecta.php');



				$consulta1=mysql_query("SELECT * FROM areas WHERE passusu='$va1'",$link);
				while($row=mysql_fetch_array($consulta1))
				{
                                  $nomarea=$row['nomarea'];
                                  $y=1;


                                 }

if($y==1)
{


				$consulta=mysql_query("SELECT * FROM corre WHERE area='$nomarea' or area1='$nomarea' or area2='$nomarea' or area3='$nomarea'",$link);
				while($row=mysql_fetch_array($consulta))
				{
					$idco=$row['idco'];
					$nomdoc=$row['nomdoc'];
					$folio=$row['folio'];
					$codigo=$row['codigo'];
					$hallazgo=$row['hallazgo'];
					$notifica=$row['notifica'];
					$area=$row['area'];
					$area1=$row['area1'];
					$area2=$row['area2'];
					$area3=$row['area3'];
					$lider=$row['lider'];
					$nomhalla=$row['nomhalla'];
					$nomres=$row['nomres'];
					$descrip=$row['descrip'];
					$accion=$row['accion'];
					$audito=$row['audito'];
					$fecha=$row['fecha'];

			  	 echo "<td>$idco</td>";
        			 echo "<td>$folio</td>";	
				 echo "<td>$lider</td>";
				 echo "<form action=modicorr.php method=post>";
                                 echo "<input type=hidden name=idco value=$idco>";
                                 echo "<input type=hidden name=folio value=$folio>";

                                 echo "<td><input type=submit value='modificar accion' name=modifica>";
                                 echo "</form>";

				  echo "</tr>";				
				}
				echo "</table>";
				?>
             </table>


             <center><h3>Lista de acciones Levantadas por el Usuario</h3><br><br>
             
             <center><table width="40%" border="4px" bordercolor="black">
              <tr>
              <td align="center"><b>No.</td>
              <td align="center"><b>Folio</td>
              <td align="center"><b>Nombre del Auditor</td>


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


				$consulta=mysql_query("SELECT * FROM corre WHERE var1='$var1' and lider<>'$nomcal' order by lider",$link);
				while($row=mysql_fetch_array($consulta))
				{

					$idco=$row['idco'];
					$nomdoc=$row['nomdoc'];
					$folio=$row['folio'];
					$codigo=$row['codigo'];
					$hallazgo=$row['hallazgo'];
					$notifica=$row['notifica'];
					$area=$row['area'];
					$lider=$row['lider'];
					$nomhalla=$row['nomhalla'];
					$nomres=$row['nomres'];
					$descrip=$row['descrip'];
					$accion=$row['accion'];
					$audito=$row['audito'];
					$fecha=$row['fecha'];

			  	 echo "<td>$idco</td>";
        			 echo "<td>$folio</td>";	
				 echo "<td>$lider</td>";


				  echo "</tr>";				
				}
				echo "</table>";



				

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
             

