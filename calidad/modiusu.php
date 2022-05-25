<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Investigaciones</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemoo_style.css" rel="stylesheet" type="text/css" />

<link href="css/main.css" rel="stylesheet" type="text/css">

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<?php
include('anunciocorrectiva.php');
?>

</head>
<body>

<div id="templatemo_top_bar">
	<div class="rss_contact_section">
		
        </div>

        <div class="rss_contact contact_button">
        </div>

  
</div> <!-- end of top bar -->

<div id="templatemo_banner_bar_wrapper">

	<div id="templatemo_banner_bar">
    
    	<h1>
<?php
include('arriba.php')
?>
        </h1>
    
    </div> <!-- end of banner -->
    
</div> <!-- end of banner wrapper -->

<div id="templatemo_menu_wrapper">

	<div id="templatemo_menu">
    	<ul>
<?php
include('menuscorrectivausu.php');

?>            


        </ul>
    </div> <!-- end of menu -->
    
</div> <!-- end of menu wrapper -->

<div id="templatemo_content">

	<div id="main_column">
    
    	<div class="section_w500">
            
             
             
              <?php
                                 echo "<form action=modiusu1.php method=post>";
                                 echo "<input type=hidden name=dete value=''>";
                                 echo "<input type=hidden name=dete1 value=''>";
                                 echo "<input type=hidden name=dete2 value=''>";
                                 echo "<input type=hidden name=dete3 value=''>";
                                 echo "<input type=hidden name=dete4 value=''>";
                                $numero=0;
$idac=$_GET['idac'];
include ('conecta.php');
				
				$consulta=mysql_query("SELECT * FROM acc WHERE idac='$idac'",$link);
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
                echo "<table border='1' width=80% >";
		echo "<tr bgcolor='#324D8A'>";
		echo "<td align=center><font color='#FFFFFF'>1.- Declaración de la No Conformidad</font></td>";
                echo "<td width=160><font color='#FFFFFF'>Folio:$folio<input type=hidden name=folio value=$folio></font></td>";
		echo "</tr>";
        
		echo "<tr><td><font color=#324D8A>$conforme<input type=hidden name=conforme value='$conforme'></td>";
                echo "<td><font color=#324D8A>Detectada en:</td>";
                           

		echo "</tr>";
if($dete<>'')
{
                            echo "<tr>";
		echo "<input type='hidden'  name='dete' value='$dete'></td>";
		echo "<td></td><td><font color=#324D8A>$dete</td>";
		echo "</tr>";
		echo "<tr>";
}else{}
if($dete1<>'')
{

		echo "<td></td><td><font color=#324D8A>$dete1</td>";
		echo "</tr>";
		echo "<tr>";
}else{}
if($dete2<>'')
{

		echo "<td></td><td><font color=#324D8A>$dete2</td>";
		echo "</tr>";
		echo "<tr>";
}else{}
if($dete3<>'')
{

		echo "<td></td><td><font color=#324D8A>$dete3</td>";
		echo "</tr>";
		echo "<tr>";
}else{}
if($dete4<>'')
{

		echo "<td></td><td><font color=#324D8A>$dete4</td>";
		echo "</tr>";
}else{}
		echo "<input type='hidden'  name='dete1' value='$dete1'></td>";
		echo "<input type='hidden'  name='dete2' value='$dete2'></td>";
		echo "<input type='hidden'  name='dete3' value='$dete3'></td>";
		echo "<input type='hidden'  name='dete4' value='$dete4'></td>";
		echo "<td></td><td><font color=#324D8A>Otra: <input type='hidden'  name='otra' value='$otra'>$otra</td>";
		echo "</tr>";
       echo "</table>";
       echo "<table border='1' width=80% >";
		echo "<tr bgcolor='#324D8A'>";
		echo "<td align=center ><font color='#FFFFFF'>Fecha Notificacion</font></td>";
		echo "<td align=center ><font color='#FFFFFF'>Area:</font></td>";
		echo "<td align=center ><font color='#FFFFFF'>Auditor del Area</font></td>";
		echo "</tr>";
                echo "<tr>";
		echo "<td align=center><input type=hidden name=fechanoti value='$fechanoti'><font color=#324D8A>$fechanoti</td>";



                                echo "<td><input type=hidden name=area value='$area'><font color=#324D8A>$area";
                                echo "</td>";


                                echo "<td><input type=hidden name=auditor value='$auditor'><font color=#324D8A>$auditor</td>"; 





		echo "</tr>";

                echo "<tr bgcolor='#324D8A'>";
		echo "<td align=center><font color='#FFFFFF'>Nombre y Firma de quien informa la No Conformidad</font></td>";
		echo "<td align=center><font color='#FFFFFF'>Nombre y Firma del Responsable</font></td>";
		echo "<td align=center><font color='#FFFFFF'>Nombre y Firma</font></td>";
		echo "</tr>";
                echo "<tr>";
		echo "<td align=center><input type=hidden name=nombreno value='$nombreno'><font color=#324D8A>$nombreno</td>";



                echo "<td><input type=hidden name=nombreres value='$nombreres'><font color=#324D8A>$nombreres</td>";






		echo "<td align=center><input type=hidden name=nombre value='$nombre'><font color=#324D8A>$nombre</td>";
		echo "</tr>";
                echo "</table>";

       echo "<table border='1' width=80% >";
		echo "<tr bgcolor='#324D8A'>";
		echo "<td align=center ><font color='#FFFFFF'></font></td>";
		echo "<td align=center ><font color='#FFFFFF'><font color=#324D8A>Area 2:</font></td>";
		echo "<td align=center ><font color='#FFFFFF'></font></td>";
		echo "</tr>";
                echo "<tr>";
		echo "<td align=center></td>";



                                echo "<td><input type=hidden name=area1 value='$area1'><font color=#324D8A>$area1";
                                echo "</td>";


                                echo "<td></td>"; 





		echo "</tr>";
                echo "</table>";
                echo "<table border='1' width=80% >";

                echo "<tr bgcolor='#324D8A'>";
		echo "<td align=center><font color='#FFFFFF'></font></td>";
		echo "<td align=center><font color='#FFFFFF'>Nombre y Firma del Responsable</font></td>";
		echo "<td align=center><font color='#FFFFFF'></font></td>";
		echo "</tr>";
                echo "<tr>";
		echo "<td align=center></td>";



                echo "<td><input type=hidden name=nombreres1 value='$nombreres1'><font color=#324D8A>$nombreres1</td>";






		echo "<td align=center></td>";
		echo "</tr>";
                echo "</table>";


       echo "<table border='1' width=80% >";
		echo "<tr bgcolor='#324D8A'>";
		echo "<td align=center ><font color='#FFFFFF'></font></td>";
		echo "<td align=center ><font color='#FFFFFF'>Area 3:</font></td>";
		echo "<td align=center ><font color='#FFFFFF'></font></td>";
		echo "</tr>";
                echo "<tr>";
		echo "<td align=center></td>";



                                echo "<td><input type=hidden name=area2 value='$area2'><font color=#324D8A>$area2";
                                echo "</td>";


                                echo "<td></td>"; 





		echo "</tr>";
                echo "</table>";
                echo "<table border='1' width=80% >";

                echo "<tr bgcolor='#324D8A'>";
		echo "<td align=center><font color='#FFFFFF'></font></td>";
		echo "<td align=center><font color='#FFFFFF'>Nombre y Firma del Responsable</font></td>";
		echo "<td align=center><font color='#FFFFFF'></font></td>";
		echo "</tr>";
                echo "<tr>";
		echo "<td align=center></td>";



                echo "<td><input type=hidden name=nombreres2 value='$nombreres2'><font color=#324D8A>$nombreres2</td>";






		echo "<td align=center></td>";
		echo "</tr>";
                echo "</table>";


      		echo "<table border='1' width=80% >";
		echo "<tr bgcolor='#324D8A'>";
		echo "<td align=center ><font color='#FFFFFF'></font></td>";
		echo "<td align=center ><font color='#FFFFFF'>Area 4:</font></td>";
		echo "<td align=center ><font color='#FFFFFF'></font></td>";
		echo "</tr>";
                echo "<tr>";
		echo "<td align=center></td>";



                                echo "<td><input type=hidden name=area3 value='$area3'><font color=#324D8A>$area3";
                                echo "</td>";


                                echo "<td></td>"; 





		echo "</tr>";
                echo "</table>";










                echo "<table border='1' width=80% >";

                echo "<tr bgcolor='#324D8A'>";
		echo "<td align=center><font color='#FFFFFF'></font></td>";
		echo "<td align=center><font color='#FFFFFF'>Nombre y Firma del Responsable</font></td>";
		echo "<td align=center><font color='#FFFFFF'></font></td>";
		echo "</tr>";
                echo "<tr>";
		echo "<td align=center></td>";



                echo "<td><input type=hidden name=nombreres3 value='$nombreres3'><font color=#324D8A>$nombreres3</td>";






		echo "<td align=center></td>";
		echo "</tr>";
                echo "</table>";





                echo "<center><table border='1' width=80% >";

                echo "<tr bgcolor='#324D8A'><td></td>";
		echo "<td><font color='#FFFFFF'>2.- Accion Inmediata</font></td>";
                echo "<td></td>";
		echo "</tr>";
                echo "<tr>";
		echo "<td></td>";
		echo "<td align=center><font color=#324D8A><textarea name=accionin cols=60 rows=5 required maxlength=300>$accionin</textarea></td>";
		echo "<td></td>";
		echo "</tr>";
                echo "</table>";
                echo "<center><table border='1' width=80% >";

                echo "<tr bgcolor='#324D8A'><td></td>";
		echo "<td><font color='#FFFFFF'>3.- Resultado del Análisis de Causa Raíz de la NC</font></td>";
                echo "<td></td>";
		echo "</tr>";
                echo "<tr>";
		echo "<td></td>";
		echo "<td align=center><textarea name=resultado cols=60 rows=5 required  maxlength=300>$resultado</textarea></td>";
		echo "<td></td>";
		echo "</tr>";
                echo "</table>";
                echo "<table border='1' width=75% >";

		echo "<tr bgcolor='#324D8A'>";
		echo "<td><font color='#FFFFFF'>4.- Acciones a implementar para asegurar que no vuelva a ocurrir</td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "</tr>";
                echo "<tr>";
		echo "<td align=center><font color=#324D8A>Acciones</td>";
		echo "<td align=center><font color=#324D8A>Responsables</td>";
		echo "<td align=center><font color=#324D8A>Fecha:</td>";
		echo "</tr>";
                echo "<tr>";
		echo "<td align=center><font color=#324D8A><input type=text name=accion1 size=60 value='$accion1' required></td>";
		echo "<td align=center><font color=#324D8A><input type=text name=res1  value='$res1' required></td>";
		echo "<td align=center><font color=#324D8A><input type=date name=fecha1 size=10 value='$fecha1' required></td>";
		echo "</tr>";
                echo "<tr>";
		echo "<td align=center><font color=#324D8A><input type=text name=accion2  size=60 value='$accion2'></td>";
		echo "<td align=center><font color=#324D8A><input type=text name=res2  value='$res2'></td>";
		echo "<td align=center><font color=#324D8A><input type=date name=fecha2 size=10 value='$fecha2'></td>";

		echo "</tr>";
                echo "<tr>";
		echo "<td align=center><font color=#324D8A><input type=text name=accion3 size=60 value='$accion3'></td>";
		echo "<td align=center><font color=#324D8A><input type=text name=res3  value='$res3'></td>";
		echo "<td align=center><font color=#324D8A><input type=date name=fecha3 size=10 value='$fecha3'></td>";
		echo "</tr>";
                echo "<tr>";
		echo "<td align=center><font color=#324D8A><input type=text name=accion4 size=60 value='$accion4'></td>";
		echo "<td align=center><font color=#324D8A><input type=text name=res4  value='$res4'></td>";
		echo "<td align=center><font color=#324D8A><input type=date name=fecha4 size=10 value='$fecha4'></td>";
		echo "</tr>";
                echo "<tr>";
		echo "<td align=center><font color=#324D8A><input type=text name=accion5 size=60 value='$accion5'></td>";
		echo "<td align=center><font color=#324D8A><input type=text name=res5  value='$res5'></td>";
		echo "<td align=center><font color=#324D8A><input type=date name=fecha5 size=10 value='$fecha5'></td>";
		echo "</tr>";
                echo "</table>";
                echo "<table border='1' width=80%>";
		echo "<tr bgcolor=#324D8A>";

		echo "<td><font color=#FFFFFF>Utilice alguna de las siguientes tecnicas para el analisis de la Causa - Raiz de la No Conformidad</td>";

		echo "</tr>";
                echo " </table>";
                echo " <table border='1' width=80%>";

                echo "<tr>";
		echo "<td><b><font color=#324D8A>Tecnica de los 5 por ques</td>";
		echo "</tr>";
                echo " </table>";
                echo "<table border='1' width=80%>";
                echo "<tr  bgcolor=#324D8A>";
		echo "<td>1er Porque?</td>";
		echo "<td>2do Porque?</td>";
		echo "<td>3er Porque?</td>";
		echo "<td>4to Porque?</td>";
		echo "<td>5to Porque?</td>";
		echo "</tr>";



               echo " <tr>";
		echo "<td><textarea rows=20 cols=15 name=porque1 maxlength=200>$porque1</textarea></td>";
		echo "<td><textarea rows=20 cols=15 name=porque2 maxlength=200>$porque2</textarea></td>";
		echo "<td><textarea rows=20 cols=15 name=porque3 maxlength=200>$porque3</textarea></td>";
		echo "<td><textarea rows=20 cols=15 name=porque4 maxlength=200>$porque4</textarea></td>";
		echo "<td><textarea rows=20 cols=10 name=porque5 maxlength=200>$porque5</textarea></td>";
		echo "</tr>";
        echo "</table>";
       echo " <table border='1' width=80%>";

               echo " <tr>";
		echo "<td><b><font color=#324D8A>Análisis de Causa Efecto</td>";
		echo "</tr>";
        echo "</table>";
        echo "<table border='1' width=80%>";
               echo " <tr>";
		echo "<td><font color=#324D8A>Causas: <font size=4>1<input type=text name=causa1 size=20 value=$causa1 >2<input type=text name=causa2 size=20 value=$causa2>3<input type=text name=causa3 size=20 value=$causa3></td>";

		echo "</tr>";
                echo "<tr>";
		echo "<td><font color=#324D8A>Subcausa: <font size=4>1<textarea name=subcausa1 cols=16 rows=10>$subcausa1</textarea>2<textarea name=subcausa2 cols=16 rows=10>$subcausa2</textarea>3<textarea name=subcausa3 cols=16 rows=10>$subcausa3</textarea></td>";

		echo "</tr>";

               echo " <tr>";

		echo "<td><font color=#324D8A>Causas: <font size=4>4<input type=text name=causa4 size=20 value=$causa4 >5<input type=text name=causa5 size=20 value=$causa5>6<input type=text name=causa6 size=20 value=$causa6></td>";
		echo "</tr>";
                echo "<tr>";

		echo "<td><font color=#324D8A>Subcausa: <font size=4>4<textarea name=subcausa4 cols=16 rows=10>$subcausa4</textarea>5<textarea name=subcausa5 cols=16 rows=10>$subcausa5</textarea>6<textarea name=subcausa6 cols=16 rows=10>$subcausa6</textarea></td>";
		echo "</tr>";







               echo " <tr>";
		echo "<td><font color=#324D8A>Efecto: <input type=text name=efecto size=85 value='$efecto'></td>";
		echo "</tr>";
        echo "</table>";
        echo "<table border='1' width=80%>";

                echo "<tr>";
		echo "<td><b><font color=#324D8A>Cualquier otra tecnica de su eleccion</td>";
		echo "</tr>";
        echo "</table>";
        echo "<table border='1' width=80%>";
                echo "<tr>";
		echo "<td><textarea rows=20 cols=100 name=otratec maxlength=1500>$otratec</textarea></td>";
		echo "</tr>";
        echo "</table>";
?>


		  <br><br><table width="28%" border="2" align="center" >
  
  <tbody>
 

  <tr><td colspan="2" align="center"><input type="submit" class="boot" name="guarda" value="GUARDAR"></td></tr>
  </tbody></table>
  
 
  </form></center>

<?php

                          }
                         else
                          {
                          echo "<table border='1' width=50% >";
		          echo "<tr>";                  
               	          echo "<td align=center><b><font color='#324D8A'>No se encuentra el registro en la Base de Datos</td>";
                          echo "</table><br><br>";
                          }


        			 mysql_close($link); 	
							 
				?>
                
          <div class="margin_bottom_20"></div>
                
  <ul class="list_01">
                
                </ul>
                
                <div class="button_01"></div>
                
      </div>
          
        <div class="cleaner"></div>
    </div> <!-- end of main column -->
    
  <div class="side_column_w200">
            	
                <div class="box">

                    
				</div> 
                
                
    <div class="box">

                   
			  </div>
    </div> 
    <!-- end of side column 1 -->
    
    <div class="side_column_w200">
    
			    <div class="box">
            
                    

					<div class="cleaner"></div>
				</div>
                
    			<div class="box">
                	
					
                    
                    
                    
                     
                    
				</div>
            	                
                <div class="box">
			           
		</div>
               

            </div> <!-- end of left side column -->

	<div class="cleaner"></div>
</div> <!-- end of content -->

<div id="templatemo_footer_wrapper">

	
        
        <div class="margin_bottom_20"></div>
        
        <div class="section_w940">

        	<?php
			include('derechos.php')
                ?>
        </div>
        
        <div class="cleaner"></div>
	</div> <!-- end of footer -->

</div> <!-- end of footer wrapper -->
<!-- templatemo 280 sky blue -->
<!-- 
Sky Blue Template 

-->
</body>
</html>