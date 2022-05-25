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
	window.location="modipreaudi.php?idac="+idac;
}
function imprime(idac){
	window.location="impre2preaudi.php?idac="+idac;
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


include('menuspreventivaaudi.php');

?>            


        </ul>
    </div> <!-- end of menu -->
    
</div> <!-- end of menu wrapper -->

<div id="templatemo_content">

	<div id="main_column">
    
    	<div class="section_w500">
<?php

include('conecta.php');
$consultaa=mysql_query("SELECT * FROM areas1 where passauditor='$var2'",$link);
				while($row=mysql_fetch_array($consultaa))
				{



    
					$nomcal=$row['nomcal'];
					$passauditor=$row['passauditor'];
                                                            }

?>

  <br>




	<center><table border="1" width=50% color=black >
		<tr>
		<td align=center><center><font size="4" color="#000000" face="Arial, Helvetica, sans-serif">CONSULTA ACCION PREVENTIVA Auditor:  <?php echo $nomcal; ?></font></center></td>
		</tr>
        </table><br>

                     <form>
		<font size=3 color=#324D8A>Cadena a buscar <input id='searchTerm' type='text' onkeyup='doSearch()' /><br><br>
	</form><br>

             <center><table width="60%" border="1px" id='datos' class='datoss'>
              <tr>
              <td bgcolor=ffffff align="middel"><b>No.</td>
              <td bgcolor=ffffff align="center"><b>Folio</td>

              <td bgcolor=ffffff align="center"><b>Modifica</td>
              <td bgcolor=ffffff align="center"><b>Imprime</td>


              </tr>
              <?php


include("class.pagina.php");


				$consulta=mysql_query("SELECT * FROM areas1 where passauditor='$var2'",$link);
				while($row=mysql_fetch_array($consulta))
				{



    
					$nomcal=$row['nomcal'];
					$passauditor=$row['passauditor'];
               }


              $sql="select * from app where auditor='$nomcal'";
	$PAGINADOR=new PAGINADOR($sql);
	
	$sql=$PAGINADOR->sql;
	
	$res=mysql_query($sql) or die($sql." - ".mysql_error());
	while($row=mysql_fetch_array($res))
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






?>

                             <td><?php echo $row[0]?></td>
		<td><?php echo $row[2]?></td>


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

<table bordercolor=black width=50 border=1 bgcolor=#324D8A>
<tr>

<div class="section_w9400">
<hr />
<?php 
echo "<td><b>";
echo $PAGINADOR->ver_pagina("consultapreaudi1.php");
echo "</td></b>";
?>
</div>
</tr>
</table>
                
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