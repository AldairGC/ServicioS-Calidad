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
include('anunciopreventiva.php');
?>
<script>
function editar(idac){
	window.location="modius.php?idac="+idac;
}
function imprime(idac){
	window.location="impre2preusu.php?idac="+idac;
}
function eliminar(idac){
        var mensaje = "ESTAS SEGURO QUE QUIERES ELIMINAR";
	if(confirm(mensaje)){
		window.location="elimina.php?idac="+idac;
	}else{
	
	}
	
}
</script>
	<script language="javascript">
		function doSearch()
		{
			var tableReg = document.getElementById('datos');
			var searchText = document.getElementById('searchTerm').value.toLowerCase();
			var cellsOfRow="";
			var found=false;
			var compareWith="";
 
			// Recorremos todas las filas con contenido de la tabla
			for (var i = 1; i < tableReg.rows.length; i++)
			{
				cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
				found = false;
				// Recorremos todas las celdas
				for (var j = 0; j < cellsOfRow.length && !found; j++)
				{
					compareWith = cellsOfRow[j].innerHTML.toLowerCase();
					// Buscamos el texto en el contenido de la celda
					if (searchText.length == 0 || (compareWith.indexOf(searchText) > -1))
					{
						found = true;
					}
				}
				if(found)
				{
					tableReg.rows[i].style.display = '';
				} else {
					// si no ha encontrado ninguna coincidencia, esconde la
					// fila de la tabla
					tableReg.rows[i].style.display = 'none';
				}
			}
		}
	</script>

<style>
		#datoss	{border:1px solid #ccc;padding:10px;}
		#datoss  tr {
padding: 5px;
font-size: 12px;
color: white;
border-right-width: 1px;
border-bottom-width: 1px;
border-right-style: solid;
border-bottom-style: solid;
border-right-color: #558FA6;
border-bottom-color: #558FA6;
font-family: “Trebuchet MS”, Arial;
text-transform: uppercase;
}
		#datoss  td {
padding: 5px;
border-right-width: 1px;
border-bottom-width: 1px;
border-right-style: solid;
border-bottom-style: solid;
border-right-color: #A4C4D0;
border-bottom-color: #A4C4D0;
text-align:center;

}
	</style>


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


include('menuspreventivausu.php');

?>            


        </ul>
    </div> <!-- end of menu -->
    
</div> <!-- end of menu wrapper -->

<div id="templatemo_content">

	<div id="main_column">
    
    	<div class="section_w500">


             <center><h3><font color=#324D8A>Lista de acciones preventivas Levantadas por el Auditor</h3><br><br>
             
             <center><table width="40%" border="1px" bordercolor="black">
              <tr>
              <td bgcolor=#ffffff align="center"><b>No.</td>
              <td bgcolor=#ffffff align="center"><b>Folio</td>
              <td bgcolor=#ffffff align="center"><b>Nombre del Auditor</td>
              <td bgcolor=#ffffff align="center"><b>Modificacion</td>
              <td bgcolor=#ffffff align="center"><b>Impresion</td>

              </tr>
              <?php


include('conecta.php');


				$consulta1=mysql_query("SELECT * FROM areas1 WHERE passusu='$var2'",$link);
				while($row=mysql_fetch_array($consulta1))
				{
                                  $nomarea=$row['nomarea'];
                                  $x=1;
                                  


                                 }


if($x==1)
{


				$consulta=mysql_query("SELECT * FROM app WHERE area='$nomarea' or area1='$nomarea' or area2='$nomarea' or area3='$nomarea'",$link);
				while($row=mysql_fetch_array($consulta))
				{
					$idac=$row['idac'];
					$var1=$row['var1'];
					$var2=$row['var2'];
					$conforme=$row['conforme'];
					$folio=$row['folio'];
					$dete=$row['dete'];
					$otra=$row['otra'];
					$fechanoti=$row['fechanoti'];
					$area=$row['area'];
					$area1=$row['area1'];
					$area2=$row['area2'];
					$area3=$row['area3'];
					$auditor=$row['auditor'];
					$nombreno=$row['nombreno'];
					$nombreres=$row['nombreres'];
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
?>

                             <td><?php echo $row[0]?></td>
		<td><?php echo $row[2]?></td>
		<td><?php echo $row[11]?></td>

<?php

			  	

		echo '<td align=center>';
	        echo '<center><img src="imagenes/actions-edit.png" onclick="editar('.$row['idac'].')"/>  ';
		echo '<td align=center>';
		echo '<center><img src="im.jpg" onclick="imprime('.$row['idac'].')"/>';
		echo '</td>';


				  echo "</tr>";				
				}
				echo "</table>";
				?>
             </table>


             <center><h3>Lista de acciones preventivas Levantadas por el Usuario</h3><br><br>
             
             <center><table width="40%" border="1px" bordercolor="black">
              <tr>
              <td bgcolor=#ffffff align="center"><b>No.</td>
              <td bgcolor=#ffffff align="center"><b>Folio</td>
              <td bgcolor=#ffffff align="center"><b>Nombre del Auditor</td>


              </tr>
              <?php
$var1=$_POST['var1'];
$var2=$_POST['var2'];

include('conecta.php');

				$consulta1=mysql_query("SELECT * FROM areas1 WHERE usuusu='$var1'",$link);
				while($row=mysql_fetch_array($consulta1))
				{
                                  $nomcal=$row['nomcal'];

                                 }


				$consulta=mysql_query("SELECT * FROM app WHERE var1='$var1' and auditor<>'$nomcal' order by auditor",$link);
				while($row=mysql_fetch_array($consulta))
				{
					$idac=$row['idac'];
					$conforme=$row['conforme'];
					$folio=$row['folio'];
					$dete=$row['dete'];
					$otra=$row['otra'];
					$fechanoti=$row['fechanoti'];
					$area=$row['area'];
					$auditor=$row['auditor'];
					$nombreno=$row['nombreno'];
					$nombreres=$row['nombreres'];
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

			  	 echo "<td bgcolor=#ffffff>$idac</td>";
        			 echo "<td bgcolor=#ffffff>$folio</td>";	


				 echo "<td bgcolor=#ffffff>$auditor</td>";

				  echo "</tr>";				
				}
				echo "</table>";
				
             echo "</table>";


                                echo "</div>";		
        echo "</div>";
}
else
{
echo "Usuario o Contraseña Incorrecta";
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
        
        <div class="section_w940"><font color=white>
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


<link type="text/css" href="bootstrap.min.css" rel="stylesheet">
<style>


table {
    border-collapse: collapse;
    width: 80%;
}
th, td {
    text-align: center;
    padding: 4px;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
    background-color: #4CAF50;
    color: white;
}
.main-wrapper{
	width:80%;
	margin:0 auto;
}
hr {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
}
</style>