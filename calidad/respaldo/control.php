<?php
session_start();
$no='Administrador del Sistema';
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





include('menus.php');
?>
</ul>
</div>
                               
			</div>

                    </div>
<ul>
</map>
</body>
</html><br><br><br>

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




<body> 
<?php
$idac=$_POST['idac'];
include('conecta.php');
echo "<br><br><center><input type=button value='Impresion' onClick=window.open('usucontrol.php?idac=$idac','_blank')>";

?>



</body>