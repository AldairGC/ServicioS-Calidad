<?php
session_start();

$var1=$_SESSION['usuario'];
$var2=$_SESSION['clave'];
?>
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


$idac=$_GET['idac'];


				include("conecta.php");


				$consulta1=mysql_query("SELECT * FROM areas1 WHERE passauditor='$var2'",$link);
				while($row=mysql_fetch_array($consulta1))
			{

					
					$nomcal=$row['nomcal'];
                                          }


				$consulta=mysql_query("SELECT * FROM app WHERE idac='$idac' and auditor='$nomcal'",$link);
				while($row=mysql_fetch_array($consulta))
			{
                                        $numero=$idac;
                         }


                       if($idac=$numero)
                          {

echo "<center><table border=1 width=50%>";
echo "<tr><td align=center bgcolor=324D8A colspan=2>ACCION PREVENTIVA No: $idac</td></tr><tr>";

echo "<td><input type='submit' class='boot' name='guarda' value='FRENTE' onClick=window.open('rootimpre2.php?idac=$idac','_blank')>";
echo "<td><input type='submit' class='boot' name='guarda' value='REVERSO' onClick=window.open('rootimpre21.php?idac=$idac','_blank')>";






}
else
{
echo "<br><br><b><h2>No tiene registrada ninguna acci&oacute;n con este n&uacute;mero";
}

?>
</table>
</div>



</body>
                
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