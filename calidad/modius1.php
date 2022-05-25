<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
include('anunciopreventiva.php');
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
include('menuspreventivausu.php');

?>            


        </ul>
    </div> <!-- end of menu -->
    
</div> <!-- end of menu wrapper -->

<div id="templatemo_content">

	<div id="main_column">
    
    	<div class="section_w500">
            
                       <?php
include ('conecta.php');

$idac=$_POST['idac'];
$conforme=$_POST['conforme'];
$folio=$_POST['folio'];
$dete=$_POST['dete'];
$dete1=$_POST['dete1'];
$dete2=$_POST['dete2'];
$dete3=$_POST['dete3'];
$dete4=$_POST['dete4'];
$otra=$_POST['otra'];
$fechanoti=$_POST['fechanoti'];
$area=$_POST['area'];
$auditor=$_POST['auditor'];
$nombreno=$_POST['nombreno'];
$nombreres=$_POST['nombreres'];
$nombre=$_POST['nombre'];
$accionin=$_POST['accionin'];
$resultado=$_POST['resultado'];
$accion1=$_POST['accion1'];
$res1=$_POST['res1'];
$fecha1=$_POST['fecha1'];
$accion2=$_POST['accion2'];
$res2=$_POST['res2'];
$fecha2=$_POST['fecha2'];
$accion3=$_POST['accion3'];
$res3=$_POST['res3'];
$fecha3=$_POST['fecha3'];
$accion4=$_POST['accion4'];
$res4=$_POST['res4'];
$fecha4=$_POST['fecha4'];
$accion5=$_POST['accion5'];
$res5=$_POST['res5'];
$fecha5=$_POST['fecha5'];
$porque1=$_POST['porque1'];
$porque2=$_POST['porque2'];
$porque3=$_POST['porque3'];
$porque4=$_POST['porque4'];
$porque5=$_POST['porque5'];
$otratec=$_POST['otratec'];
$causa1=$_POST['causa1'];
$causa2=$_POST['causa2'];
$causa3=$_POST['causa3'];
$causa4=$_POST['causa4'];
$causa5=$_POST['causa5'];
$causa6=$_POST['causa6'];
$efecto=$_POST['efecto'];
$subcausa1=$_POST['subcausa1'];
$subcausa2=$_POST['subcausa2'];
$subcausa3=$_POST['subcausa3'];
$subcausa4=$_POST['subcausa4'];
$subcausa5=$_POST['subcausa5'];
$subcausa6=$_POST['subcausa6'];




				
				mysql_query("UPDATE app SET idac='$idac', conforme='$conforme', folio='$folio', dete='$dete', dete1='$dete1', dete2='$dete2', dete3='$dete3', dete4='$dete4', otra='$otra', fechanoti='$fechanoti', area='$area', auditor='$auditor', nombreno='$nombreno', nombreres='$nombreres', nombre='$nombre', accionin='$accionin', resultado='$resultado', accion1='$accion1', res1='$res1', fecha1='$fecha1' , accion2='$accion2', res2='$res2', fecha2='$fecha2', accion3='$accion3', res3='$res3', fecha3='$fecha3', accion4='$accion4', res4='$res4', fecha4='$fecha4', accion5='$accion5', res5='$res5', fecha5='$fecha5', porque1='$porque1', porque2='$porque2', porque3='$porque3', porque4='$porque4', porque5='$porque5', otratec='$otratec', causa1='$causa1', causa2='$causa2', causa3='$causa3', causa4='$causa4', causa5='$causa5', causa6='$causa6', subcausa1='$subcausa1', subcausa2='$subcausa2', subcausa3='$subcausa3', subcausa4='$subcausa4', subcausa5='$subcausa5', subcausa6='$subcausa6', efecto='$efecto' WHERE idac='$idac'",$link);
				
			        echo "<td bgcolor='#ffffff' align=center><b><font color=#324D8A><center>Se ha Modificado la Informacion......</td>";   
          
           
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