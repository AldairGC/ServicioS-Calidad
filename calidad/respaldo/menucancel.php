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
</body><br><br>
</html>
<center><h2>ACCIONES CORRECTIVAS CANCELADAS</h2><br>
<?php
include_once("conecta.php");
				$consulta1=mysql_query("SELECT * FROM ac where cancel=1",$link);
             echo "<center><table width='60%' border='4px' bordercolor='black'>";
              echo "<tr>";
              echo "<td bgcolor=ffffff align=center><b>Id</td>";
              echo "<td bgcolor=ffffff align=center><b>Folio</b></td>";
              echo "<td bgcolor=ffffff align=center><b>Auditor</b></td>";
              echo "<td bgcolor=ffffff align=center><b>Retorno</b></td>";
              echo "</tr>";

              


                                
				while($row=mysql_fetch_array($consulta1))
				{
					$idac=$row['idac'];
					$folio=$row['folio'];
					$auditor=$row['auditor'];

                                echo "<td>$idac</td>";
                                echo "<td>$folio</td>";
                                echo "<td>$auditor</td>";
                                echo "<td align=center><form action=menucancel.php?x=2 method=post><input type=hidden name=idac value=$idac><input type=submit value=Retorno  name=regreso></form></td></tr>";

                                }

			echo "</table>";

                               

?>

                            <br><br><center><h2>ACCIONES PREVENTIVAS CANCELADAS</h2><br>
<?php
                
include('conecta.php');
				$consulta=mysql_query("SELECT * FROM ap where cancel=1",$link);
             echo "<center><table width='60%' border='4px' bordercolor='black'>";
              echo "<tr>";
              echo "<td bgcolor=ffffff align=center><b>Id</td>";
              echo "<td bgcolor=ffffff align=center><b>Folio</b></td>";
              echo "<td bgcolor=ffffff align=center><b>Auditor</b></td>";
              echo "<td bgcolor=ffffff align=center><b>Retorno</b></td>";

              echo "</tr>";

              


                                
				while($row=mysql_fetch_array($consulta))
				{
					$idac=$row['idac'];
					$folio=$row['folio'];
					$auditor=$row['auditor'];

                                echo "<td>$idac</td>";
                                echo "<td>$folio</td>";
                                echo "<td>$auditor</td>";
                                echo "<td align=center><form action=menucancel.php?x=1 method=post><input type=hidden name=idac value=$idac><input type=submit value=Retorno  name=regreso></form></td></tr>";
                                   

                                }


                               
             echo "</table>";
?>









                            <br><br><center><h2>CORRECCION CANCELADAS</h2><br>
<?php
                
include('conecta.php');
				$consulta2=mysql_query("SELECT * FROM corre where cancel=1",$link);
             echo "<center><table width='60%' border='4px' bordercolor='black'>";
              echo "<tr>";
              echo "<td bgcolor=ffffff align=center><b>Id</td>";
              echo "<td bgcolor=ffffff align=center><b>Folio</b></td>";
              echo "<td bgcolor=ffffff align=center><b>Auditor</b></td>";
              echo "<td bgcolor=ffffff align=center><b>Retorno</b></td>";

              echo "</tr>";

              


                                
				while($row=mysql_fetch_array($consulta2))
				{
					$idco=$row['idco'];
					$folio=$row['folio'];
					$lider=$row['lider'];

                                echo "<td>$idco</td>";
                                echo "<td>$folio</td>";
                                echo "<td>$lider</td>";
                                echo "<td align=center><form action=menucancel.php?x=3 method=post><input type=hidden name=idco value=$idco><input type=submit value=Retorno  name=regreso></form></td></tr>";
                                   

                                }
                 echo "</table>";

$regreso=isset($_POST['regreso']);

if($regreso)
{
$cero=0;
$x=$_GET['x'];

	        	     



$idac=$_POST['idac'];
include('conecta.php');

if($x==2)
{


		$consulta=mysql_query("SELECT * FROM ac where idac='$idac'",$link);
		while($row=mysql_fetch_array($consulta))
	
       			{

			mysql_query("UPDATE ac SET cancel='$cero' WHERE idac='$idac'",$link);

                        echo "<br><br><h2><center><b>La Accion No. $idac Regreso con Exito</center></b>";
                      
                        }





}
else{}


if($x==1)
{


		$consulta=mysql_query("SELECT * FROM ap where idac='$idac'",$link);
		while($row=mysql_fetch_array($consulta))
	
       			{

			mysql_query("UPDATE ap SET cancel='$cero' WHERE idac='$idac'",$link);

                        echo "<br><br><h2><center><b>La Accion No. $idac Regreso con Exito</center></b>";
                      
                        }





}
else{}


if($x==3)
{


		$consulta=mysql_query("SELECT * FROM corre where idco='$idco'",$link);
		while($row=mysql_fetch_array($consulta))
	
       			{

			mysql_query("UPDATE corre SET cancel='$cero' WHERE idco='$idco'",$link);

                        echo "<br><br><h2><center><b>La Accion No. $idco Regreso con Exito</center></b>";
                      
                        }





}
else{}







}
?>








                     

          

