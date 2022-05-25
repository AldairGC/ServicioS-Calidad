<?php
session_start();
$no='Usuario';
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





include('menusee.php');
?>
</ul>
</div>
                               
			</div>

                    </div>
<ul>
</map>
</body>
</html>
<br>
<br>
<br>
<?php

if ($_GET["subir"]=="1")
{
	$uploaddir = "tmp2/";
	 $uploadfile = $uploaddir . basename($_FILES['archivo']['name']);
	 $error = $_FILES['archivo']['error'];
	 $subido = false;
	 if(isset($_POST['boton']) && $error==UPLOAD_ERR_OK) { 
	   $subido = copy($_FILES['archivo']['tmp_name'], $uploadfile); 
	   $nombre_archivo = basename($_FILES['archivo']['name']);
	   //echo $nombre_archivo."<br>";
	   $name = explode(".",$nombre_archivo);
	   $filename = $_GET["folio"]."-".$id."-".$iduser."-".date("dmyHis")."-".$name[0].".".$name[1];
	   rename("tmp2/".basename($_FILES['archivo']['name']), "tmp2/".$filename);
	   //echo "tmp2/".$filename;
	  } 
	   if($subido) { 
		
		echo "La evidencia fue cargada con exito..."; 
	   } else {
		echo "Se ha producido un error: ".$error;
  }
	 
}

if ($_GET["borrar"]=="1")
{
	unlink("tmp2/".$_GET["nombre_archivo"]);
	echo "El horario fue borrado exitosamente..."; 
}

?>


                    <form action="formato_productos2.php?id=<?= $_GET["id"] ?>&folio=<?= $mirow[0] ?>&subir=1" method="post" enctype="multipart/form-data" name="form"> 
<!--                      <label for="archivo">Archivo</label>-->
                      <input name="archivo" type="file" id="archivo" /> 
                      <br />
                      <input name="boton" type="submit" id="boton" value="Cargar" />
                     </form>
