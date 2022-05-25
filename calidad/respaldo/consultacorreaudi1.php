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
				 
             			 	                     

<br><br><br><br>
            <center> 
             <table width="30%" border="4px" bordercolor="black">
              <tr>
              <td bgcolor=ffffff ><b>No.</td>
              <td bgcolor=ffffff ><b>Folio</td>
              <td bgcolor=ffffff ><b>Nombre del Auditor</td>

              </tr>
              <?php
$var1=$_POST['var1'];
$var2=$_POST['var2'];

include('conecta.php');
				$consulta=mysql_query("SELECT * FROM corre WHERE var1='$var1' and var2='$var2'",$link);
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

			  	 echo "<td bgcolor=ffffff>$idco</td>";
				 echo "<td bgcolor=ffffff>$folio</td>";
				 echo "<td bgcolor=ffffff>$lider</td>";
				  echo "</tr>";				
				}
				echo "</table>";
mysql_close($link);
				?>
             </table>

                                </div>		
        </div>
</center>
  </body>
</html>
             

