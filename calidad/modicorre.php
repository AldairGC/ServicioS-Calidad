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
include('anunciocorre.php');
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
include('menuscorre.php');

?>            


        </ul>
    </div> <!-- end of menu -->
    
</div> <!-- end of menu wrapper -->

<div id="templatemo_content">

	<div id="main_column">
    
    	<div class="section_w500">
            
<?php
                                $numero=0;
				include_once("conecta.php");
				$idco=$_GET['idco'];
				
				$consulta=mysql_query("SELECT * FROM corres WHERE idco='$idco'",$link);
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
                                echo "<form action=modi1corre.php method=post>";
				echo "<input type=hidden name=idco value=$idco>";
        echo "<center>";

	echo "<table border=1 width=50%>";
		echo "<tr>";
		echo "<td align=center><center><font size=4 color=#000000 face=Arial, Helvetica, sans-serif>MODIFICACION DE CORRECCION</font></center></td>";
		echo "</tr>";
       echo " </table><br><br>";
	echo "<table border=1 width=50%>";
		echo "<tr bgcolor='#324D8A'>";
		echo "<td align=left width=800 bgcolor='#324D8A'><font color=#FFFFFF>1.- Declaración de los hallazgos</font></td>";
               echo " <td width=160 bgcolor='#324D8A'><font color=#FFFFFF>Folio:<input type=text name=folio value='$folio' size=10></font></td>";
		echo "</tr>";
        
		echo "<tr><td bgcolor='#324D8A'>Nombre del Documento o Formato:<input type=text name=nomdoc value='$nomdoc' size=50></td>";
                echo "<td bgcolor='#324D8A'>Codigo:<input type=text name=codigo value='$codigo' size=15></td>";
                  
		echo "</tr>";
       echo " </table>";
       echo " <table border=1 width=50%>";
              echo "  <tr>";
		echo "<td bgcolor='#324D8A'>Descripción del Hallazgo:</td>";
		echo "</tr>";
               echo " <tr>";
		echo "<td><textarea name=hallazgo cols=40 rows=10>$hallazgo</textarea></td>";
		echo "</tr>";
        echo "</table>";

	echo "<table border=3 width=50%>";
		echo "<tr>";
		echo "<td bgcolor='#324D8A'>Fecha de Notificación:<input type=date name=notifica value=$notifica></td>";




                                echo "<td bgcolor='#324D8A'>Area 1<select name=area>";
                                echo "<option value='$area'>$area";
				include_once("conecta.php");


			 	


				$consulta=mysql_query("SELECT * FROM areas1",$link);
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

                                echo "<td bgcolor='#324D8A'>Auditor Lider:<select name=lider>"; 
                                  echo "<option value='$lider'>$lider"; 

			 	include_once("conecta.php");



				$consulta=mysql_query("SELECT * FROM areas1",$link);
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
		echo "<td><textarea name=nomhalla cols=30 rows=5>$nomhalla</textarea></td>";


                                echo "<td><select name=nomres>";
                                echo "<option value='$nomres'>$nomres";

				include_once("conecta.php");


				$consulta=mysql_query("SELECT * FROM areas1",$link);
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
		echo "<td align=center bgcolor='#324D8A'>Nombre y Firma de quien reporta el hallazgo</td>";
		echo "<td align=center bgcolor='#324D8A'>Nombre y Firma del Responsable</td>";
		echo "<td align=center bgcolor='#324D8A'>Nombre y Firma</td>";
		echo "</tr>";
       echo " </table>";




	echo "<table border=3 width=50%>";
		echo "<tr>";
		echo "<td></td>";




                                echo "<td bgcolor='#324D8A'>Area 2<select name=area1>";
                                echo "<option value='$area1'>$area1";
				include_once("conecta.php");


			 	


				$consulta=mysql_query("SELECT * FROM areas1",$link);
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

                                echo "<td></td></tr>";



		echo "</tr>";
		echo "<tr>";
		echo "<td></td>";


                                echo "<td><select name=nomres1>";
                                echo "<option value='$nomres1'>$nomres1";

				include_once("conecta.php");


				$consulta=mysql_query("SELECT * FROM areas1",$link);
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
		echo "<td align=center></td>";
		echo "<td align=center bgcolor='#324D8A'>Nombre y Firma del Responsable</td>";
		echo "<td align=center></td>";
		echo "</tr>";
       echo " </table>";



	echo "<table border=3 width=50%>";
		echo "<tr>";
		echo "<td></td>";




                                echo "<td bgcolor='#324D8A'>Area 3<select name=area2>";
                                echo "<option value='$area2'>$area2";
				include_once("conecta.php");

			 	


				$consulta=mysql_query("SELECT * FROM areas1",$link);
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

                                echo "<td></td></tr>";



		echo "</tr>";
		echo "<tr>";
		echo "<td></td>";


                                echo "<td><select name=nomres2>";
                                echo "<option value='$nomres2'>$nomres2";

				include_once("conecta.php");


				$consulta=mysql_query("SELECT * FROM areas1",$link);
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
		echo "<td align=center></td>";
		echo "<td align=center bgcolor='#324D8A'>Nombre y Firma del Responsable</td>";
		echo "<td align=center></td>";
		echo "</tr>";
       echo " </table>";



	echo "<table border=3 width=50%>";
		echo "<tr>";
		echo "<td></td>";




                                echo "<td bgcolor='#324D8A'>Area 4<select name=area3>";
                                echo "<option value='$area3'>$area3";
				include_once("conecta.php");


			 	


				$consulta=mysql_query("SELECT * FROM areas1",$link);
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

                                echo "<td></td></tr>";



		echo "</tr>";
		echo "<tr>";
		echo "<td></td>";


                                echo "<td><select name=nomres3>";
                                echo "<option value='$nomres3'>$nomres3";

				include_once("conecta.php");

				$consulta=mysql_query("SELECT * FROM areas1",$link);
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
		echo "<td align=center></td>";
		echo "<td align=center bgcolor='#324D8A'>Nombre y Firma del Responsable</td>";
		echo "<td align=center></td>";
		echo "</tr>";
       echo " </table>";



	echo "<table border=1 width=50%>";
		echo "<tr bgcolor='#324D8A'>";
		echo "<td align=left width=800><font color=#FFFFFF>2.- Descripción de la Corrección</font></td>";
		echo "</tr>";
        echo "</table>";
	echo "<table border=3 width=50%>";
		echo "<tr>";
		echo "<td><textarea name=descrip cols=60 rows=10>$descrip</textarea></td>";
		echo "</tr>";
       echo "</table>";
	echo "<table border=1 width=50%>";
		echo "<tr bgcolor='#324D8A'>";
		echo "<td align=left width=800><font color=#FFFFFF>3.- Verificacion de la Corrección</font></td>";
		echo "</tr>";
       echo " </table>";
	echo "<table border=1 width=50%>";
		echo "<tr>";
		echo "<td bgcolor='#324D8A'>Acciones Realizadas:</td>";
                echo "<td bgcolor='#324D8A'>Nombre del Auditor:<input type=text name=audito value='$audito'></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><textarea name=accion cols=60 rows=5>$accion</textarea></td>";
                echo "<td bgcolor='#324D8A'>Fecha:<input type=date name=fecha value=$fecha></td>";
		echo "</tr>";

        echo "</table>";

		  echo "<br><br><table width='25%' border='2' align='center' ><tbody>"; 

  echo "<tr><td colspan='2' align='center'><input type='submit' class='boot' name='guarda' value='MODIFICAR'></td></tr>";
  echo "</tbody></table></form></center>";


                          }
                         else
                          {
                          echo "<table border='1' width='50%' bordercolor='black'>";
		          echo "<tr bgcolor='#324D8A'>";                  
               	          echo "<td bgcolor='#324D8A' align=center><b>No se encuentra el registro en la Base de Datos</td>";
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