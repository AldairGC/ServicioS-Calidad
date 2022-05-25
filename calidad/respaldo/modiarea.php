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
              <?php
                                $numero=0;
			 	$idarea=$_POST['idarea'];
			include_once("conecta.php");
				
				$consulta=mysql_query("SELECT * FROM areas WHERE idarea='$idarea'",$link);
				while($row=mysql_fetch_array($consulta))
			{
                                        $numero=$idarea;
					$idarea=$row['idarea'];
					$clave=$row['clave'];
					$nomarea=$row['nomarea'];
					$nomcal=$row['nomcal'];
					$titu=$row['titu'];
                         }



                       if($idarea=$numero)
                          {
                                echo "<form action=modi1area.php method=post>";
				echo "<input type=hidden name=idarea value=$idarea>";

	echo "<table border=1 width=50%>";
		echo "<tr>";
		echo "<td align=center><center><font size=4 color=#000000 face=Arial, Helvetica, sans-serif><B>UNIVERSIDAD TECNOLOGICA DE PUEBLA<BR />CATALOGO DE AREAS</B></font></center></td>";
		echo "</tr>";
        echo "</table>";
	echo "<table border=3 width=50%>";
		echo "<tr>";
		echo "<td><b>Calve:<input type=text name=clave size=3 value='$clave'></td><br></tr><tr>";
		echo "<td><b>Area:<input type=text name=nomarea size=80 value='$nomarea'></td><br></tr><tr>";
		echo "<td><b>Nombre del Auditor:<input type=text name=nomcal size=60 value='$nomcal'></td></tr><tr>";
		echo "<td><b>Nombre del Titular:<input type=text name=titu size=60 value='$titu'></td>";
		echo "</tr>";
       echo " </table><br><br>";


		
            			echo "<input type=submit value='De Enter para Modificar la Informacion'>";
             			echo "</form>";


                          }
                         else
                          {
                          echo "<table border='1' width=50% bordercolor='black'>";
		          echo "<tr bgcolor='#669933'>";                  
               	          echo "<td bgcolor=ffffff align=center><b>No se encuentra el registro en la Base de Datos</td>";
                          echo "</table><br><br>";
                          }

mysql_close($link);
        			  	
							 
				?>
                
             
             
             
             
             
            
              
                   
           </div>
     
     </div>

     
  </body>
</html>

