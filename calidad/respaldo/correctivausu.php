<?php
session_start();
$no='Usuario';
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





include('menusee.php');
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

<form id="miForm" action=insertausu.php method=post onsubmit="return valida(this)>
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
		<center><td align=center><font size="4" color="#000000" face="Arial, Helvetica, sans-serif"><B>ACCION CORRECTIVA DEL USUARIO</B></font></center></td>
		</tr>
		</center>
        </table>



	<center><table border="1" width=50%>
		<tr bgcolor="#848484">
		<td align=center width=800><font color="#FFFFFF">1.- Declaraci&oacute;n de la No Conformidad</font></td>
                <td width=160><font color="#FFFFFF">Folio:<input type=hidden name=folio value=0></font></td>
		</tr>
        
		<tr><td><textarea name=conforme cols=60 rows=15 maxlength=900 required></textarea></td>
                <td>Detectada en:</td>
                           
                <td></td>
		</tr>
                <tr>
		<td></td><td><input type="checkbox"  name="dete" id=dete value='Auditoria Interna' > Auditoria Interna</td>
		</tr>
                <tr>
		<td></td><td><input type="checkbox"  name="dete1" id=dete1 value='Auditoria Externa' > Auditoria Externa</td>
		</tr>
		<tr>
		<td></td><td><input type="checkbox"  name="dete2" id=dete2 value='Queja o Sugerencia' > Queja o Sugerencia</td>
		</tr>
		<tr>
		<td></td><td><input type="checkbox"  name="dete3" id=dete3 value='Mejoras al SGC' > Mejoras al SGC</td>
		</tr>
		<tr>
		<td></td><td><input type="checkbox"  name="dete4" id=dete4 value='Indicadores del SGC' > Indicadores del SGC</td>
		</tr>
		<tr>
		<td></td><td>Otra: <input type="text"  name="otra" id=otra></td>
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


                                       if($nomcal==''){}else{


                                        echo "<option value='$nomarea'>$nomarea";}
                                        



								
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



        <table border="1" width=70%>

                <tr bgcolor="#848484"><td></td>
		<td align=center width=800><font color="#FFFFFF">2.- Accion Inmediata</font></td>
                <td></td>
		</tr>
                <tr>
		<td></td>
		<td><textarea name=accionin cols=40 rows=5 maxlength=250 required></textarea></td>
		<td></td>
		</tr>
                <tr bgcolor="#848484"><td></td>
		<td align=center width=800><font color="#FFFFFF">3.- Resultado del An&aacute;lisis de Causa Ra&iacute;z de la NC(Utilizar T&eacute;cnicas de An&aacute;lisis)</font></td>
                <td></td>
		</tr>
                <tr>
		<td></td>
		<td><textarea name=resultado cols=40 rows=5 maxlength=250 required></textarea></td>
		<td></td>
		</tr>
		<tr bgcolor="#848484">
		<td></td>
		<td align=center width=800><font color="#FFFFFF">4.- Acciones a implementar para asegurar que no vuelva a ocurrir</td>
		<td></td>
		</tr>
                <tr>
		<td align=center>Acciones</td>
		<td align=center>Responsables</td>
		<td align=center>Fecha:</td>
		</tr>
                <tr>
		<td align=center width=800><input type=text name=accion1 required></td>
		<td align=center width=800><input type=text name=res1 required></td>
		<td align=center width=800><input type=date name=fecha1 size=11 required></td>
		</tr>
                <tr>
		<td align=center width=800><input type=text name=accion2 ></td>
		<td align=center width=800><input type=text name=res2 ></td>
		<td align=center width=800><input type=date name=fecha2 size=11 ></td>
		</tr>
                <tr>
		<td align=center width=800><input type=text name=accion3 ></td>
		<td align=center width=800><input type=text name=res3 ></td>
		<td align=center width=800><input type=date name=fecha3 size=11 ></td>
		</tr>
                <tr>
		<td align=center width=800><input type=text name=accion4 ></td>
		<td align=center width=800><input type=text name=res4 ></td>
		<td align=center width=800><input type=date name=fecha4 size=11 ></td>
		</tr>
                <tr>
		<td align=center width=800><input type=text name=accion5 ></td>
		<td align=center width=800><input type=text name=res5 ></td>
		<td align=center width=800><input type=date name=fecha5 size=11 ></td>
		</tr>
        </table>

        <table border="1" width=70%>
		<tr bgcolor="#848484">

		<td align=center width=800><font color="#FFFFFF">Utilice alguna de las siguientes tecnicas para el analisis de la Causa - Raiz de la No.<br>Conformidad</td>

		</tr>
        </table>
        <table border="1" width=70%>

                <tr>
		<td><b>Tecnica de los 5 por ques</td>
		</tr>
        </table>
        <table border="1" width=70%>
                <tr>
		<td>1er Porque?</td>
		<td>2dor Porque?</td>
		<td>3er Porque?</td>
		<td>4 to Porque?</td>
		<td>5 to Porque?</td>
		</tr>



                <tr>
		<td><textarea rows=20 cols=10 name=porque1 maxlength=200></textarea></td>
		<td><textarea rows=20 cols=10 name=porque2 maxlength=200></textarea></td>
		<td><textarea rows=20 cols=10 name=porque3 maxlength=200></textarea></td>
		<td><textarea rows=20 cols=10 name=porque4 maxlength=200></textarea></td>
		<td><textarea rows=20 cols=10 name=porque5 maxlength=200></textarea></td>
		</tr>
        </table>
        <table border="1" width=70%>

                <tr>
		<td><b>An&aacute;lisis de Causa Efecto</td>
		</tr>
        </table>
        <table border="1" width=70%>
                <tr>
		<td>Causas: <input type=text name=causa1 value=1><input type=text name=causa2 value=2><input type=text name=causa3 value=3></td>

		</tr>
                <tr>
		<td>Subcausa: <textarea name=subcausa1 cols=16 rows=10>1</textarea><textarea name=subcausa2 cols=16 rows=10>2</textarea><textarea name=subcausa3 cols=16 rows=10>3</textarea></td>

		</tr>

        </table>
        <table border="1" width=70%>
                <tr>

		<td>Causas: <input type=text name=causa4 value=4><input type=text name=causa5 value=5><input type=text name=causa6 value=6></td>
		</tr>
                <tr>

		<td>Subcausa: <textarea name=subcausa4 cols=16 rows=10>4</textarea><textarea name=subcausa5 cols=16 rows=10>5</textarea><textarea name=subcausa6 cols=16 rows=10>6</textarea></td>
		</tr>

                <tr>
		<td>Efecto: <input type=text name=efecto size=80></td>
		</tr>
        </table>

        <table border="1" width=70%>

                <tr>
		<td><b>Cualquier otra tecnica de su eleccion</td>
		</tr>
        </table>
        <table border="1" width=70%>
                <tr>
		<td><textarea rows=20 cols=100 name=otratec maxlength=1500></textarea></td>
                

		</tr>
        </table>





		
        </div>
  </div>
<br><br><center><input type=submit value='Enviar a la Base de datos'>
</form>
</body>
</html>


	