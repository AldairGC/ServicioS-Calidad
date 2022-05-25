<?php
session_start();
$no='Auditor';
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





include('menuse.php');
?>
</ul>
</div>
                               
			</div>

                    </div>
<ul>
</map>
</body>
</html>
<br><br><br><br>
<center><table width="50%" border="5px" bordercolor="black">
              			 <tr>

                       <?php
include_once("conecta.php");

$idac=$_POST['idac'];
$efectivo=$_POST['efectivo'];
$auditorarea=$_POST['auditorarea'];
$fechaarea=$_POST['fechaarea'];
$veriefectivo=$_POST['veriefectivo'];
$auditorveri=$_POST['auditorveri'];
$fechaveri=$_POST['fechaveri'];

	mysql_query("UPDATE ap SET efectivo='$efectivo', auditorarea='$auditorarea', fechaarea='$fechaarea', veriefectivo='$veriefectivo', auditorveri='$auditorveri', fechaveri='$fechaveri' WHERE idac='$idac'",$link);
				
			        echo "<td bgcolor=ffffff align='center'><b>Se ha Modificado la Informacion</td>";   
mysql_close($link);
			?>
			</div></div>
             </center>
     
  </body>
</html>

