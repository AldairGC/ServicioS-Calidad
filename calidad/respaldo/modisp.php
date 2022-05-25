
             
             
              <?php

                                $numero=0;
				include('conecta.php');
				$idac=$_POST['idac'];
				$consulta=mysql_query("SELECT * FROM ap WHERE idac='$idac'",$link);
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


					$efecto=$row['efecto'];
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
                echo "<center>";

                echo "<table border='1' width=50% bordercolor='#848484'>";
		echo "<tr bgcolor='#848484'>";
		echo "<td align=center ><font color='#FFFFFF'>1.- Declaración de la No Conformidad Potencial--($idac)</font></td>";
                echo "<td width=160><font color='#FFFFFF'>Folio:<input type=text name=folio value=$folio></font></td>";
		echo "</tr>";
        
		echo "<tr><td><textarea name=conforme cols=60 rows=5>$conforme</textarea></td>";
                echo "<td>Detectada en:<u>$dete,$dete1,$dete2,$dete3,$dete4</u></td>";


                echo "<td></td>";
		echo "</tr>";
                echo "<tr>";
		echo "<td></td><td><input type='checkbox'  name='dete' value='Auditoria Interna'> Auditoria Interna</td>";
      

		echo "</tr>";
                echo "<tr>";
		echo "<td></td><td><input type='checkbox'  name='dete1' value='Auditoria Externa'> Auditoria Externa</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td></td><td><input type='checkbox'  name='dete2' value='Queja o Sugerencia'> Queja o Sugerencia</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td></td><td><input type='checkbox'  name='dete3' value='Mejoras al SGC'> Mejoras al SGC</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td></td><td><input type='checkbox'  name='dete4' value='Indicadores del SGC'> Indicadores del SGC</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td></td><td>Otra: <input type='text'  name='otra' value='$otra'></td>";
		echo "</tr>";
        echo "</table>";
        echo "<table border='1' width=60%>";
		echo "<tr bgcolor='#848484'>";
		echo "<td align=center ><font color='#FFFFFF'>Fecha Notificacion</font></td>";
		echo "<td align=center ><font color='#FFFFFF'>Area 1:</font></td>";
		echo "<td align=center ><font color='#FFFFFF'>Auditor del Area</font></td>";
		echo "</tr>";
                echo "<tr>";
		echo "<td align=center ><input type=date name=fechanoti size=10 value='$fechanoti'></td>";


                                echo "<td><select name=area>";
                                echo "<option value='$area'>$area";

				include('conecta.php');

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

                                echo "<td><select name=auditor>"; 
                                  echo "<option value='$auditor'>$auditor"; 

				include('conecta.php');

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

                echo "<tr bgcolor='#848484'>";
		echo "<td align=center ><font color='#FFFFFF'>Nombre y Firma de quien informa la No Conformidad</font></td>";
		echo "<td align=center ><font color='#FFFFFF'>Nombre y Firma del Responsable 1</font></td>";
		echo "<td align=center ><font color='#FFFFFF'>Nombre y Firma</font></td>";
		echo "</tr>";
                echo "<tr>";
		echo "<td align=center ><input type=text name=nombreno size=50 value='$nombreno'></td>";




                                echo "<td><select name=nombreres>";
                                echo "<option value='$nombreres'>$nombreres";

				include('conecta.php');

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











		echo "<td align=center ><input type=text name=nombre value='$nombre'></td>";
		echo "</tr>";
                echo "</table>";




       		echo "<table border='1' width=75% >";
		echo "<tr bgcolor='#848484'>";
		echo "<td align=center ><font color='#FFFFFF'></td>";
		echo "<td align=center ><font color='#FFFFFF'>Area 2:</font></td>";
		echo "<td align=center ><font color='#FFFFFF'></font></td>";
		echo "</tr>";
                echo "<tr>";
		echo "<td align=center></td>";



                                echo "<td align=center><select name=area1>";
                                echo "<option value='$area1'>$area1";

				include('conecta.php');

				$consulta=mysql_query("SELECT * FROM areas",$link);
				while($row=mysql_fetch_array($consulta))

				{
					$idarea=$row['idarea'];
					$clave=$row['clave'];
					$nomarea=$row['nomarea'];
					$nomcal=$row['nomcal'];





                                        echo "<option value='$nomarea'>$nomarea";
                                        



								
				}  
                                        echo "<option value=>";
                                        echo "</td>";
                                        echo "</select>";

                                echo "<td></td></tr>";
                                        





		echo "</tr>";
                echo "</table>";
                echo "<table border='1' width=75% >";

                echo "<tr bgcolor='#848484'>";
		echo "<td align=center><font color='#FFFFFF'></td>";
		echo "<td align=center><font color='#FFFFFF'>Nombre y Firma del Responsable 2</font></td>";
		echo "<td align=center><font color='#FFFFFF'></font></td>";
		echo "</tr>";
                echo "<tr>";
		echo "<td align=center></td>";



                                echo "<td align=center><select name=nombreres1>";
                                echo "<option value='$nombreres1'>$nombreres1";

				include('conecta.php');

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
                                        echo "<option value=>";
                                        echo "</td>";
                                        echo "</select>";





		echo "<td align=center></td>";
		echo "</tr>";
                echo "</table>";



       		echo "<table border='1' width=75% >";
		echo "<tr bgcolor='#848484'>";
		echo "<td align=center ><font color='#FFFFFF'></td>";
		echo "<td align=center ><font color='#FFFFFF'>Area 3:</font></td>";
		echo "<td align=center ><font color='#FFFFFF'></font></td>";
		echo "</tr>";
                echo "<tr>";
		echo "<td align=center></td>";



                                echo "<td align=center><select name=area2>";
                                echo "<option value='$area2'>$area2";

				include('conecta.php');

				$consulta=mysql_query("SELECT * FROM areas",$link);
				while($row=mysql_fetch_array($consulta))

				{
					$idarea=$row['idarea'];
					$clave=$row['clave'];
					$nomarea=$row['nomarea'];
					$nomcal=$row['nomcal'];





                                        echo "<option value='$nomarea'>$nomarea";
                                        



								
				}
                                        echo "<option value=>";
                                        echo "</td>";
                                        echo "</select>";

                                echo "<td></td></tr>";
                                        





		echo "</tr>";
                echo "</table>";
                echo "<table border='1' width=75% >";

                echo "<tr bgcolor='#848484'>";
		echo "<td align=center><font color='#FFFFFF'></td>";
		echo "<td align=center><font color='#FFFFFF'>Nombre y Firma del Responsable 3</font></td>";
		echo "<td align=center><font color='#FFFFFF'></font></td>";
		echo "</tr>";
                echo "<tr>";
		echo "<td align=center></td>";



                                echo "<td align=center><select name=nombreres2>";
                                echo "<option value='$nombreres2'>$nombreres2";

				include('conecta.php');

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
                                        echo "<option value=>";
                                        echo "</td>";
                                        echo "</select>";





		echo "<td align=center></td>";
		echo "</tr>";
                echo "</table>";


       		echo "<table border='1' width=75% >";
		echo "<tr bgcolor='#848484'>";
		echo "<td align=center ><font color='#FFFFFF'></td>";
		echo "<td align=center ><font color='#FFFFFF'>Area 4:</font></td>";
		echo "<td align=center ><font color='#FFFFFF'></font></td>";
		echo "</tr>";
                echo "<tr>";
		echo "<td align=center></td>";



                                echo "<td align=center><select name=area3>";
                                echo "<option value='$area3'>$area3";

				include('conecta.php');

				$consulta=mysql_query("SELECT * FROM areas",$link);
				while($row=mysql_fetch_array($consulta))

				{
					$idarea=$row['idarea'];
					$clave=$row['clave'];
					$nomarea=$row['nomarea'];
					$nomcal=$row['nomcal'];





                                        echo "<option value='$nomarea'>$nomarea";
                                        



								
				}
                                        echo "<option value=>";
                                        echo "</td>";
                                        echo "</select>";

                                echo "<td></td></tr>";
                                        





		echo "</tr>";
                echo "</table>";
                echo "<table border='1' width=75% >";

                echo "<tr bgcolor='#848484'>";
		echo "<td align=center><font color='#FFFFFF'></td>";
		echo "<td align=center><font color='#FFFFFF'>Nombre y Firma del Responsable 4</font></td>";
		echo "<td align=center><font color='#FFFFFF'></font></td>";
		echo "</tr>";
                echo "<tr>";
		echo "<td align=center></td>";



                                echo "<td align=center><select name=nombreres3>";
                                echo "<option value='$nombreres3'>$nombreres3";

				include('conecta.php');

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
                                        echo "<option value=>";
                                        echo "</td>";
                                        echo "</select>";





		echo "<td align=center></td>";
		echo "</tr>";
                echo "</table>";





                echo "<table border='1' width=75% >";

                echo "<tr bgcolor='#848484'><td></td>";
		echo "<td align=center ><font color='#FFFFFF'>Accion Inmediata</font></td>";
                echo "<td></td>";
		echo "</tr>";
                echo "<tr>";
		echo "<td></td>";
		echo "<td align=center><textarea name=accionin cols=40 rows=5>$accionin</textarea></td>";
		echo "<td></td>";
		echo "</tr>";
                echo "</table>";
                echo "<table border='1' width=75% >";

                echo "<tr bgcolor='#848484'><td></td>";
		echo "<td align=center ><font color='#FFFFFF'>Resultado del Análisis de Causa Raíz de la NC</font></td>";
                echo "<td></td>";
		echo "</tr>";
                echo "<tr>";
		echo "<td></td>";
		echo "<td align=center><textarea name=resultado cols=40 rows=5>$resultado</textarea></td>";
		echo "<td></td>";
		echo "</tr>";
                echo "</table>";
                echo "<table border='1' width=75% >";

		echo "<tr bgcolor='#848484'>";
		echo "<td></td>";
		echo "<td align=center ><font color='#FFFFFF'>Acciones a implementar para asegurar que no vuelva a ocurrir</td>";
		echo "<td></td>";
		echo "</tr>";
                echo "<tr>";
		echo "<td align=center>Acciones</td>";
		echo "<td align=center>Responsables</td>";
		echo "<td align=center>Fecha:</td>";
		echo "</tr>";
                echo "<tr>";
		echo "<td align=center ><input type=text name=accion1 size=60 value='$accion1'></td>";
		echo "<td align=center ><input type=text name=res1  value='$res1'></td>";
		echo "<td align=center ><input type=date name=fecha1 size=10 value='$fecha1'></td>";
		echo "</tr>";
                echo "<tr>";
		echo "<td align=center ><input type=text name=accion2 size=60 value='$accion2'></td>";
		echo "<td align=center ><input type=text name=res2  value='$res2'></td>";
		echo "<td align=center ><input type=date name=fecha2 size=10 value='$fecha2'></td>";

		echo "</tr>";
                echo "<tr>";
		echo "<td align=center ><input type=text name=accion3 size=60 value='$accion3'></td>";
		echo "<td align=center ><input type=text name=res3  value='$res3'></td>";
		echo "<td align=center ><input type=date name=fecha3 size=10 value='$fecha3'></td>";
		echo "</tr>";
                echo "<tr>";
		echo "<td align=center ><input type=text name=accion4 size=60 value='$accion4'></td>";
		echo "<td align=center ><input type=text name=res4  value='$res4'></td>";
		echo "<td align=center ><input type=date name=fecha4 size=10 value='$fecha4'></td>";
		echo "</tr>";
                echo "<tr>";
		echo "<td align=center ><input type=text name=accion5 size=60 value='$accion5'></td>";
		echo "<td align=center ><input type=text name=res5  value='$res5'></td>";
		echo "<td align=center ><input type=date name=fecha5 size=10 value='$fecha5'></td>";
		echo "</tr>";
                echo "</table><br><br>";


                echo "<table border='1' width=80% >";
		echo "<tr bgcolor='#848484'>";
		echo "<td align=center width=500><font color='#FFFFFF'>5.- Efectividad de la Implantación</font></td>";
                echo "</tr>";
                echo "</table>";
                echo "<table border='1' width=60% >";

                echo "<tr bgcolor='#848484'>";
		echo "<td align=center width=500><font color='#FFFFFF'>Que acciones se Implantaron</font></td>";
		echo "<td align=center width=500><font color='#FFFFFF'>Nombre del Auditor del Area</font></td>";
		echo "<td align=center width=500><font color='#FFFFFF'>Fecha</font></td>";
		echo "</tr>";
        
		echo "<tr><td><textarea name=efectivo cols=50 rows=5 maxlength=270>$efectivo</textarea></td>";

                       
                                echo "<td><select name=auditorarea>";
                                  echo "<option value='$auditorarea'>$auditorarea";

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
                                     



					echo "<td><input type=date size=10 name=fechaarea value=$fechaarea></td>";


	        	




                           
                

		echo "</tr>";
        echo "</table>";

                echo "<table border='1' width=60% >";
		echo "<tr bgcolor='#848484'>";
		echo "<td align=center width=500><font color='#FFFFFF'>Verificacion de la Efectividad</font></td>";
		echo "<td align=center width=500><font color='#FFFFFF'>Nombre del Auditor Interno</font></td>";
		echo "<td align=center width=500><font color='#FFFFFF'>Fecha</font></td>";
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




        echo "<table border='1' width=70%>";
		echo "<tr bgcolor=#848484>";

		echo "<td align=center ><font color=#FFFFFF>Utilice alguna de las siguientes tecnicas para el analisis de la Causa - Raiz de la No.<br>Conformidad</td>";

		echo "</tr>";
       echo " </table>";
       echo " <table border='1' width=70%>";

                echo "<tr>";
		echo "<td><b>Tecnica de los 5 por ques</td>";
		echo "</tr>";
       echo " </table>";
        echo "<table border='1' width=70%>";
                echo "<tr>";
		echo "<td>1er Porque?</td>";
		echo "<td>2do Porque?</td>";
		echo "<td>3er Porque?</td>";
		echo "<td>4to Porque?</td>";
		echo "<td>5to Porque?</td>";
		echo "</tr>";



               echo " <tr>";
		echo "<td><textarea rows=20 cols=15 name=porque1>$porque1</textarea></td>";
		echo "<td><textarea rows=20 cols=15 name=porque2>$porque2</textarea></td>";
		echo "<td><textarea rows=20 cols=15 name=porque3>$porque3</textarea></td>";
		echo "<td><textarea rows=20 cols=15 name=porque4>$porque4</textarea></td>";
		echo "<td><textarea rows=20 cols=15 name=porque5>$porque5</textarea></td>";
		echo "</tr>";
        echo "</table>";
       echo " <table border='1' width=70%>";

               echo " <tr>";
		echo "<td><b>Análisis de Causa Efecto</td>";
		echo "</tr>";
        echo "</table>";
        echo "<table border='1' width=120%>";
               echo " <tr>";
		echo "<td>Causas: <input type=text name=causa1 size=20 value=$causa1><input type=text name=causa2 size=20 value=$causa2><input type=text name=causa3 size=20 value=$causa3></td>";
		echo "<td>Causas: <input type=text name=causa4 size=20 value=$causa4><input type=text name=causa5 size=20 value=$causa5><input type=text name=causa6 size=20 value=$causa6></td>";
		echo "</tr>";
                echo "<tr>";
		echo "<td>Subcausa: <textarea name=subcausa1 cols=16 rows=10>$subcausa1</textarea><textarea name=subcausa2 cols=16 rows=10>$subcausa2</textarea><textarea name=subcausa3 cols=16 rows=10>$subcausa3</textarea></td>";
		echo "<td>Subcausa: <textarea name=subcausa4 cols=16 rows=10>$subcausa4</textarea><textarea name=subcausa5 cols=16 rows=10>$subcausa5</textarea><textarea name=subcausa6 cols=16 rows=10>$subcausa6</textarea></td>";
		echo "</tr>";

               echo " <tr>";
		echo "<td>Efecto: <input type=text name=efecto size=80 value='$efecto'></td>";
		echo "</tr>";
        echo "</table>";
        echo "<table border='1' width=70%>";

                echo "<tr>";
		echo "<td><b>Cualquier otra tecnica de su eleccion</td>";
		echo "</tr>";
        echo "</table>";
        echo "<table border='1' width=70%>";
                echo "<tr>";
		echo "<td><textarea rows=20 cols=85 name=otratec>$otratec</textarea></td>";
		echo "</tr>";
        echo "</table>";


		


                          }
                         else
                          {
                          echo "<table border='1' width=50% bordercolor='#848484'>";
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

