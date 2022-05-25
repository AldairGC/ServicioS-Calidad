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
</html>
<?php  
 
$directorio = opendir("tmp5/");
echo "<center><b><h2>Listado de Evidencias de Acciones Correccion de todos los Auditores</h2>";  
echo "<table width='100' border='2px' bordercolor='#669933'>";
$x=0;

while ($archivo = readdir($directorio))     
{   $nombreArch = ucwords($archivo);
$x=$x+1;
echo "<tr><td>$x</td>";   
echo "<td><a href='tmp5/$archivo' target='_blank'><b>$nombreArch</b></a><br></td><td><a href='./borrar7.php?fichero=$nombreArch' target='_blank'> Borrar </a></td></tr>";       

    
}
echo "</table>";  
closedir($directorio);   
?>