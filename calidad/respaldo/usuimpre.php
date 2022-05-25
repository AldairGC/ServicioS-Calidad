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


echo "<table width='100%' border=1 bordercolor='#19070B'>";

              
              
                              
              echo "<tr>";
              echo "<td bgcolor=ffffff><h5><b><img src=logo.jpg hspace='20'><center><font size='1' face='arial'>UNIVERSIDAD TECNOLOGICA DE PUEBLA  <br>ACCION CORRECTIVA</td>";
              echo "</tr>";
              echo "</table>";
	
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
					$area1=$row['area1'];
					$area2=$row['area2'];
					$area3=$row['area3'];

					$auditor=$row['auditor'];
					$nombreno=$row['nombreno'];
					$nombreres=$row['nombreres'];
					$nombreres1=$row['nombreres1'];
					$nombreres2=$row['nombreres2'];
					$nombreres3=$row['nombreres3'];
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




              echo "<table width='100%' border=1 bordercolor='#19070B'>";
              echo "<tr>";
              echo "<td bgcolor=#E6E6E6><h3><b><font size='3' face='arial'>1.- Declaración de la no Conformidad</td>";
              echo "<td bgcolor=ffffff><h3><b><center><font size='1' face='arial'>Folio:$folio</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td bgcolor=ffffff><h3><b><font size='1' face='arial'>$conforme</td>";
              echo "<td bgcolor=#E6E6E6><h3><b><font size='1' face='arial'>Detectada en:<u>$dete:<u>$dete1:<u>$dete2:<u>$dete3:<u>$dete4<br>Otra:$otra</td>";


              echo "</tr>";

              //echo "<tr>";
              //echo "<td></td>";
              //echo "<td bgcolor=ffffff height=10><h3><b><font size='1' face='arial'>Otra:$otra</td>";
              //echo "</tr>";
              echo "</table>";

              echo "<table width='100%' border=1 bordercolor='#19070B'>";
              echo "<tr>";
              echo "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'>Fecha de Notificación:$fechanoti</td>";
              echo "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'>Area 1:$area;Area 2:$area1</td>";
              echo "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'>Auditor del Area:</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td><font size='1' face='arial'></td>";
              echo "<td align=center bgcolor=#E6E6E6><font size='1' face='arial'><font size='1' face='arial'><b>Area 3:$area2; Area 4:$area3</td></font>";
              echo "<td align=center><font size='1' face='arial'>$auditor</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td align=center><font size='1' face='arial'>$nombreno</td>";
              echo "<td align=center><font size='1' face='arial'>$nombreres</td>";
              echo "<td align=center><font size='1' face='arial'>$nombre</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'>Nombre y Firma de quien informa la No Conformidad:</td>";
              echo "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'>Nombre y Firma del Responsable 1:</td>";
              echo "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'>Nombre y Firma:</td>";
              echo "</tr>";

              echo "<tr>";
              echo "<td align=center><font size='1' face='arial'></td>";
              echo "<td align=center><font size='1' face='arial'>$nombreres1</td>";
              echo "<td align=center><font size='1' face='arial'></td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'></td>";
              echo "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'>Nombre y Firma del Responsable 2:</td>";
              echo "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'></td>";
              echo "</tr>";

              echo "<tr>";
              echo "<td align=center><font size='1' face='arial'></td>";
              echo "<td align=center><font size='1' face='arial'>$nombreres2</td>";
              echo "<td align=center><font size='1' face='arial'></td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'></td>";
              echo "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'>Nombre y Firma del Responsable 3:</td>";
              echo "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'></td>";
              echo "</tr>";

              echo "<tr>";
              echo "<td align=center><font size='1' face='arial'></td>";
              echo "<td align=center><font size='1' face='arial'>$nombreres3</td>";
              echo "<td align=center><font size='1' face='arial'></td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'></td>";
              echo "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'>Nombre y Firma del Responsable 4:</td>";
              echo "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'></td>";
              echo "</tr>";





              echo "</table>";


              echo "<table width='100%' border=1 bordercolor='#19070B'>";
              echo "<tr>";
              echo "<td align=left bgcolor=#E6E6E6><b><font size='3' face='arial'>2.- Accion Inmedita:</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td><font size='1' face='arial'>$accionin</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td align=left bgcolor=#E6E6E6><b><font size='3' face='arial'>3.- Resultado del Análisis de Causa Raíz de la NC (Utilizar Técnicas al 
              Reverso):</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td><font size='1' face='arial'>$resultado</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td align=left bgcolor=#E6E6E6><b><font size='3' face='arial'>4.- Acciones a implantar para asegurar que no vuelva a ocurrir la No Conformidad:</td>";
              echo "</tr>";
              echo "</table>";
              echo "<table width='100%' border=1 bordercolor='#19070B'>";


              echo "<tr>";
              echo "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'>Acciones:</td>";
              echo "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'>Responsables:</td>";
              echo "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'>Fecha:</td>";
              echo "</tr>";

              echo "<tr>";
              echo "<td><font size='1' face='arial'>$accion1</td>";
              echo "<td><font size='1' face='arial'>$res1</td>";
              echo "<td><font size='1' face='arial'>$fecha1</td>";
              echo "</tr>";

              echo "<tr>";
              echo "<td><font size='1' face='arial'>$accion2</td>";
              echo "<td><font size='1' face='arial'>$res2</td>";
              echo "<td><font size='1' face='arial'>$fecha2</td>";
              echo "</tr>";

              echo "<tr>";
              echo "<td><font size='1' face='arial'>$accion3</td>";
              echo "<td><font size='1' face='arial'>$res3</td>";
              echo "<td><font size='1' face='arial'>$fecha3</td>";
              echo "</tr>";

              echo "<tr>";
              echo "<td><font size='1' face='arial'>$accion4</td>";
              echo "<td><font size='1' face='arial'>$res4</td>";
              echo "<td><font size='1' face='arial'>$fecha4</td>";
              echo "</tr>";

              echo "<tr>";
              echo "<td><font size='1' face='arial'>$accion5</td>";
              echo "<td><font size='1' face='arial'>$res5</td>";
              echo "<td><font size='1' face='arial'>$fecha5</td>";
              echo "</tr>";
              echo "</table>";
              echo "<table width='100%' border=1 bordercolor='#19070B'>";
              echo "<tr>";
              echo "<td align=left bgcolor=#E6E6E6><b><font size='3' face='arial'>5.- Efectividad de la Implantación:</td>";
              echo "</tr>";
              echo "</table>";
              echo "<table width='100%' border=1 bordercolor='#19070B'>";
              echo "<tr>";
              echo "<td><font size='1' face='arial'><textarea rows=5 cols=40>$efectivo</textarea></td>";
              echo "<td><font size='1' face='arial'>Nombre y Firma del Auditor del area:$auditorarea</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td></td>";
              echo "<td><font size='1' face='arial'>Fecha:$fechaarea</td>";
              echo "</tr>";
              echo "</table>";
              echo "<table width='100%' border=1 bordercolor='#19070B'>";
              echo "<tr>";
              echo "<td><font size='1' face='arial'><textarea rows=5 cols=40>$veriefectivo</textarea></td>";
              echo "<td><font size='1' face='arial'>Nombre y Firma del Auditor interno:$auditorveri</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td></td>";
              echo "<td><font size='1' face='arial'>Fecha:$fechaveri</td>";
              echo "</tr>";
              echo "</table>";
              echo "<table width='100%' border=1 bordercolor='#19070B'>";
              echo "<tr>";
              echo "<td><h6>Rev. 1 Fecha 26-05-14</td>";
              echo "<td align=right><h6>FR-CC-07</td>";
              echo "</tr>";
              echo "</table>";







}
echo "</table>";				

    
  

				
mysql_close($link);					 
				

?> 
</div>

</body>