<?php
session_start();
$no='Auditor';

$var1=$_SESSION['usuario'];
$var2=$_SESSION['clave'];




$idco=$_POST['idco'];


				include_once("conecta.php");


				$consulta1=mysql_query("SELECT * FROM areas WHERE passauditor='$var2'",$link);
				while($row=mysql_fetch_array($consulta1))
			{

					
					$nomcal=$row['nomcal'];
                         }







				$consulta=mysql_query("SELECT * FROM corre WHERE idco='$idco' and lider='$nomcal'",$link);
				while($row=mysql_fetch_array($consulta))
			{
                                        $numero=$idco;
                         }


                       if($idco==$numero)
                          {

?>
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


<body> 
<?php


echo "<input type=button value='Imprimir' onClick=window.open('rootimprecorre.php?idco=$idco','_blank')>";
}
else
{
echo "<br><br><b><h2>No tiene registrada ninguna acci&oacute;n con este n&uacute;mero";
}
mysql_close($link);
?>



</body>