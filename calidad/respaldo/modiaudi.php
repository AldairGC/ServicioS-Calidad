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
              <?php
                                 echo "<form action=modi1audi.php method=post>";
                                 echo "<input type=hidden name=dete value=''>";
                                 echo "<input type=hidden name=dete1 value=''>";
                                 echo "<input type=hidden name=dete2 value=''>";
                                 echo "<input type=hidden name=dete3 value=''>";
                                 echo "<input type=hidden name=dete4 value=''>";
                                $numero=0;
				$idac=$_POST['idac'];
				include_once("conecta.php");


				$consulta1=mysql_query("SELECT * FROM areas WHERE passauditor='$var2'",$link);
				while($row=mysql_fetch_array($consulta1))
			{

					
					$nomcal=$row['nomcal'];
                         }







				$consulta=mysql_query("SELECT * FROM ac WHERE idac='$idac' and auditor='$nomcal'",$link);
				while($row=mysql_fetch_array($consulta))
			{
                                        $numero=$idac;
					$idac=$row['idac'];
					$conforme=$row['conforme'];
					$folio=$row['folio'];
					$dete=$row['dete'];
					$dete1=$row['dete1'];
					$dete2=$row['dete2'];
					$dete3=$row['dete3'];
					$dete4=$row['dete4'];
					$otra=$row['otra'];
					$fechanoti=$row['fechanoti'];
					$area=$row['area'];
					$area1=$row['area1'];
					$area2=$row['area2'];
					$area3=$row['area3'];
					$auditor=$row['auditor'];
					$nombreno=$row['nombreno'];
					$nombreres=$row['nombreres'];
					$nombreres1=$row['nombreres1'];
					$nombreres2=$row['nombreres2'];
					$nombreres3=$row['nombreres3'];
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
					$porque1=$row['porque1'];
					$porque2=$row['porque2'];
					$porque3=$row['porque3'];
					$porque4=$row['porque4'];
					$porque5=$row['porque5'];
					$otratec=$row['otratec'];
					$causa1=$row['causa1'];
					$causa2=$row['causa2'];
					$causa3=$row['causa3'];
					$causa4=$row['causa4'];
					$causa5=$row['causa5'];
					$causa6=$row['causa6'];
					$efecto=$row['efecto'];
					$subcausa1=$row['subcausa1'];
					$subcausa2=$row['subcausa2'];
					$subcausa3=$row['subcausa3'];
					$subcausa4=$row['subcausa4'];
					$subcausa5=$row['subcausa5'];
					$subcausa6=$row['subcausa6'];

					$tipo=$row['tipo'];
					$efectivo=$row['efectivo'];
					$auditorarea=$row['auditorarea'];
					$fechaarea=$row['fechaarea'];
					$veriefectivo=$row['veriefectivo'];
					$auditorveri=$row['auditorveri'];
					$fechaveri=$row['fechaveri'];
                         }



                       if($idac=$numero)
                          {
                                

				echo "<input type=hidden name=idac value=$idac>";



              echo "<center><table width='80%' border=3 bordercolor='black'>";
      
              echo "<tr>";
              echo "<td bgcolor=ffffff><h5><b><img src=logo.jpg hspace='20'><center>UNIVERSIDAD TECNOLOGICA DE PUEBLA  / ACCION CORRECTIVA</td>";
              echo "</tr>";
              echo "</table></center><center>";
	




              echo "<table width='80%' border='3px' bordercolor='black'>";
              echo "<tr>";
              echo "<td><b>1.- Declaración de la no Conformidad</td>";
              echo "<td><b><center>Folio:$folio</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td>$conforme</td>";
              echo "<td><b>Detectada en:$dete:<u>$dete1:<u>$dete2:<u>$dete3:<u>$dete4</td>";

			 echo "<tr>";
              echo "<td></td>";
              echo "<td><b>Otra:$otra</td>";
              echo "</tr>";
              echo "</table>";
              echo "<table width='80%' border='3px' bordercolor='black'>";
              echo "<tr>";
              echo "<td align=center><b>Fecha de Notificación:$fechanoti</td>";
              echo "<td align=center><b>Area:$area Responsable:$nombreres</td>";
              echo "<td align=center><b>Auditor del Area:</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td align=center>$nombreno</td>";
              echo "<td align=center><b>Area 2:$area1 Responsable:$nombreres1</td>";
              echo "<td>$auditor</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td><b>Nombre y Firma de quien informa la No Conformidad:</td>";
              echo "<td align=center><b>Area 3:$area2 Responsable:$nombreres2</td>";
              echo "<td align=center>$nombre</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td align=center><b></td>";
              echo "<td align=center><b>Area 4:$area3 Responsable:$nombreres3</td>";
              echo "<td align=center><b>Nombre y Firma:</td>";
              echo "</tr>";
              echo "</table>";
			  
              echo "<table width='80%' border='3px' bordercolor='black'>";
              echo "<tr>";
              echo "<td align=left><b>2.- Accion Inmedita:</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td>$accionin</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td align=left><b>3.- Resultado del Análisis de Causa Raíz de la NC (Utilizar Técnicas al 
              Reverso):</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td>$resultado</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td align=left><b>4.- Acciones a implantar para asegurar que no vuelva a ocurrir la No Conformidad:</td>";
              echo "</tr>";
              echo "</table>";
              echo "<table width='80%' border='3px' bordercolor='black'>";


              echo "<tr>";
              echo "<td align=center><b>Acciones:</td>";
              echo "<td align=center><b>Responsables:</td>";
              echo "<td align=center><b>Fecha:</td>";
              echo "</tr>";

              echo "<tr>";
              echo "<td>$accion1</td>";
              echo "<td>$res1</td>";
              echo "<td>$fecha1</td>";
              echo "</tr>";

              echo "<tr>";
              echo "<td>$accion2</td>";
              echo "<td>$res2</td>";
              echo "<td>$fecha2</td>";
              echo "</tr>";

              echo "<tr>";
              echo "<td>$accion3</td>";
              echo "<td>$res3</td>";
              echo "<td>$fecha3</td>";
              echo "</tr>";

              echo "<tr>";
              echo "<td>$accion4</td>";
              echo "<td>$res4</td>";
              echo "<td>$fecha4</td>";
              echo "</tr>";

              echo "<tr>";
              echo "<td>$accion5</td>";
              echo "<td>$res5</td>";
              echo "<td>$fecha5</td>";
              echo "</tr>";
              echo "</table>";
                echo "<table border='1' width=80% >";
		echo "<tr>";
		echo "<td align=center width=500><font color='black'>5.- Efectividad de la Implantación</font></td>";
                echo "</tr>";
                echo "</table>";
                echo "<table border='1' width=60% >";

                echo "<tr>";
		echo "<td align=center width=500><font color='black'>Que acciones se Implantaron</font></td>";
		echo "<td align=center width=500><font color='black'>Nombre del Auditor del Area</font></td>";
		echo "<td align=center width=500><font color='black'>Fecha</font></td>";
		echo "</tr>";
        
		echo "<tr><td><textarea name=efectivo cols=50 rows=5 maxlength=270>$efectivo</textarea></td>";

                       
                                echo "<td><select name=auditorarea>";
                                  echo "<option value='$auditorarea'>$auditorarea";

			 	include("conecta.php");



				$consulta=mysql_query("SELECT * FROM areas",$link);
				while($row=mysql_fetch_array($consulta))

				{
					$idarea=$row['idarea'];
					$clave=$row['clave'];
					$nomarea=$row['nomarea'];
					$nomcal=$row['nomcal'];
					$titu=$row['titu'];


                                       if($nomcal==''){}else{

                                        echo "<option value='$nomcal'>$nomcal";}
                                        



								
				}
                                     



					echo "<td><input type=date size=10 name=fechaarea value=$fechaarea></td>";


	        	




                           
                

		echo "</tr>";
        echo "</table>";

                echo "<table border='1' width=60% >";
		echo "<tr>";
		echo "<td align=center width=500><font color='black'>Verificacion de la Efectividad</font></td>";
		echo "<td align=center width=500><font color='black'>Nombre del Auditor Interno</font></td>";
		echo "<td align=center width=500><font color='black'>Fecha</font></td>";
		echo "</tr>";
        
		echo "<tr><td><textarea name=veriefectivo cols=50 rows=5 maxlength=270>$veriefectivo</textarea></td>";

                       
                                echo "<td><select name=auditorveri>";
                                  echo "<option value='$auditorveri'>$auditorveri";

				include('conecta.php');


				$consulta=mysql_query("SELECT * FROM areas",$link);
				while($row=mysql_fetch_array($consulta))

				{
					$idarea=$row['idarea'];
					$clave=$row['clave'];
					$nomarea=$row['nomarea'];
					$nomcal=$row['nomcal'];
					$titu=$row['titu'];


                                       if($nomcal==''){}else{

                                        echo "<option value='$nomcal'>$nomcal";}
                                        

								
				}
                                     


                         
					echo "<td><input type=date size=10 name=fechaveri value=$fechaveri></td>";	        	




                           
                

		echo "</tr>";
        echo "</table>";
              echo "<table width='80%' border='3px' bordercolor='black'>";
              echo "<tr>";
              echo "<td align=center><b>Utilice alguna de las siguientes técnicas para el análisis de la Causa - Raíz de la No Conformidad:</td>";
              echo "</tr>";
              echo "</table>";

              echo "<table width='80%' border='3px' bordercolor='black'>";
              echo "<tr>";
              echo "<td align=left><b>A) Técnica de los 5 por ques:</td>";
              echo "</tr>";
              echo "</table>";

              echo "<table width='80%' border='3px' bordercolor='black'>";
              echo "<tr>";
              echo "<td><b>1er Porque?</td>";
              echo "<td><b>2do Porque?</td>";
              echo "<td><b>3er Porque?</td>";
              echo "<td><b>4to Porque?</td>";
              echo "<td><b>5to Porque?</td>";
              echo "</tr>";
              echo "</table>";

              echo "<table width='80%' border='3px' bordercolor='black'>";

              echo "<tr>";
              echo "<td>$porque1</td>";
              echo "<td>$porque2</td>";
              echo "<td>$porque3</td>";
              echo "<td>$porque4</td>";
              echo "<td>$porque5</td>";
              echo "</tr>";
              echo "</table>";
              echo "<table width='80%' border='3px' bordercolor='black'>";
              echo "<tr>";
              echo "<td align=left><b>B) Técnica de Causa - Efecto:</td>";
              echo "</tr>";
              echo "</table>";
              echo "<table width='80%' border='3px' bordercolor='black'>";
              echo "<tr>";
              echo "<td>$causa1</td>";
              echo "<td>$causa2</td>";
              echo "<td>$causa3</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td>$subcausa1</td>";
              echo "<td>$subcausa2</td>";
              echo "<td>$subcausa3</td>";
              echo "</tr>";

              echo "<tr>";
              echo "<td>Causa:</td>";
              echo "<td align=right>Efecto:</td>";
              echo "<td>$efecto</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td>$causa4</td>";
              echo "<td>$causa5</td>";
              echo "<td>$causa6</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td>$subcausa4</td>";
              echo "<td>$subcausa5</td>";
              echo "<td>$subcausa6</td>";
              echo "</tr>";


              echo "</table>";
              echo "<table width='80%' border='3px' bordercolor='black'>";
              echo "<tr>";
              echo "<td align=left><b>C) Cualquier otra Técnica de su Elección:</td>";
              echo "</tr>";
              echo "</table>";
              echo "<table width='80%' border='3px' bordercolor='black'>";
              echo "<tr>";
              echo "<td>$otratec</td>";
              echo "</tr>";
              echo "</table>";
              echo "<table width='80%' border='3px' bordercolor='black'>";
              echo "<tr>";
              echo "<td><h6>Rev. 1 Fecha 26-05-14</td>";
              echo "<td align=right><h6>FR-CC-07</td>";
              echo "</tr>";
              echo "</table>";



		
            			echo "<center><br><br><input type=submit value='De Enter para Modificar la Informacion'>";
             			echo "</form>";


                          }
                         else
                          {
                          echo "<table border='1' width=50% >";
		          echo "<tr>";                  
               	          echo "<td bgcolor=ffffff align=center><b>No se encuentra el registro en la Base de Datos</td>";
                          echo "</table><br><br>";
                          }


        			  	mysql_close($link);
							 
				?>
                
             
             
             
             
             
            
              
                   
           </div>
     
     </div>

     
  </body>
</html>

