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
				 <center><table width="50%" border="5px" bordercolor="black">
              			 <tr>
             			








<?php

$idac=$_POST['idac'];
include('conecta.php');
$numero=0;
$consulta=mysql_query("SELECT * FROM ac WHERE idac='$idac'",$link); 
while($row=mysql_fetch_array($consulta))
			  {
			    $idac=$row['idac'];
                            $numero=$idac;
                           			  	
			  }
                 if($idac=$numero)
                          {
                            mysql_query("DELETE FROM ac WHERE idac='$idac'",$link); 
                            echo "<center><td bgcolor=ffffff align=center><b>Se ha borrado el registro de la Base de Datos</td>";
                           }
                         else
                          {
               	          echo "<center><td bgcolor=ffffff align=center><b>No se encuentra el registro en la Base de Datos</td>";
                          }


mysql_close($link);
?>
</table>


 	                     

                                </div>		
        </div>

  </body>
</html>


