<head>

<script>
function imprSelec(muestra, TituloDoc)
{
	var ficha=document.getElementById(muestra);
	var ventimp=window.open(' ','popimpr');
	ventimp.document.write(ficha.innerHTML);
	
	var title = ventimp.document.createElement("Title");
	var texto = ventimp.document.createTextNode(TituloDoc);
	title.appendChild(texto);
	ventimp.document.head.appendChild(title);
	
	var css = ventimp.document.createElement("link");
	css.setAttribute("href", "estilosp.css");
	css.setAttribute("rel", "stylesheet");
	css.setAttribute("type", "text/css");
	ventimp.document.head.appendChild(css);
	
	ventimp.document.close();
	ventimp.print();
	ventimp.close();
}
</script>

</head>


 <body onload='print()'>


<div id="formato">
<?PHP
$idac=$_GET['idac'];
include('conecta.php');

$consulta=mysql_query("SELECT * FROM ac WHERE idac='$idac'",$link);

	
while($row=mysql_fetch_array($consulta))
	{
					$idac=$row['idac'];
					$conforme=$row['conforme'];
					$folio=$row['folio'];
					$dete=$row['dete'];
					$dete1=$row['dete1'];
					$dete2=$row['dete2'];
					$dete3=$row['dete3'];
					$dete4=$row['dete4'];
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
					$porque1=$row['porque1'];
					$porque2=$row['porque2'];
					$porque3=$row['porque3'];
					$porque4=$row['porque4'];
					$porque5=$row['porque5'];
					$otratec=$row['otratec'];
					$causa1=$row['causa1'];
					$causa2=$row['causa2'];
					$causa3=$row['causa3'];
					$causa4=$row['causa4'];
					$causa5=$row['causa5'];
					$causa6=$row['causa6'];
					$efecto=$row['efecto'];


					$subcausa1=$row['subcausa1'];
					$subcausa2=$row['subcausa2'];
					$subcausa3=$row['subcausa3'];
					$subcausa4=$row['subcausa4'];
					$subcausa5=$row['subcausa5'];
					$subcausa6=$row['subcausa6'];



					$tipo=$row['tipo'];
					$efectivo=$row['efectivo'];
					$auditorarea=$row['auditorarea'];
					$fechaarea=$row['fechaarea'];
					$veriefectivo=$row['veriefectivo'];
					$auditorveri=$row['auditorveri'];
					$fechaveri=$row['fechaveri'];





              echo "<table width='100%' border=3 bordercolor='#19070B'>";
              echo "<tr>";
              echo "<td align=center bgcolor=#E6E6E6><b><font size='1' face='Arial'>Utilice alguna de las siguientes técnicas para el análisis de la Causa - Raíz de la No Conformidad:</td>";
              echo "</tr>";
              echo "</table>";

              echo "<table width='100%' border=3 bordercolor='#19070B'>";
              echo "<tr>";
              echo "<td align=left bgcolor=#E6E6E6><b><font size='1' face='Arial'>A) Técnica de los 5 por ques:</td>";
              echo "</tr>";
              echo "</table>";

              echo "<table width='100%' border=3 bordercolor='#19070B'>";
              echo "<tr>";
              echo "<td><b><font size='1' face='Arial'>1er Porque?</td>";
              echo "<td><b><font size='1' face='Arial'>2do Porque?</td>";
              echo "<td><b><font size='1' face='Arial'>3er Porque?</td>";
              echo "<td><b><font size='1' face='Arial'>4to Porque?</td>";
              echo "<td><b><font size='1' face='Arial'>5to Porque?</td>";
              echo "</tr>";
              //echo "</table>";

              //echo "<table width='100%' border=3 bordercolor='#19070B'>";


              echo "<tr>";
              echo "<td><font size='1' face='Arial'><textarea rows=20 cols=15>$porque1</textarea></td>";
              echo "<td><font size='1' face='Arial'><textarea rows=20 cols=15>$porque2</textarea></td>";
              echo "<td><font size='1' face='Arial'><textarea rows=20 cols=15>$porque3</textarea></td>";
              echo "<td><font size='1' face='Arial'><textarea rows=20 cols=15>$porque4</textarea></td>";
              echo "<td><font size='1' face='Arial'><textarea rows=20 cols=15>$porque5</textarea></td>";
              echo "</tr>";
              echo "</table>";
              echo "<table width='100%' border=3 bordercolor='#19070B'>";
              echo "<tr>";
              echo "<td align=left bgcolor=#E6E6E6><b><font size='1' face='Arial'>B) Técnica de Causa - Efecto:</td>";
              echo "</tr>";
              echo "</table>";
              echo "<table width='100%' border=3 bordercolor='#19070B'>";
              echo "<tr>";
              echo "<td><font size='1' face='Arial'>$causa1</td>";
              echo "<td><font size='1' face='Arial'>$causa2</td>";
              echo "<td><font size='1' face='Arial'>$causa3</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td><font size='1' face='Arial'>$subcausa1</td>";
              echo "<td><font size='1' face='Arial'>$subcausa2</td>";
              echo "<td><font size='1' face='Arial'>$subcausa3</td>";
              echo "</tr>";

              echo "<tr>";
              echo "<td>Causa:</td>";
              echo "<td align=right><font size='1' face='Arial'>Efecto:</td>";
              echo "<td><font size='1' face='Arial'>$efecto</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td><font size='1' face='Arial'>$causa4</td>";
              echo "<td><font size='1' face='Arial'>$causa5</td>";
              echo "<td><font size='1' face='Arial'>$causa6</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td><font size='1' face='Arial'>$subcausa4</td>";
              echo "<td><font size='1' face='Arial'>$subcausa5</td>";
              echo "<td><font size='1' face='Arial'>$subcausa6</td>";
              echo "</tr>";


              echo "</table>";
              echo "<table width='100%' border=3 bordercolor='#19070B'>";
              echo "<tr>";
              echo "<td align=left bgcolor=#E6E6E6><b><font size='1' face='Arial'>C) Cualquier otra Técnica de su Elección:</td>";
              echo "</tr>";
              echo "</table>";
              echo "<table width='100%' border=3 bordercolor='#19070B'>";
              echo "<tr>";
              echo "<td><font size='1' face='Arial'>$otratec</td>";
              echo "</tr>";
              echo "</table>";
              echo "<table width='100%' border=3 bordercolor='#19070B'>";
              echo "<tr>";
              echo "<td><h6>Rev. 1 Fecha: 26-05-14</td>";
              echo "<td align=right><h6>FR-CC-07</td>";
              echo "</tr>";
              echo "</table>";






}
echo "</table>";				

    
  

				
					 
mysql_close($link);				

?> 
</div>

</body>