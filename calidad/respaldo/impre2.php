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


<body> 
<?php
$idac=$_POST['idac'];

echo "<input type=button value='Imprimir Frente' onClick=window.open('rootimpre.php?idac=$idac','_blank')>";
echo "<input type=button value='Imprimir Reverso' onClick=window.open('rootimpre1.php?idac=$idac','_blank')>";
?>



</body>