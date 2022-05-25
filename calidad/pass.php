<?php
session_start();
$_SESSION['usuario']=$_REQUEST['n'];
$_SESSION['clave']=$_REQUEST['c'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Examenes en Linea</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<style>
.slider {
	width: 95%;
	margin: auto;
	overflow: hidden;
}

.slider ul {
	display: flex;
	padding: 0;
	width: 400%;
	
	animation: cambio 20s infinite alternate linear;
}

.slider li {
	width: 100%;
	list-style: none;
}

.slider img {
	width: 100%;
}

@keyframes cambio {
	0% {margin-left: 0;}
	20% {margin-left: 0;}
	
	25% {margin-left: -100%;}
	45% {margin-left: -100%;}
	
	50% {margin-left: -200%;}
	70% {margin-left: -200%;}
	
	75% {margin-left: -300%;}
	100% {margin-left: -300%;}
}

</style>

<style> 
section { position: relative; } 
#izquierda { position: relative; width: 50%; float: left; height: 1px; } 
#derecha { position: relative; width: 10%; float: right; height: 1px; }  

</style> 

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>



</head>
<body>

<div id="templatemo_top_bar">
	<div class="rss_contact_section">
		
        </div>

        <div class="rss_contact contact_button">
        </div>

  
</div> <!-- end of top bar -->

<div id="templatemo_banner_bar_wrapper">

	<div id="templatemo_banner_bar">
    
    	<h1>
<?php
include('arriba.php')
?>
        </h1>
    
    </div> <!-- end of banner -->
    
</div> <!-- end of banner wrapper -->

<div id="templatemo_menu_wrapper">

	<div id="templatemo_menu">
    	<ul>
         


        </ul>
    </div> <!-- end of menu -->
    
</div> <!-- end of menu wrapper -->

<div id="templatemo_content">

	<div id="main_column">
    
    	<div class="section_w500">

<div id="derecha">
            
<?php
$n=$_POST['n'];
$c=$_POST['c'];


include('conecta.php');


$consulta=mysql_query("SELECT * FROM areas1 WHERE ((usuusu='$n' and passusu='$c') or (usuauditor='$n' and passauditor='$c'))",$link);
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
                                    echo "<table width='10%' border='1px'>";
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
                                    echo "<table width='10%' border='1px'>";
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
                                    echo "<table width='10%' border='1px'>";
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
                                    echo "<table width='10%' border='1px'>";
                                    echo "<tr>";
                                    echo "<td>";
                   
                                    echo "<form action=index.php method=post>";
                
                   
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
   

			?>

</div>

<div id="izquierda">
<ul>
<img src=politica.jpg>
</ul>
</div>

     <br><br><br>              


                
          <div class="margin_bottom_20"></div>
                
  <ul class="list_01">
                
                </ul>
                
                <div class="button_01"></div>
              
      </div>
          
        <div class="cleaner"></div>
    </div> <!-- end of main column -->
    
  <div class="side_column_w200">
            	
                <div class="box">

                    
				</div> 
                
                
    <div class="box">

                   
			  </div>
    </div> 
    <!-- end of side column 1 -->
    
    <div class="side_column_w200">
    
			    <div class="box">
            
                    

					<div class="cleaner"></div>
				</div>
                
    			<div class="box">
                	
					
                    
                    
                    
                     
                    
				</div>
            	                
                <div class="box">
			           
		</div>
               

            </div> <!-- end of right side column -->

	<div class="cleaner"></div>
</div> <!-- end of content -->

<div id="templatemo_footer_wrapper">

	
        
        <div class="margin_bottom_20"></div>
        
        <div class="section_w940">
<?php
include('derechos.php')
?>
        </div>
        
        <div class="cleaner"></div>
	</div> <!-- end of footer -->

</div> <!-- end of footer wrapper -->
<!-- templatemo 280 sky blue -->
<!-- 
Sky Blue Template 

-->
</body>
</html>