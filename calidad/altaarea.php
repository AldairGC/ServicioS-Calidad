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
include('anunciousu.php');
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
include('menuusus.php');

?>            


        </ul>
    </div> <!-- end of menu -->
    
</div> <!-- end of menu wrapper -->

<div id="templatemo_content">

	<div id="main_column">
    
    	<div class="section_w500">
            
<form action=insertaarea.php method=post>
	<center><table border="1" width=50%>
		<tr>
		<td align=center><center><font size="4" color="#000000" face="Arial, Helvetica, sans-serif">ALTA DE AREAS y USUARIOS</font></center></td>
		</tr>
        </table>
	<table border="3" width=80%>
		<tr>
		<td bgcolor=#324D8A height='30'><font size=3>Clave:<input type=text name=clave size=3 maxlength=3></td><br></tr><tr>
		<td bgcolor=#324D8A height='30'><font size=3>Area:<input type=text name=nomarea size=80></td><br></tr><tr>
		<td bgcolor=#324D8A height='30'><font size=3>Nombre del Auditor:<input type=text name=nomcal size=60></td></tr><tr>
		<td bgcolor=#324D8A height='30'><font size=3>Nombre del Titular:<input type=text name=titu size=60></td></tr><tr>
		<td bgcolor=#324D8A height='30'><font size=3>Usuario Auditor:<input type=text name=usuauditor maxlength=10></td></tr><tr>
		<td bgcolor=#324D8A height='30'><font size=3>Password Auditor:<input type=text name=passauditor maxlength=10></td></tr><tr>
		<td bgcolor=#324D8A height='30'><font size=3>Usuario Usuario:<input type=text name=usuusu maxlength=10></td></tr><tr>
		<td bgcolor=#324D8A height='30'><font size=3>Password Usuario:<input type=text name=passusu maxlength=10></td></tr><tr>

		</tr>
        </table><br><br>


  <table width="28%" border="2" align="center" >
  
  <tbody>
 

  <tr><td colspan="2" align="center"><input type="submit" class="boot" name="guarda" value="GUARDAR"></td></tr>
  </tbody></table>
  
 
  </form></center>
                
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