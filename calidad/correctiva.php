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

include('menuscorrectiva.php');

?>            


        </ul>
    </div> <!-- end of menu -->
    
</div> <!-- end of menu wrapper -->

<div id="templatemo_content">

	<div id="main_column">
    
    	<div class="section_w500">

<br>

<form action=inserta.php method=post>

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

	<center><table border="1" width=50% color=black>
		<tr>
		<td align=center><center><font size="4" color="#000000" face="Arial, Helvetica, sans-serif">ALTA ACCION CORRECTIVA</font></center></td>
		</tr>
        </table><br>
	<table border="1" width=50%>
		<tr bgcolor="#324D8A">
		<td align=center width=800><font color="#FFFFFF">1.- Declaracion de la No Conformidad</font></td>
                <td width=160><font color="#FFFFFF">Folio:<input type=text name=folio size=10></font></td>
		</tr>
        
		<tr><td><textarea name=conforme cols=60 rows=15 maxlength=900></textarea></td>
               <td><font color=#324D8A>Detectada en:<br>
<input type="checkbox"  name="dete" value='Auditoria Interna'><font color=#324D8A> Auditoria Interna<br>
<input type="checkbox"  name="dete1" value='Auditoria Externa'><font color=#324D8A> Auditoria Externa<br>
<input type="checkbox"  name="dete2" value='Queja o Sugerencia'><font color=#324D8A> Queja o Sugerencia<br>
<input type="checkbox"  name="dete3" value='Mejoras al SGC'><font color=#324D8A> Mejoras al SGC<br>
<input type="checkbox"  name="dete4" value='Indicadores del SGC'><font color=#324D8A> Indicadores del SGC<br>
<font color=#324D8A>Otra: <input type="text"  name="otra"></td>
		</tr>
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









                                echo "<td><select name=auditor>"; 
                                  echo "<option value=>"; 






include('conecta.php');

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


                         
	        	?>



                <tr bgcolor="#324D8A">
		<td align=center width=800><font color="#FFFFFF"></font></td>
		<td align=center width=800><font color="#FFFFFF">Nombre y Firma del Responsable 1:</font></td>
		<td align=center width=800><font color="#FFFFFF">Nombre y Firma del Responsable 2:</font></td>

		</tr><td></td>

                       <?php
                                echo "<td><select name=nombreres>";
                                  echo "<option value=>";

include('conecta.php');

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

include('conecta.php');

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




                                echo "<td><select name=area3>";
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

include('conecta.php');

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

include('conecta.php');

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







        </table>

        <table border="1" width=70%>


                <tr bgcolor="#324D8A"><td></td>
		<td align=center width=800><font color="#FFFFFF">Accion Inmediata</font></td>
                <td></td>
		</tr>
                <tr>
		<td></td>
		<td><textarea name=accionin cols=40 rows=5 maxlength=150></textarea></td>
		<td></td>
		</tr>
                <tr bgcolor="#324D8A"><td></td>
		<td align=center width=800><font color="#FFFFFF">Resultado del Analisis de Causa Raiz de la NC</font></td>
                <td></td>
		</tr>
                <tr>
		<td></td>
		<td><textarea name=resultado cols=40 rows=5 maxlength=180></textarea></td>
		<td></td>
		</tr>
		<tr bgcolor="#324D8A">
		<td></td>
		<td align=center width=800><font color="#FFFFFF">Acciones a implementar para asegurar que no vuelva a ocurrir</td>
		<td></td>
		</tr>
                <tr>
		<td align=center><font color=#324D8A>Acciones</td>
		<td align=center><font color=#324D8A>Responsables</td>
		<td align=center><font color=#324D8A>Fecha:</td>
		</tr>
                <tr>
		<td align=center width=800><input type=text name=accion1 maxlength=100></td>
		<td align=center width=800><input type=text name=res1 maxlength=30></td>
		<td align=center width=800><input type=date name=fecha1 size=11></td>
		</tr>
                <tr>
		<td align=center width=800><input type=text name=accion2  maxlength=100></td>
		<td align=center width=800><input type=text name=res2 maxlength=30 ></td>
		<td align=center width=800><input type=date name=fecha2 size=11></td>
		</tr>
                <tr>
		<td align=center width=800><input type=text name=accion3  maxlength=100></td>
		<td align=center width=800><input type=text name=res3 maxlength=30 ></td>
		<td align=center width=800><input type=date name=fecha3 size=11></td>
		</tr>
                <tr>
		<td align=center width=800><input type=text name=accion4  maxlength=100></td>
		<td align=center width=800><input type=text name=res4 maxlength=30 ></td>
		<td align=center width=800><input type=date name=fecha4 size=11></td>
		</tr>
                <tr>
		<td align=center width=800><input type=text name=accion5  maxlength=100></td>
		<td align=center width=800><input type=text name=res5 maxlength=30 ></td>
		<td align=center width=800><input type=date name=fecha5 size=11 ></td>
		</tr>
        </table>

        <table border="1" width=70%>
		<tr bgcolor="#324D8A">

		<td align=center width=800><font color="#FFFFFF">Utilice alguna de las siguientes tecnicas para el analisis de la Causa - Raiz de la No.<br>Conformidad</td>

		</tr>
        </table>
        <table border="1" width=70%>

                <tr>
		<td bgcolor='#324D8A'><b>Tecnica de los 5 por ques</td>
		</tr>
        </table>
        <table border="1" width=70%>
                <tr>
		<td bgcolor='#324D8A'>1er Porque?</td>
		<td bgcolor='#324D8A'>2dor Porque?</td>
		<td bgcolor='#324D8A'>3er Porque?</td>
		<td bgcolor='#324D8A'>4 to Porque?</td>
		<td bgcolor='#324D8A'>5 to Porque?</td>
		</tr>



                <tr>
		<td><textarea rows=20 cols=10 name=porque1 maxlength=150></textarea></td>
		<td><textarea rows=20 cols=10 name=porque2 maxlength=150></textarea></td>
		<td><textarea rows=20 cols=10 name=porque3 maxlength=150></textarea></td>
		<td><textarea rows=20 cols=10 name=porque4 maxlength=150></textarea></td>
		<td><textarea rows=20 cols=10 name=porque5 maxlength=150></textarea></td>
		</tr>
        </table>
        <table border="1" width=70%>

                <tr>
		<td bgcolor='#324D8A'><b>Analisis de Causa Efecto</td>
		</tr>
        </table>
        <table border="1" width=70%>
                <tr>
		<td bgcolor='#324D8A'>Causas: <input type=text name=causa1 value=1><input type=text name=causa2 value=2><input type=text name=causa3 value=3></td>

		</tr>
                <tr>
		<td bgcolor='#324D8A'>Subcausa: <textarea name=subcausa1 cols=10 rows=10>1</textarea><textarea name=subcausa2 cols=10 rows=10>2</textarea><textarea name=subcausa3 cols=10 rows=10>3</textarea></td>

		</tr>

        </table>



        <table border="1" width=70%>
                <tr>

		<td bgcolor='#324D8A'>Causas: <input type=text name=causa4 value=4><input type=text name=causa5 value=5><input type=text name=causa6 value=6></td>
		</tr>
                <tr>

		<td bgcolor='#324D8A'>Subcausa: <textarea name=subcausa4 cols=10 rows=10>4</textarea><textarea name=subcausa5 cols=10 rows=10>5</textarea><textarea name=subcausa6 cols=10 rows=10>6</textarea></td>
		</tr>

                <tr>
		<td bgcolor='#324D8A'>Efecto: <input type=text name=efecto size=80></td>
		</tr>
        </table>


        <table border="1" width=70%>

                <tr>
		<td bgcolor='#324D8A'><b>Cualquier otra tecnica de su eleccion</td>
		</tr>
        </table>
        <table border="1" width=70%>
                <tr>
		<td><textarea rows=20 cols=70 name=otratec maxlength=150></textarea></td>
		</tr>
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