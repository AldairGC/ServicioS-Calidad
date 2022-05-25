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
             			 	                     


             
             <table width="60%" border="4px" bordercolor="black">
              <tr>
              <td bgcolor=ffffff align="center"><b>No.</td>
              <td bgcolor=ffffff align="center"><b>clave</td>
              <td bgcolor=ffffff align="center"><b>Nombre del Area</td>
              <td bgcolor=ffffff align="center"><b>Nombre del Auditor</td>
              <td bgcolor=ffffff align="center"><b>Nombre del Titular</td>
              <td bgcolor=ffffff align="center"><b>Usuario Auditor</td>
              <td bgcolor=ffffff align="center"><b>Password Auditor</td>
              <td bgcolor=ffffff align="center"><b>Usuario Usuario</td>
              <td bgcolor=ffffff align="center"><b>Password Usuario</td>

              </tr>
              <?php

include('conecta.php');
				$consulta=mysql_query("SELECT * FROM areas",$link);
				while($row=mysql_fetch_array($consulta))
				{
					$idarea=$row['idarea'];
					$clave=$row['clave'];
					$nomarea=$row['nomarea'];
					$nomcal=$row['nomcal'];
					$titu=$row['titu'];
					$usuauditor=$row['usuauditor'];
					$passauditor=$row['passauditor'];
					$usuusu=$row['usuusu'];
					$passusu=$row['passusu'];

			  	 echo "<td bgcolor=ffffff>$idarea</td>";
				 echo "<td bgcolor=ffffff>$clave</td>";
				 echo "<td bgcolor=ffffff>$nomarea</td>";
				 echo "<td bgcolor=ffffff>$nomcal</td>";
				 echo "<td bgcolor=ffffff>$titu</td>";
				 echo "<td bgcolor=ffffff>$usuauditor</td>";
				 echo "<td bgcolor=ffffff>$passauditor</td>";
				 echo "<td bgcolor=ffffff>$usuusu</td>";
				 echo "<td bgcolor=ffffff>$passusu</td>";
				  echo "</tr>";				
				}
				echo "</table>";
mysql_close($link);
				?>
             </table>

                                </div>		
        </div>

  </body>
</html>
             

