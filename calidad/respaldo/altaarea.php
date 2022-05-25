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
<br><br><br><br>
<form action=insertaarea.php method=post>
	<center><table border="1" width=50%>
		<tr>
		<td align=center><center><font size="4" color="#000000" face="Arial, Helvetica, sans-serif"><B>CATALOGO DE AREAS</B></font></center></td>
		</tr>
        </table>
	<table border="3" width=50%>
		<tr>
		<td><b>Clave:<input type=text name=clave size=3></td><br></tr><tr>
		<td><b>Area:<input type=text name=nomarea size=80></td><br></tr><tr>
		<td><b>Nombre del Auditor:<input type=text name=nomcal size=60></td></tr><tr>
		<td><b>Nombre del Titular:<input type=text name=titu size=60></td></tr><tr>
		<td><b>Usuario Auditor:<input type=text name=usuauditor maxlength=10></td></tr><tr>
		<td><b>Password Auditor:<input type=text name=passauditor maxlength=10></td></tr><tr>
		<td><b>Usuario Usuario:<input type=text name=usuusu maxlength=10></td></tr><tr>
		<td><b>Password Usuario:<input type=text name=passusu maxlength=10></td></tr><tr>

		</tr>
        </table>





		
        </div>
  </div>
<br><br><center><input type=submit value='Enviar a la Base de datos'>
</form>
</body>
</html>


	