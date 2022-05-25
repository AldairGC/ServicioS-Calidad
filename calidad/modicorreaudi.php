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
include('menuscorreaudi.php');

?>            


        </ul>
    </div> <!-- end of menu -->
    
</div> <!-- end of menu wrapper -->

<div id="templatemo_content">

	<div id="main_column">
    
    	<div class="section_w500">
            
  <center>           
             
              <?php
                                $numero=0;
				include ('conecta.php');

			 	
				$idco=$_GET['idco'];



				$consulta1=mysql_query("SELECT * FROM areas1 WHERE passauditor='$var2'",$link);
				while($row=mysql_fetch_array($consulta1))
			{

					
					$nomcal=$row['nomcal'];
                         }




				
				$consulta=mysql_query("SELECT * FROM corres WHERE idco='$idco' and lider='$nomcal'",$link);
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


              echo "<center><table width='50%' border=3 bordercolor='#324D8A'>";
      
              echo "<tr>";
              echo "<td bgcolor=ffffff><h5><font color=#324D8A size=3><center>ACCION CORRECCION</td>";
              echo "</tr>";
              echo "</table></center><center><br><br>";
	echo "<table border=1 width=80%>";
		echo "<tr>";
		echo "<td align=left width=800 bgcolor=#324D8A><font color=#FFFFFF>1.- Declaración de los hallazgos</font></td>";
               echo " <td width=160  bgcolor=#324D8A><font color=#FFFFFF>Folio:$folio</font></td>";
		echo "</tr>";
        
		echo "<tr><td><font color=#324D8A size=3>Nombre del Documento o Formato:$nomdoc</td>";
                echo "<td><font color=#324D8A size=3>Codigo:$codigo</td>";
                  
		echo "</tr>";
       echo " </table>";
       echo " <table border=1 width=80%>";
              echo "  <tr>";
		echo "<td><font color=#324D8A size=3>Descripción del Hallazgo:</td>";
		echo "</tr>";
               echo " <tr>";
		echo "<td><font color=#324D8A size=3>$hallazgo</td>";
		echo "</tr>";
        echo "</table>";

	echo "<table border=3 width=80%>";
		echo "<tr>";
		echo "<td><font color=#324D8A size=3>Fecha de Notificación:$notifica</td>";


                                  echo "<td><select name=area>";
                                  echo "<option value='$area'>$area";

				include ('conecta.php');


			 	


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

                                  echo "<td><select name=lider>";
                                  echo "<option value='$lider'>$lider";


				include ('conecta.php');



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
		echo "<td><font color=#324D8A size=3>$nomhalla</td>";


                                  echo "<td><select name=nombres>";
                                  echo "<option value='$nomres'>$nomres";


				include ('conecta.php');


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
		echo "<td align=center><font color=#324D8A size=3>Nombre y Firma de quien reporta el hallazgo</td>";
		echo "<td align=center><font color=#324D8A size=3>Nombre y Firma del Responsable</td>";
		echo "<td align=center><font color=#324D8A size=3>Nombre y Firma</td>";
		echo "</tr>";
       echo " </table>";


	echo "<table border=1 width=80%>";
		echo "<tr bgcolor='#848484'>";
		echo "<td align=left width=800 bgcolor=#324D8A><font color=#FFFFFF>2.- Descripción de la Corrección</font></td>";
		echo "</tr>";
        echo "</table>";
	echo "<table border=3 width=80%>";
		echo "<tr>";
		echo "<td><textarea name=descrip cols=80 rows=10>$descrip</textarea></td>";
		echo "</tr>";
       echo "</table>";



	echo "<table border=1 width=80%>";
		echo "<tr bgcolor=#848484>";
		echo "<td align=left width=800 bgcolor=#324D8A><font color=#FFFFFF>3.- Verificacion de la Corrección</font></td>";
		echo "</tr>";
       echo " </table>";
	echo "<table border=1 width=80%>";
		echo "<tr>";
		echo "<td><font color=#324D8A size=3>Acciones Realizadas:</td>";
                echo "<td><font color=#324D8A size=3>Nombre del Auditor:<input type=text name=audito value='$audito'></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><textarea name=accion cols=60 rows=5 maxlength=130>$accion</textarea></td>";
                echo "<td><font color=#324D8A size=3>Fecha:<input type=date name=fecha value=$fecha></td>";
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
                          echo "<table border='1' width=80% bordercolor='black'>";
		          echo "<tr bgcolor='#848484'>";                  
               	          echo "<td bgcolor=ffffff align=center><b>No se encuentra el registro en la Base de Datos</td>";
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