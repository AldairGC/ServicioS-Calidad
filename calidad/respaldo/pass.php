<?php
session_start();
$_SESSION['usuario']=$_REQUEST['n'];
$_SESSION['clave']=$_REQUEST['c'];
?>
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
$n=$_POST['n'];
$c=$_POST['c'];


include('conecta.php');


$consulta=mysql_query("SELECT * FROM areas WHERE ((usuusu='$n' and passusu='$c') or (usuauditor='$n' and passauditor='$c'))",$link);
while($row=mysql_fetch_array($consulta))
 {
					$usuauditor=$row['usuauditor'];
					$passauditor=$row['passauditor'];
					$usuusu=$row['usuusu'];
					$passusu=$row['passusu'];
}
                           
                           





					if ($n=="root" & $c=="12345")
				{
                                    echo "<head>";
        	                    echo "<meta charset='utf-8'>";
                                    echo "<link rel='stylesheet' href='hoja1.css'>";
                                    echo "<script src='http://code.jquery.com/jquery-1.7.1.min.js'></script>";
                                    echo "<script src='hoja2.js'></script>";
	                            echo "</head>";
                                    echo "<body>";

	                            echo "<div id='contenido'>";
                                    echo "<header>";
                                    echo " <hgroup>";

                                    echo "</hgroup>";


                                    echo "</header>";
                                    echo "<section>";
                                    echo "<div id='textopr'>";
                                    echo "<center><br><br>";
                                    echo "<table width='10%' border='2px' bordercolor='black'>";
                                    echo "<tr>";
                                    echo "<td>";



                   
                                    echo "<form action=menu.php method=post>";



                
                   
                              echo "<center><input type='submit' value='Bienvenido al Sistema de CALIDAD' id='btnSubmit'>";
                           echo " </form>";
                           echo " </td>";
                            echo "</tr>";
                     

                      echo " </table>";
                 echo "</div>";
               echo "</section>";
     echo "</div>";
     echo "<footer>";
                
        
     	echo "<canvas id='micanvas'>";
       echo " </canvas>";
    echo " </footer>";
  echo "</body>";
					
				}
			else
				{





                           



					if ($n=="$usuusu" & $c=="$passusu")
					 {
					
                                    echo "<head>";
        	                    echo "<meta charset='utf-8'>";
                                    echo "<link rel='stylesheet' href='hoja1.css'>";
                                    echo "<script src='http://code.jquery.com/jquery-1.7.1.min.js'></script>";
                                    echo "<script src='hoja2.js'></script>";
	                            echo "</head>";
                                    echo "<body>";

	                            echo "<div id='contenido'>";
                                    echo "<header>";
                                    echo " <hgroup>";

                                    echo "</hgroup>";


                                    echo "</header>";
                                    echo "<section>";
                                    echo "<div id='textopr'>";
                                    echo "<center><br><br>";
                                    echo "<table width='10%' border='2px' bordercolor='black'>";
                                    echo "<tr>";
                                    echo "<td>";
                   
                                    echo "<form action=menu1.php method=post>";




                
                   
                              echo "<center><input type='submit' value='Bienvenido al Sistema de CALIDAD' id='btnSubmit'>";
                           echo " </form>";
                           echo " </td>";
                            echo "</tr>";
                     

                      echo " </table>";
                 echo "</div>";
               echo "</section>";
     echo "</div>";
     echo "<footer>";
                
        
     	echo "<canvas id='micanvas'>";
       echo " </canvas>";
    echo " </footer>";
  echo "</body>";


					 }
					 else
					  {



                                    if ($n=="$usuauditor" & $c=="$passauditor")
					 {
					
                                    echo "<head>";
        	                    echo "<meta charset='utf-8'>";
                                    echo "<link rel='stylesheet' href='hoja1.css'>";
                                    echo "<script src='http://code.jquery.com/jquery-1.7.1.min.js'></script>";
                                    echo "<script src='hoja2.js'></script>";
	                            echo "</head>";
                                    echo "<body>";

	                            echo "<div id='contenido'>";
                                    echo "<header>";
                                    echo " <hgroup>";

                                    echo "</hgroup>";


                                    echo "</header>";
                                    echo "<section>";
                                    echo "<div id='textopr'>";
                                    echo "<center><br><br>";
                                    echo "<table width='10%' border='2px' bordercolor='black'>";
                                    echo "<tr>";
                                    echo "<td>";
                   
                                    echo "<form action=menu2.php method=post>";



                
                   
                              echo "<center><input type='submit' value='Bienvenido al Sistema de CALIDAD' id='btnSubmit'>";
                           echo " </form>";
                           echo " </td>";
                            echo "</tr>";
                     

                      echo " </table>";
                 echo "</div>";
               echo "</section>";
     echo "</div>";
     echo "<footer>";
                
        
     	echo "<canvas id='micanvas'>";
       echo " </canvas>";
    echo " </footer>";
  echo "</body>";


					 }
					 else
					  {

     echo "<head>";
        	                    echo "<meta charset='utf-8'>";
                                    echo "<link rel='stylesheet' href='hoja1.css'>";
                                    echo "<script src='http://code.jquery.com/jquery-1.7.1.min.js'></script>";
                                    echo "<script src='hoja2.js'></script>";
	                            echo "</head>";
                                    echo "<body>";

	                            echo "<div id='contenido'>";
                                    echo "<header>";
                                    echo " <hgroup>";

                                    echo "</hgroup>";


                                    echo "</header>";
                                    echo "<section>";
                                    echo "<div id='textopr'>";
                                    echo "<center><br><br>";
                                    echo "<table width='10%' border='2px' bordercolor='black'>";
                                    echo "<tr>";
                                    echo "<td>";
                   
                                    echo "<form action=indexx.html method=post>";
                
                   
                              echo "<center><input type='submit' value='Usuario o Contrase&ntilde;a Incorrecta' id='btnSubmit'>";
                           echo " </form>";
                           echo " </td>";
                            echo "</tr>";
                     

                      echo " </table>";
                 echo "</div>";
               echo "</section>";
     echo "</div>";
     echo "<footer>";
                
        
     	echo "<canvas id='micanvas'>";
       echo " </canvas>";
    echo " </footer>";
  echo "</body>";
			


                                             }

					  
					  }
				}
   
mysql_close($link);
			?>
               </body>
</html>

</map>
</body>
</html>