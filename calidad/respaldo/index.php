

	<meta name="author" content="Luka Cvrk (www.solucija.com)" />
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/main.css" type="text/css" />
	<title>Abstract Studio</title>

	<div id="content">
		<div id="logo"><br>
                     <img src=SIRCA01.jpg alt="kkk">
			
		</div>


		
		<div id="intro"><br><br><br>
	      <h2><b><i>Coordinaci&oacute;n del Sistema de <br> Gesti&oacute;n de la Calidad.........</h2></b></i>
			<div id="login">
				
                        <div id="menu">
                        <ul>



</ul>
</div>
                               
			</div>

                    </div>
<?php
include('browser_class_inc.php');
$br = new browser();

$br->whatBrowser();
$version = $br->version; 
$navegador = $br->browsertype;
$platform = $br->platform;

//echo ''.$navegador.' </br>';
//echo ''.$version.' </br>';
//echo ''.$platform.' </br>';
if($navegador=="Chrome")
{
echo "<br><br><a href=indexx.html><h2><center><u>Usted entro en el navegador correcto de Enter <br> en esta liga para accesar</h2></a></u>";
}
else
{
echo "<h2><center>Para hacer uso de esta aplicacion debe de accesar con el navegador<br>Google Chrome descarguelo Ahora <a href=https://support.google.com/chrome/answer/95346?hl=es-419>Aqui</a><br><br>..Gracias
</h2></a>";
}


?>


</map>
</body>
</html>