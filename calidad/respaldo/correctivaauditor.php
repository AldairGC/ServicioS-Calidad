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
<br><br><br><br><br>				 			                     
                         
                  
                                


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

	<center><table border="1" width=50%>
		<tr>
		<center><td align=center><font size="4" color="#000000" face="Arial, Helvetica, sans-serif"><B>ACCION CORRECTIVA LEVANTADA POR EL AUDITOR</B></font></td></center>
		</tr>
        </table>
	<table border="1" width=50%>
		<tr bgcolor="#848484">
		<td align=center width=800><font color="#FFFFFF">1.- Declaraci&oacute;n de la No Conformidad</font></td>
                <td width=160><font color="#FFFFFF">Folio:<input type=hidden name=folio value=0></font></td>
		</tr>
        
		<tr><td><textarea name=conforme cols=60 rows=15 maxlength=900 required></textarea></td>
                <td>Detectada en:</td>
                           
                <td></td>
		</tr>
                <tr>
		<td></td><td><input type="checkbox"  name="dete" value='Auditoria Interna' > Auditoria Interna</td>
		</tr>
                <tr>
		<td></td><td><input type="checkbox"  name="dete1" value='Auditoria Externa' > Auditoria Externa</td>
		</tr>
		<tr>
		<td></td><td><input type="checkbox"  name="dete2" value='Queja o Sugerencia' > Queja o Sugerencia</td>
		</tr>
		<tr>
		<td></td><td><input type="checkbox"  name="dete3" value='Mejoras al SGC' > Mejoras al SGC</td>
		</tr>
		<tr>
		<td></td><td><input type="checkbox"  name="dete4" value='Indicadores del SGC' > Indicadores del SGC</td>
		</tr>
		<tr>
		<td></td><td>Otra: <input type="text"  name="otra" ></td>
		</tr>
        </table>

        <table border="1" width=70%>
		<tr bgcolor="#848484">
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

				$consulta=mysql_query("SELECT * FROM areas group by nomarea",$link);
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

				$consulta=mysql_query("SELECT * FROM areas group by nomarea",$link);
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

				$consulta=mysql_query("SELECT * FROM areas",$link);
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



                <tr bgcolor="#848484">
		<td align=center width=800><font color="#FFFFFF"></font></td>
		<td align=center width=800><font color="#FFFFFF">Nombre y Firma del Responsable 1:</font></td>
		<td align=center width=800><font color="#FFFFFF">Nombre y Firma del Responsable 2:</font></td>

		</tr><td></td>

                       <?php
                                echo "<td><select name=nombreres>";
                                  echo "<option value=>";

include('conecta.php');

				$consulta=mysql_query("SELECT * FROM areas group by titu",$link);
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

				$consulta=mysql_query("SELECT * FROM areas group by titu",$link);
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










             
		
                <tr bgcolor="#848484">
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

				$consulta=mysql_query("SELECT * FROM areas group by nomarea",$link);
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

				$consulta=mysql_query("SELECT * FROM areas group by nomarea",$link);
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





                <tr bgcolor="#848484">
		<td align=center width=800><font color="#FFFFFF"></font></td>
		<td align=center width=800><font color="#FFFFFF">Nombre y Firma del Responsable 3:</font></td>
		<td align=center width=800><font color="#FFFFFF">Nombre y Firma del Responsable 4:</font></td>
		</tr>



                       <?php
                                echo "<td></td>";
                                echo "<td><select name=nombreres2>";
                                  echo "<option value=>";

include('conecta.php');

				$consulta=mysql_query("SELECT * FROM areas group by titu",$link);
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

				$consulta=mysql_query("SELECT * FROM areas group by titu",$link);
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

        




		
        </div>
  </div>
<br><br><center><input type=submit value='Enviar a la Base de datos'>
</form>
</body>
</html>


	