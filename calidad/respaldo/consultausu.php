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
                                 <center>
								 
								 <br>
								 <br>
								 <br>
				 <table width="45%" height="15%" border="5px" bordercolor="black">
              			 <tr>
             			 <form action=consultausu1.php method=post>
                               	<td><b><center>Usuario: <input type=password name=va2 maxlength=10 required>
                               

				 
             			 	                     


             
              <?php



                                        echo "</td>";
                                        echo "</select>";


                                echo "<td><b><center>Password:<input type=password name=va1 maxlength=10 required> ";
                               






                                        echo "</td></tr>";
                                        echo "</select>";

                            
                            
                                    
				?>

                                </table>
				<br><br><input type=submit value='Consulta de Informacion'>
                                
				</form>

                      </div>		
        </div>

  </body>
</html>
             

