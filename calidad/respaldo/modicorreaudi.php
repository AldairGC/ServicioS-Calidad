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
</html><br><br><br>
<br>
  <center>           
             
              <?php
                                $numero=0;
				include ('conecta.php');

			 	
				$idco=$_POST['idco'];



				$consulta1=mysql_query("SELECT * FROM areas WHERE passauditor='$var2'",$link);
				while($row=mysql_fetch_array($consulta1))
			{

					
					$nomcal=$row['nomcal'];
                         }




				
				$consulta=mysql_query("SELECT * FROM corre WHERE idco='$idco' and lider='$nomcal'",$link);
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
                                        $numero=$idco;

                         }



                       if($idco=$numero)
                          {
                                echo "<form action=modi1correaudi.php method=post>";
				echo "<input type=hidden name=idco value=$idco>";
        echo "<center>";

	echo "<table border=1 width=50%>";
		echo "<tr>";
		echo "<td align=center><center><font size=4 color=#000000 face=Arial, Helvetica, sans-serif><B>UNIVERSIDAD TECNOLOGICA DE PUEBLA<BR />CORRECCION</B></font></center></td>";
		echo "</tr>";
       echo " </table>";
	echo "<table border=1 width=50%>";
		echo "<tr bgcolor=#848484>";
		echo "<td align=left width=800><font color=#FFFFFF>1.- Declaración de los hallazgos</font></td>";
               echo " <td width=160><font color=#FFFFFF>Folio:$folio</font></td>";
		echo "</tr>";
        
		echo "<tr><td>Nombre del Documento o Formato:$nomdoc</td>";
                echo "<td>Codigo:$codigo</td>";
                  
		echo "</tr>";
       echo " </table>";
       echo " <table border=1 width=50%>";
              echo "  <tr>";
		echo "<td>Descripción del Hallazgo:</td>";
		echo "</tr>";
               echo " <tr>";
		echo "<td>$hallazgo</td>";
		echo "</tr>";
        echo "</table>";

	echo "<table border=3 width=50%>";
		echo "<tr>";
		echo "<td>Fecha de Notificación:$notifica</td>";


                                  echo "<td><select name=area>";
                                  echo "<option value='$area'>$area";

				include ('conecta.php');


			 	


				$consulta=mysql_query("SELECT * FROM areas",$link);
				while($row=mysql_fetch_array($consulta))

				{
					$idarea=$row['idarea'];
					$clave=$row['clave'];
					$nomarea=$row['nomarea'];
					$nomcal=$row['nomcal'];





                                        echo "<option value='$nomarea'>$nomarea";
                                        



								
				}
                                        echo "</td>";
                                        echo "</select>";

                                  echo "<td><select name=lider>";
                                  echo "<option value='$lider'>$lider";


				include ('conecta.php');



				$consulta=mysql_query("SELECT * FROM areas",$link);
				while($row=mysql_fetch_array($consulta))

				{
					$idarea=$row['idarea'];
					$clave=$row['clave'];
					$nomarea=$row['nomarea'];
					$nomcal=$row['nomcal'];





                                        echo "<option value='$nomcal'>$nomcal";
                                        



								
				}
                                        echo "</td></tr>";
                                        echo "</select>";







		echo "</tr>";
		echo "<tr>";
		echo "<td>$nomhalla</td>";


                                  echo "<td><select name=nombres>";
                                  echo "<option value='$nombres'>$nombres";


				include ('conecta.php');


				$consulta=mysql_query("SELECT * FROM areas",$link);
				while($row=mysql_fetch_array($consulta))

				{
					$idarea=$row['idarea'];
					$clave=$row['clave'];
					$nomarea=$row['nomarea'];
					$nomcal=$row['nomcal'];
					$titu=$row['titu'];





                                        echo "<option value='$titu'>$titu";
                                        



								
				}
                                        echo "</td>";
                                        echo "</select>";



		echo "<td></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td align=center>Nombre y Firma de quien reporta el hallazgo</td>";
		echo "<td align=center>Nombre y Firma del Responsable</td>";
		echo "<td align=center>Nombre y Firma</td>";
		echo "</tr>";
       echo " </table>";


	echo "<table border=1 width=50%>";
		echo "<tr bgcolor='#848484'>";
		echo "<td align=left width=800><font color=#FFFFFF>2.- Descripción de la Corrección</font></td>";
		echo "</tr>";
        echo "</table>";
	echo "<table border=3 width=50%>";
		echo "<tr>";
		echo "<td><textarea name=descrip cols=60 rows=10>$descrip</textarea></td>";
		echo "</tr>";
       echo "</table>";



	echo "<table border=1 width=50%>";
		echo "<tr bgcolor=#848484>";
		echo "<td align=left width=800><font color=#FFFFFF>3.- Verificacion de la Corrección</font></td>";
		echo "</tr>";
       echo " </table>";
	echo "<table border=1 width=50%>";
		echo "<tr>";
		echo "<td>Acciones Realizadas:</td>";
                echo "<td>Nombre del Auditor:<input type=text name=audito value='$audito'></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><textarea name=accion cols=60 rows=5 maxlength=130>$accion</textarea></td>";
                echo "<td>Fecha:<input type=date name=fecha value=$fecha></td>";
		echo "</tr>";

        echo "</table>";

		
            			echo "<input type=submit value='De Enter para Modificar la Informacion'>";
             			echo "</form>";


                          }
                         else
                          {
                          echo "<table border='1' width=50% bordercolor='black'>";
		          echo "<tr bgcolor='#848484'>";                  
               	          echo "<td bgcolor=ffffff align=center><b>No se encuentra el registro en la Base de Datos</td>";
                          echo "</table><br><br>";
                          }


        			  mysql_close($link);	
							 
				?>
                
             
             
             
             
             
            
              
                   
           </div>
     
     </div>

    
  </body>
</html>

