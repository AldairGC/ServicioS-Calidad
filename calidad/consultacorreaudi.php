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

<script>
function editar(idco){
	window.location="modicorreaudi.php?idco="+idco;
}
function imprime(idco){
	window.location="impre2corre.php?idco="+idco;
}
function eliminar(idco){
        var mensaje = "ESTAS SEGURO QUE QUIERES ELIMINAR";
	if(confirm(mensaje)){
		window.location="elimina.php?idco="+idco;
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

 <br>




	<center><table border="1" width=50% color=black >
		<tr>
		<td align=center><center><font size="4" color="#000000" face="Arial, Helvetica, sans-serif">CONSULTA ACCION CORRECCION Auditor:  <?php echo $nomcal; ?></font></center></td>
		</tr>
        </table><br>

                     <form>
		<font size=3 color=#324D8A>Cadena a buscar <input id='searchTerm' type='text' onkeyup='doSearch()' /><br><br>
	</form><br>
            
            <center> 
             <table width="30%" border="4px" bordercolor="black"  id='datos' class='datoss'>
              <tr>
              <td bgcolor=ffffff ><font color=#324D8A><b>No.</td>
              <td bgcolor=ffffff ><font color=#324D8A><b>Folio</td>
              <td bgcolor=ffffff ><font color=#324D8A><b>Nombre del Auditor</td>
              <td bgcolor=ffffff ><font color=#324D8A><b>Modifica</td>
              <td bgcolor=ffffff ><font color=#324D8A><b>Imprime</td>


              </tr>
              <?php


include('conecta.php');
include("class.pagina.php");


              $sql="select * from corres  WHERE var2='$var1' and var1='$var2'";
	$PAGINADOR=new PAGINADOR($sql);
	
	$sql=$PAGINADOR->sql;
	
	$res=mysql_query($sql) or die($sql." - ".mysql_error());
	while($row=mysql_fetch_array($res))
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
?>

                             <td><font color=#324D8A><?php echo $row[0]?></td>
		<td><font color=#324D8A><?php echo $row[2]?></td>
		<td><font color=#324D8A><?php echo $row[7]?></td>

<?php

			  	

		echo '<td align=center>';
	        echo '<center><img src="imagenes/actions-edit.png" onclick="editar('.$row['idco'].')"/>  ';
		echo '<td align=center>';
		echo '<center><img src="im.jpg" onclick="imprime('.$row['idco'].')"/>';
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
echo $PAGINADOR->ver_pagina("consultacorreaudi.php");
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
<link type="text/css" href="bootstrap.min.css" rel="stylesheet">
<style>


table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    text-align: left;
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