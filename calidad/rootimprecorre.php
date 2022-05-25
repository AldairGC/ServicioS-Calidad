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


$idco=$_GET['idco'];

include('conecta.php');
$consulta=mysql_query("SELECT * FROM corre WHERE idco='$idco'",$link);

echo  "<table width='100%' border=3 bordercolor='#19070B'>";

              
              
                              
              echo  "<tr>";
              echo  "<td bgcolor=ffffff><h3><b><img src=logo.jpg><center><font size='3' face='arial'>UNIVERSIDAD TECNOLOGICA DE PUEBLA<br>CORRECCION</td>";
              echo  "</tr>";
              echo  "</table>";
	
while($row=mysql_fetch_array($consulta))
	{


					$idco=$row['idco'];
					$nomdoc=$row['nomdoc'];
					$folio=$row['folio'];
					$codigo=$row['codigo'];
					$hallazgo=$row['hallazgo'];
					$notifica=$row['notifica'];
					$area=$row['area'];
					$area1=$row['area1'];
					$area2=$row['area2'];
					$area3=$row['area3'];
					$lider=$row['lider'];
					$nomhalla=$row['nomhalla'];
					$nomres=$row['nomres'];
					$nomres1=$row['nomres1'];
					$nomres2=$row['nomres2'];
					$nomres3=$row['nomres3'];
					$descrip=$row['descrip'];
					$accion=$row['accion'];
					$audito=$row['audito'];
					$fecha=$row['fecha'];
					$tipo=$row['tipo'];


              echo  "<table width='100%' border=3 bordercolor='#19070B'>";
              echo  "<tr>";
              echo  "<td bgcolor=#E6E6E6><h3><b><font size='3' face='arial'>1.- Declaración de los Hallazgos</td>";
              echo  "<td bgcolor=ffffff><h3><b><center><font size='3' face='arial'>Folio:<font size='1' face='arial'>$folio</td>";
              echo  "</tr>";
              echo  "<tr>";
              echo  "<td><font size='1' face='arial'>Nombre del Documento o Formato:$nomdoc</td>";
              echo  "<td><font size='1' face='arial'>Código:$codigo</td>";
              echo  "</tr>";
              echo  "</table>";
              echo  "<table width='100%' border=3 bordercolor='#19070B'>";
              echo  "<tr>";
              echo  "<td><font size='1' face='arial'>Descripción del Hallazgo:</td>";
              echo  "</tr>";
              echo  "<tr>";
              echo  "<td><font size='1' face='arial'><textarea rows=5 cols=80>$hallazgo</textarea></td>";
              echo  "</tr>";
              echo  "</table>";
              echo  "<table width='100%' border=3 bordercolor='#19070B'>";
              echo  "<tr>";
              echo  "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'>Fecha de Notificación:$notifica</td>";
              echo  "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'>Area 1:$area;Area 2:$area1</td>";
              echo  "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'>Auditor Lider:</td>";
              echo  "</tr>";


              echo  "<tr>";
              echo  "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'></td>";
              echo  "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'>Area 3:$area2;Area 4:$area3</td>";
              echo  "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'></td>";
              echo  "</tr>";




              echo  "<tr>";
              echo  "<td><font size='1' face='arial'><textarea cols=23 rows=1>$nomhalla</textarea></td>";
              echo  "<td><font size='1' face='arial'><textarea cols=25 rows=1>$nomres</textarea></td>";
              echo  "<td><font size='1' face='arial'><textarea cols=20 rows=1>$lider</textarea></td>";
              echo  "</tr>";

              echo  "<tr>";
              echo  "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'>Nombre y Firma de quien informa el Hallazgo:</td>";
              echo  "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'>Nombre y Firma del Responsable 1:</td>";
              echo  "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'>Nombre y Firma:</td>";
              echo  "</tr>";


              echo  "<tr>";
              echo  "<td></td>";
              echo  "<td><font size='1' face='arial'><textarea cols=25 rows=1>$nomres1</textarea></td>";
              echo  "<td></td>";
              echo  "</tr>";

              echo  "<tr>";
              echo  "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'></td>";
              echo  "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'>Nombre y Firma del Responsable 2:</td>";
              echo  "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'></td>";
              echo  "</tr>";

              echo  "<tr>";
              echo  "<td></td>";
              echo  "<td><font size='1' face='arial'><textarea cols=25 rows=1>$nomres2</textarea></td>";
              echo  "<td></td>";
              echo  "</tr>";

              echo  "<tr>";
              echo  "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'></td>";
              echo  "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'>Nombre y Firma del Responsable 3:</td>";
              echo  "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'></td>";
              echo  "</tr>";

              echo  "<tr>";
              echo  "<td></td>";
              echo  "<td><font size='1' face='arial'><textarea cols=25 rows=1>$nomres3</textarea></td>";
              echo  "<td></td>";
              echo  "</tr>";

              echo  "<tr>";
              echo  "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'></td>";
              echo  "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'>Nombre y Firma del Responsable 4:</td>";
              echo  "<td align=center bgcolor=#E6E6E6><b><font size='1' face='arial'></td>";
              echo  "</tr>";







              echo  "</table>";
              echo  "<table width='100%' border=3 bordercolor='#19070B'>";
              echo  "<tr>";
              echo  "<td align=left bgcolor=#E6E6E6><b><font size='3' face='arial'>2.- Descripcion de la Corrección:</td>";
              echo  "</tr>";
              echo  "</table>";
              echo  "<table width='100%' border=3 bordercolor='#19070B'>";
              echo  "<tr>";
              echo  "<td><font size='1' face='arial'><textarea rows=10 cols=80>$descrip</textarea></td>";
              echo  "</table>";
              echo  "<table width='100%' border=3 bordercolor='#19070B'>";
              echo  "<tr>";
              echo  "<td align=left bgcolor=#E6E6E6><b><font size='3' face='arial'>3.- Verificación de la Corrección:</td>";
              echo  "</tr>";
              echo  "</table>";
              echo  "<table width='100%' border=3 bordercolor='#19070B'>";
              echo  "<td><font size='1' face='arial'><textarea rows=3 cols=60>$accion</textarea></td>";
              echo  "<td><font size='1' face='arial'>Nombre y Firma del Auditor:$audito</td>";
              echo  "</tr>";
              echo  "<tr>";
              echo  "<td></td>";
              echo  "<td></td>";
              echo  "</tr>";
              echo  "<tr>";
              echo  "<td></td>";
              echo  "<td><font size='1' face='arial'>Fecha:$fecha</td>";
              echo  "</tr>";

              echo  "</table>";
              echo  "<table width='100%' border=3 bordercolor='#19070B'>";
              echo  "<tr>";
              echo  "<td><h6>REV. 1 Fecha 26-05-14</td>";
              echo  "<td align=right><h6>FR-CC-06</td>";
              echo  "</tr>";
              echo  "</table>";







}
echo  "</table>";				

    
  

				
mysql_close($link);					 

?> 
</div>
</body>