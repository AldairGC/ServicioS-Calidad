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
            


<form action=insertacorreaudi.php method=post>
<input type=hidden name=tipo value=2>
	<center><table border="1" width=80%>
		<tr>
		<td align=center><center><font size="4" color="#000000" face="Arial, Helvetica, sans-serif">ACCION CORRECCION LEVANTADA POR EL AUDITOR</font></center></td>
		</tr>
        </table><br><br>
	<table border="1" width=80%>
		<tr bgcolor='#848484'>
		<td align=left width=800 bgcolor=#324D8A><font color="#FFFFFF">1.- Declaracion de los hallazgos</font></td>
                <td width=160 bgcolor=#324D8A><font color="#FFFFFF">Folio:<input type=text name=folio size=10></font></td>
		</tr>
        
		<tr><td><font color=#324D8A>Nombre del Documento o Formato:<input type=text name=nomdoc size=50></td>
                <td><font color=#324D8A>Codigo:<input type=text name=codigo size=15></td>
                  
		</tr>
        </table>
        <table border="1" width=10%>
                <tr>
		<td><font color=#324D8A>Descripcion del Hallazgo:</td>
		</tr>
                <tr>
		<td><textarea name=hallazgo cols=96 rows=10 maxlength=900></textarea></td>
		</tr>
        </table>

	<table border="3" width=80%>
		<tr>
		<td><font color=#324D8A>Fecha de Notificacion:<input type=date name=notifica></td>



                       <?php
                                echo "<td><font color=#324D8A>Area 1:<select name=area>";
                                  echo "<option value=>";

include('conecta.php');

				$consulta=mysql_query("SELECT * FROM areas1 group by nomarea",$link);
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



                       
                                echo "<td><font color=#324D8A>Responsable 1:<select name=nomres>";
                                  echo "<option value=>";



				$consulta=mysql_query("SELECT * FROM areas1 group by titu",$link);
				while($row=mysql_fetch_array($consulta))

				{
					$idarea=$row['idarea'];
					$clave=$row['clave'];
					$nomarea=$row['nomarea'];
					$nomcal=$row['nomcal'];
					$titu=$row['titu'];




                                        echo "<option value='$titu'>$titu";
                                        



								
				}
                                     


                         
	        	




                                echo "<td><font color=#324D8A>Auditor:<select name=lider>"; 
                                  echo "<option value=>"; 



				$consulta=mysql_query("SELECT * FROM areas1",$link);
				while($row=mysql_fetch_array($consulta))

				{
					$idarea=$row['idarea'];
					$clave=$row['clave'];
					$nomarea=$row['nomarea'];
					$nomcal=$row['nomcal'];



                                      if($nomcal==''){}else{

                                        echo "<option value='$nomcal'>$nomcal";}
                                        



								
				}
                                        echo "</td></tr>";
                                        echo "</select>";


                         
	        	?>



		</tr>
                <td></td>


                       <?php
                                echo "<td><font color=#324D8A>Area 2:<select name=area1>";
                                  echo "<option value=>";



				$consulta=mysql_query("SELECT * FROM areas1 group by nomarea",$link);
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
?>


                       <?php
                                echo "<td><font color=#324D8A>Responsable 2:<select name=nomres1>";
                                  echo "<option value=>";



				$consulta=mysql_query("SELECT * FROM areas1 group by titu",$link);
				while($row=mysql_fetch_array($consulta))

				{
					$idarea=$row['idarea'];
					$clave=$row['clave'];
					$nomarea=$row['nomarea'];
					$nomcal=$row['nomcal'];
					$titu=$row['titu'];




                                        echo "<option value='$titu'>$titu";
                                        



								
				}
                                     


                         
	        	?>




                <td></td><tr>
                <td></td>


                       <?php
                                echo "<td><font color=#324D8A>Area 3:<select name=area2>";
                                  echo "<option value=>";



				$consulta=mysql_query("SELECT * FROM areas1 group by nomarea",$link);
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
?>

                       <?php
                                echo "<td><font color=#324D8A>Responsable 3:<select name=nomres2>";
                                  echo "<option value=>";



				$consulta=mysql_query("SELECT * FROM areas1 group by titu",$link);
				while($row=mysql_fetch_array($consulta))

				{
					$idarea=$row['idarea'];
					$clave=$row['clave'];
					$nomarea=$row['nomarea'];
					$nomcal=$row['nomcal'];
					$titu=$row['titu'];




                                        echo "<option value='$titu'>$titu";
                                        



								
				}
                                     


                         
	        	?>




                <td></td><tr>

                <td></td>


                       <?php
                                echo "<td><font color=#324D8A>Area 4:<select name=area3>";
                                  echo "<option value=>";



				$consulta=mysql_query("SELECT * FROM areas1 group by nomarea",$link);
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
?>

                       <?php
                                echo "<td><font color=#324D8A>Responsable 4:<select name=nomres3>";
                                  echo "<option value=>";



				$consulta=mysql_query("SELECT * FROM areas1 group by titu",$link);
				while($row=mysql_fetch_array($consulta))

				{
					$idarea=$row['idarea'];
					$clave=$row['clave'];
					$nomarea=$row['nomarea'];
					$nomcal=$row['nomcal'];
					$titu=$row['titu'];




                                        echo "<option value='$titu'>$titu";
                                        



								
				}
                                     

mysql_close($link);
                         
	        	?>




                <td></td>

		<tr>
		<td><textarea name=nomhalla cols=30 rows=1></textarea></td><td></td><td></td><td></td>



     
		</tr>
		<tr>
		<td align=center><font color=#324D8A>Nombre y Firma de quien reporta el hallazgo</td>
		<td align=center></td><td></td>
		<td align=center><font color=#324D8A>Nombre y Firma</td>
		</tr>
        </table><br><br>


  <table width="28%" border="2" align="center" >
  
  <tbody>
 

  <tr><td colspan="2" align="center"><input type="submit" class="boot" name="guarda" value="GUARDAR"></td></tr>
  </tbody></table>
  
 
  </form></center>
                
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