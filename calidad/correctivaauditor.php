<?php
session_start();
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
$var1=$_SESSION['usuario'];
$var2=$_SESSION['clave'];

include('menuscorrectivaaudi.php');

?>            


        </ul>
    </div> <!-- end of menu -->
    
</div> <!-- end of menu wrapper -->

<div id="templatemo_content">

	<div id="main_column">
    
    	<div class="section_w500">

                               


<form action=insertaauditor.php method=post>
<input type=hidden name=tipo value='1'>
<input type=hidden name=dete value=''>
<input type=hidden name=dete1 value=''>
<input type=hidden name=dete2 value=''>
<input type=hidden name=dete3 value=''>
<input type=hidden name=dete4 value=''>
<input type=hidden name=efectivo value=''>
<input type=hidden name=auditorarea value=''>
<input type=hidden name=fechaarea value=''>
<input type=hidden name=veriefectivo value=''>
<input type=hidden name=auditorveri value=''>
<input type=hidden name=fechaveri value=''>

	<center><table border="1" width=80%>
		<tr>
		<center><td align=center><font size="4" color="#000000" face="Arial, Helvetica, sans-serif">ACCION CORRECTIVA LEVANTADA POR EL AUDITOR</font></td></center>
		</tr>
        </table><br><br>
	<table border="1" width=50%>
		<tr bgcolor="#324D8A">
		<td align=center width=800><font color="#FFFFFF">1.- Declaraci&oacute;n de la No Conformidad</font></td>
                <td width=160><font color="#FFFFFF">Folio:<input type=hidden name=folio value=0></font></td>
		</tr>
        
		<tr><td><textarea name=conforme cols=60 rows=15 maxlength=900 required></textarea></td>
                <td><font color=#324D8A><center>Detectada en:</center><br><br><input type="checkbox"  name="dete" value='Auditoria Interna' ><font color=#324D8A> Auditoria Interna<br>
                               				<input type="checkbox"  name="dete1" value='Auditoria Externa' ><font color=#324D8A> Auditoria Externa<br>
						<input type="checkbox"  name="dete2" value='Queja o Sugerencia' ><font color=#324D8A> Queja o Sugerencia<br>
						<input type="checkbox"  name="dete3" value='Mejoras al SGC' ><font color=#324D8A> Mejoras al SGC<br>
						<input type="checkbox"  name="dete4" value='Indicadores del SGC' ><font color=#324D8A> Indicadores del SGC<br>
						<font color=#324D8A>Otra: <input type="text"  name="otra" ></td>
                           
                <td></td>
		</tr>
                
        </table>

        <table border="1" width=70%>
		<tr bgcolor="#324D8A">
		<td align=center width=800><font color="#FFFFFF">Fecha Notificacion</font></td>
		<td align=center width=800><font color="#FFFFFF">Area 1:</font></td>
		<td align=center width=800><font color="#FFFFFF">Area 2:</font></td>
		<td align=center width=800><font color="#FFFFFF">Auditor del Area</font></td>
		</tr>
                <tr>
		<td align=center width=800><input type=date name=fechanoti size=10></td>

 
                       <?php



                                echo "<td><select name=area>";
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






                                echo "<td><select name=area1>";
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









                                echo "<td><select name=auditor>"; 
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



                <tr bgcolor="#324D8A">
		<td align=center width=800><font color="#FFFFFF"></font></td>
		<td align=center width=800><font color="#FFFFFF">Nombre y Firma del Responsable 1:</font></td>
		<td align=center width=800><font color="#FFFFFF">Nombre y Firma del Responsable 2:</font></td>

		</tr><td></td>

                       <?php
                                echo "<td><select name=nombreres>";
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



                                echo "<td><select name=nombreres1>";
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










             
		
                <tr bgcolor="#324D8A">
		<td align=center width=800><font color="#FFFFFF">Nombre y Firma de quien informa la No Conformidad</font></td>
		<td align=center width=800><font color="#FFFFFF">Area 3:</font></td>
		<td align=center width=800><font color="#FFFFFF">Area 4:</font></td>
		<td align=center width=800><font color="#FFFFFF">Nombre y Firma</font></td>
		</tr>
                <tr>
		<td align=center width=800><input type=text name=nombreno></td>



<?php
                                

                                echo "<td><select name=area2>";
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




                                echo "<td><select name=area3>";
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




		<td align=center width=800><input type=text name=nombre></td>
		</tr>





                <tr bgcolor="#324D8A">
		<td align=center width=800><font color="#FFFFFF"></font></td>
		<td align=center width=800><font color="#FFFFFF">Nombre y Firma del Responsable 3:</font></td>
		<td align=center width=800><font color="#FFFFFF">Nombre y Firma del Responsable 4:</font></td>
		</tr>



                       <?php
                                echo "<td></td>";
                                echo "<td><select name=nombreres2>";
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



                                echo "<td><select name=nombreres3>";
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







        </table><br><br>

  <table width="28%" border="2" align="center" >
  
  <tbody>
 

  <tr><td colspan="2" align="center"><input type="submit" class="boot" name="guarda" value="GUARDAR"></td></tr>
  </tbody></table>
  
 
  </form></center>

		
        </div>
  </div>

                
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