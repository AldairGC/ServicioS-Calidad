<?php
session_start();
$var1=$_SESSION['usuario'];
$var2=$_SESSION['clave'];
?>
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
include('menuscorrectivaaudi.php');

?>            


        </ul>
    </div> <!-- end of menu -->
    
</div> <!-- end of menu wrapper -->

<div id="templatemo_content">

	<div id="main_column">
    
    	<div class="section_w500">
            
              <?php
                                 echo "<form action=modi1audi.php method=post>";
                                 echo "<input type=hidden name=dete value=''>";
                                 echo "<input type=hidden name=dete1 value=''>";
                                 echo "<input type=hidden name=dete2 value=''>";
                                 echo "<input type=hidden name=dete3 value=''>";
                                 echo "<input type=hidden name=dete4 value=''>";
                                $numero=0;
				$idac=$_GET['idac'];
				include("conecta.php");


				$consulta1=mysql_query("SELECT * FROM areas1 WHERE passauditor='$var2'",$link);
				while($row=mysql_fetch_array($consulta1))
			{

					
					$nomcal=$row['nomcal'];
                         }







				$consulta=mysql_query("SELECT * FROM acc WHERE idac='$idac' and auditor='$nomcal'",$link);
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



              echo "<center><table width='50%' border=3 bordercolor='#324D8A'>";
      
              echo "<tr>";
              echo "<td bgcolor=ffffff><h5><font color=#324D8A size=3><center>ACCION CORRECTIVA</td>";
              echo "</tr>";
              echo "</table></center><center><br><br>";
	




              echo "<table width='100%' border='3px' bordercolor='#324D8A'>";
              echo "<tr>";
              echo "<td bgcolor=#324D8A><font color=ffffff size=3>1.- Declaración de la no Conformidad</td>";
              echo "<td><font color=#324D8A size=3><center><b>Folio:</b>$folio</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td>$conforme</td>";
              echo "<td><font color=#324D8A size=3><b>Detectada en:</b>$dete:<u>$dete1:<u>$dete2:<u>$dete3:<u>$dete4</td>";

			 echo "<tr>";
              echo "<td></td>";
              echo "<td><font color=#324D8A size=3>Otra:$otra</td>";
              echo "</tr>";
              echo "</table>";
              echo "<table width='100%' border='3px' bordercolor='#324D8A'>";
              echo "<tr>";
              echo "<td align=center><font color=#324D8A size=3>Fecha de Notificación:$fechanoti</td>";
              echo "<td align=center><font color=#324D8A size=3>Area:$area Responsable:$nombreres</td>";
              echo "<td align=center><font color=#324D8A size=3>Auditor del Area:</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td align=center>$nombreno</td>";
              echo "<td align=center><font color=#324D8A size=3>Area 2:$area1 Responsable:$nombreres1</td>";
              echo "<td><font color=#324D8A size=3>$auditor</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td><font color=#324D8A size=3>Nombre y Firma de quien informa la No Conformidad:</td>";
              echo "<td align=center><font color=#324D8A size=3>Area 3:$area2 Responsable:$nombreres2</td>";
              echo "<td align=center><font color=#324D8A size=3>$nombre</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td align=center><font color=#324D8A size=3></td>";
              echo "<td align=center><font color=#324D8A size=3>Area 4:$area3 Responsable:$nombreres3</td>";
              echo "<td align=center><font color=#324D8A size=3>Nombre y Firma:</td>";
              echo "</tr>";
              echo "</table>";
			  
              echo "<table width='100%' border='3px' bordercolor='#324D8A'>";
              echo "<tr>";
              echo "<td bgcolor=#324D8A align=left><font color=ffffff size=3>2.- Accion Inmedita:</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td>$accionin</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td bgcolor=#324D8A align=left><font color=ffffff size=3>3.- Resultado del Análisis de Causa Raíz de la NC (Utilizar Técnicas al 
              Reverso):</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td>$resultado</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td bgcolor=#324D8A align=left><font color=ffffff size=3>4.- Acciones a implantar para asegurar que no vuelva a ocurrir la No Conformidad:</td>";
              echo "</tr>";
              echo "</table>";
              echo "<table width='100%' border='3px' bordercolor='#324D8A'>";


              echo "<tr>";
              echo "<td align=center><font color=#324D8A size=3>Acciones:</td>";
              echo "<td align=center><font color=#324D8A size=3>Responsables:</td>";
              echo "<td align=center><font color=#324D8A size=3>Fecha:</td>";
              echo "</tr>";

              echo "<tr>";
              echo "<td><font color=#324D8A size=3>$accion1</td>";
              echo "<td><font color=#324D8A size=3>$res1</td>";
              echo "<td><font color=#324D8A size=3>$fecha1</td>";
              echo "</tr>";

              echo "<tr>";
              echo "<td><font color=#324D8A size=3>$accion2</td>";
              echo "<td><font color=#324D8A size=3>$res2</td>";
              echo "<td><font color=#324D8A size=3>$fecha2</td>";
              echo "</tr>";

              echo "<tr>";
              echo "<td><font color=#324D8A size=3>$accion3</td>";
              echo "<td><font color=#324D8A size=3>$res3</td>";
              echo "<td><font color=#324D8A size=3>$fecha3</td>";
              echo "</tr>";

              echo "<tr>";
              echo "<td><font color=#324D8A size=3>$accion4</td>";
              echo "<td><font color=#324D8A size=3>$res4</td>";
              echo "<td><font color=#324D8A size=3>$fecha4</td>";
              echo "</tr>";

              echo "<tr>";
              echo "<td><font color=#324D8A size=3>$accion5</td>";
              echo "<td><font color=#324D8A size=3>$res5</td>";
              echo "<td><font color=#324D8A size=3>$fecha5</td>";
              echo "</tr>";
              echo "</table>";
                echo "<table border='3px' width=100% bordercolor=#324D8A>";
		echo "<tr>";
		echo "<td bgcolor=#324D8A align=left width=500><font color=ffffff size=3>5.- Efectividad de la Implantación</font></td>";
                echo "</tr>";
                echo "</table>";
                echo "<table border='3px' width=100%  bordercolor=#324D8A>";

                echo "<tr>";
		echo "<td align=center width=500><font color='#324D8A'>Que acciones se Implantaron</font></td>";
		echo "<td align=center width=500><font color='#324D8A'>Nombre del Auditor del Area</font></td>";
		echo "<td align=center width=500><font color='#324D8A'>Fecha</font></td>";
		echo "</tr>";
        
		echo "<tr><td><textarea name=efectivo cols=50 rows=5 maxlength=270>$efectivo</textarea></td>";

                       
                                echo "<td><select name=auditorarea>";
                                  echo "<option value='$auditorarea'>$auditorarea";





				$consulta=mysql_query("SELECT * FROM areas1",$link);
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

                echo "<table border='3px' width=100% bordercolor=#324D8A>";
		echo "<tr>";
		echo "<td align=center width=500><font color='#324D8A'>Verificacion de la Efectividad</font></td>";
		echo "<td align=center width=500><font color='#324D8A'>Nombre del Auditor Interno</font></td>";
		echo "<td align=center width=500><font color='#324D8A'>Fecha</font></td>";
		echo "</tr>";
        
		echo "<tr><td><textarea name=veriefectivo cols=50 rows=5 maxlength=270>$veriefectivo</textarea></td>";

                       
                                echo "<td><select name=auditorveri>";
                                  echo "<option value='$auditorveri'>$auditorveri";




				$consulta=mysql_query("SELECT * FROM areas1",$link);
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
              echo "<table width='100%' border='3px' bordercolor='#324D8A'>";
              echo "<tr>";
              echo "<td align=center><font color=#324D8A size=3>Utilice alguna de las siguientes técnicas para el análisis de la Causa - Raíz de la No Conformidad:</td>";
              echo "</tr>";
              echo "</table>";

              echo "<table width='100%' border='3px' bordercolor='#324D8A'>";
              echo "<tr>";
              echo "<td align=left><font color=#324D8A size=3>A) Técnica de los 5 por ques:</td>";
              echo "</tr>";
              echo "</table>";

              echo "<table width='100%' border='3px' bordercolor='#324D8A'>";
              echo "<tr>";
              echo "<td><font color=#324D8A size=3>1er Porque?</td>";
              echo "<td><font color=#324D8A size=3>2do Porque?</td>";
              echo "<td><font color=#324D8A size=3>3er Porque?</td>";
              echo "<td><font color=#324D8A size=3>4to Porque?</td>";
              echo "<td><font color=#324D8A size=3>5to Porque?</td>";
              echo "</tr>";
              echo "</table>";

              echo "<table width='100%' border='3px' bordercolor='#324D8A'>";

              echo "<tr>";
              echo "<td>$porque1</td>";
              echo "<td>$porque2</td>";
              echo "<td>$porque3</td>";
              echo "<td>$porque4</td>";
              echo "<td>$porque5</td>";
              echo "</tr>";
              echo "</table>";
              echo "<table width='100%' border='3px' bordercolor='#324D8A'>";
              echo "<tr>";
              echo "<td align=left><font color=#324D8A size=3>B) Técnica de Causa - Efecto:</td>";
              echo "</tr>";
              echo "</table>";
              echo "<table width='100%' border='3px' bordercolor='#324D8A'>";
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
              echo "<table width='100%' border='3px' bordercolor='#324D8A'>";
              echo "<tr>";
              echo "<td align=left><font color=#324D8A size=3>C) Cualquier otra Técnica de su Elección:</td>";
              echo "</tr>";
              echo "</table>";
              echo "<table width='100%' border='3px' bordercolor='#324D8A'>";
              echo "<tr>";
              echo "<td>$otratec</td>";
              echo "</tr>";
              echo "</table>";
              echo "<table width='100%' border='3px' bordercolor='#324D8A'>";
              echo "<tr>";
              echo "<td><font color=#324D8A size=3>Rev. 1 Fecha 26-05-14</td>";
              echo "<td align=right><font color=#324D8A size=3>FR-CC-07</td>";
              echo "</tr>";
              echo "</table>";
?>

 <br><br> <table width="18%" border="2" align="center" >
  
  <tbody>
 

  <tr><td colspan="2" align="center"><input type="submit" class="boot" name="guarda" value="MODIFICAR"></td></tr>
  </tbody></table>
  
 
  </form></center>

<?php
                          }
                         else
                          {
                          echo "<table border='1' width=50% >";
		          echo "<tr>";                  
               	          echo "<td bgcolor=ffffff align=center><font color=#324D8A size=3>No se encuentra el registro en la Base de Datos</td>";
                          echo "</table><br><br>";
                          }


        			  	
							 
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