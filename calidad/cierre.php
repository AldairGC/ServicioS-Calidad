﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Investigaciones</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemoo_style.css" rel="stylesheet" type="text/css" />

<link href="css/main.css" rel="stylesheet" type="text/css">

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<?php
include('anuncioalerta.php');
?>

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
<?php
include('menusalertas.php');

?>            


        </ul>
    </div> <!-- end of menu -->
    
</div> <!-- end of menu wrapper -->

<div id="templatemo_content">

	<div id="main_column">
    
    	<div class="section_w500">
            
<?php
$uno=1;
$c=$_GET['c'];

$idac=$_POST['idac'];

include('conecta.php');

if($c==1)

{


		$consulta=mysql_query("SELECT * FROM acc where idac='$idac'",$link);
		while($row=mysql_fetch_array($consulta))
	
       			{

			mysql_query("UPDATE ac SET cancel='$uno' WHERE idac='$idac'",$link);

                        echo "<br><br><h2><center><b><font color=#324D8A>La Accion No. $idac fue Cerrada con Exito</center></b>";
                      
                        }





}
else{}

if($c==2)

{

		$consulta=mysql_query("SELECT * FROM app where idac='$idac'",$link);
		while($row=mysql_fetch_array($consulta))
	
       			{

			mysql_query("UPDATE ap SET cancel='$uno' WHERE idac='$idac'",$link);
                        echo "<br><br><h2><center><b><font color=#324D8A>La Accion No. $idac fue Cerrada con Exito</center></b>";
                      
                        }





}
else{}

if($c==3)

{

		$consulta=mysql_query("SELECT * FROM corres where idco='$idac'",$link);
		while($row=mysql_fetch_array($consulta))
	
       			{

			mysql_query("UPDATE corre SET cancel='$uno' WHERE idco='$idac'",$link);
                        echo "<br><br><h2><center><b><font color=#324D8A>La Correccion No. $idac fue Cerrada con Exito</center></b>";
                      
                        }





}
else{}



?>


                
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
               

            </div> <!-- end of left side column -->

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