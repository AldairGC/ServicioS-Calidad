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
				 			                     
                         
                  
                                

<br>
<form action=insertacorreusu.php method=post>
<input type=hidden name=tipo value=2><center>
	<table border="1" width=50%>
		<tr>
		<center><td align=center><font size="4" color="#000000" face="Arial, Helvetica, sans-serif"><B>CORRECCION</B></font></td></center>
		</tr>
        </table>
	<table border="1" width=80%>
		<tr bgcolor="#848484">
		<td><font color="#FFFFFF">1.- Declaracion de los hallazgos</font></td>
                <td><font color="#FFFFFF">Folio:<input type=hidden name=folio value=0></font></td>
		</tr>
        
		<tr><td>Nombre del Documento o Formato:<input type=text name=nomdoc size=50 required></td>
                <td>Codigo:<input type=text name=codigo size=15 required></td>
                  
		</tr>
        </table>
        <table border="1" width=80%>
                <tr>
		<td>Descripcion del Hallazgo:</td>
		</tr>
                <tr>
		<td><textarea name=hallazgo cols=90 rows=10 maxlength=900 required></textarea></td>
		</tr>
        </table>


	<center><table border="3" width=80%>
		<tr>
		<td>Fecha de Notificacion:<input type=date name=notifica></td>



                       <?php
                                echo "<td>Area 1:<select name=area>";
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



                       
                                echo "<td>Responsable 1:<select name=nomres>";
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
                                     


                         
	        	




                                echo "<td>Auditor:<select name=lider>"; 
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



		</tr>
                <td></td>


                       <?php
                                echo "<td>Area 2:<select name=area1>";
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


                       <?php
                                echo "<td>Responsable 2:<select name=nomres1>";
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




                <td></td><tr>
                <td></td>


                       <?php
                                echo "<td>Area 3:<select name=area2>";
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

                       <?php
                                echo "<td>Responsable 3:<select name=nomres2>";
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




                <td></td><tr>

                <td></td>


                       <?php
                                echo "<td>Area 4:<select name=area3>";
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

                       <?php
                                echo "<td>Responsable 4:<select name=nomres3>";
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




                <td></td>

		<tr>
		<td><textarea name=nomhalla cols=30 rows=1></textarea></td><td></td><td></td><td></td>



     
		</tr>
		<tr>
		<td align=center>Nombre y Firma de quien reporta el hallazgo</td>
		<td align=center></td><td></td>
		<td align=center>Nombre y Firma</td>
		</tr>
        </center></table>




	<table border="1" width=80%>
		<tr bgcolor="#848484">
		<td align=left ><font color="#FFFFFF">2.- Descripcion de la Correccion</font></td>
		</tr>
        </table>
	<table border="3" width=80%>
		<tr>
		<td><textarea name=descrip cols=80 rows=5 maxlength=150 required></textarea></td>
		</tr>
        </table>
	
                <input type=hidden name=audito value="">
		<input type=hidden name=accion value="">
                <input type=hidden name=fecha  value="">
		

        






		
        </div>
  </div>
<br><br><center><input type=submit value='Enviar a la Base de datos'>
</form>
</body>
</html>


	