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
include('anuncioalertaco.php');
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
include('menusaccionesauditor.php');

?>            


        </ul>
    </div> <!-- end of menu -->
    
</div> <!-- end of menu wrapper -->

<div id="templatemo_content">

	<div id="main_column">
    
    	<div class="section_w500">
            
<?php

$fechaactual = Date("Y-m-d");
echo "<form action=horacorrectiva.php method=post>";
?>

  <table width="20%" border="2" align="center" >
  
  <tbody>
 

  <tr><td colspan="2" align="center"><input type="submit" class="boot" name="hola" value="CALCULAR"></td></tr>
  </tbody></table></form><br><br>

<?php
$hola=isset($_POST['hola']);



if($hola)
 {

echo "<b><h2><center><font color=#324D8A>fecha al dia de Hoy: $fechaactual<br></h2><center><img src='rojo.jpg'>Vencida<img src='amarillo.jpg'>Pendiente<img src='verde.jpg'>Cerrada<br>";


$i=0;

include('conecta.php');
				$consulta=mysql_query("SELECT * FROM acc",$link);
             echo "<center><table width=60% border=4px bordercolor=black>";
              echo "<tr>";

              


                                
				while($row=mysql_fetch_array($consulta))
				{
					$idac=$row['idac'];
					$res1=$row['res1'];
					$res2=$row['res2'];
					$res3=$row['res3'];
					$res4=$row['res4'];
					$res5=$row['res5'];
					$fecha1=$row['fecha1'];
					$fecha2=$row['fecha2'];
					$fecha3=$row['fecha3'];
					$fecha4=$row['fecha4'];
					$fecha5=$row['fecha5'];
					$folio=$row['folio'];
					$fechaveri=$row['fechaveri'];
					$cancel=$row['cancel'];

               if($cancel==1)
                  {}
                  else
                   {
                  

                  if($fecha5<>0000-00-00)
                    {
                     if($fecha5 < $fechaactual)
                         {
                                  $x=1;

                         }
                           else
                         {
                                  $fechaevento=$fecha5; 
                                  $y=1;

                         }
                     }else{}

                  if($fecha4<>0000-00-00)
                    {
                     if($fecha4 < $fechaactual)
                         {
                                  $x=1;

                         }
                           else
                                  
                         { 
				  $fechaevento=$fecha4; 
                                  $y=1;

                         }                     
                   }else{}

                  if($fecha3<>0000-00-00)
                    {
                     if($fecha3 < $fechaactual)
                       {
                                  $x=1;

                         }
                           else
                         {
				  $fechaevento=$fecha3;  
                                  $y=1;

                         }                     
                }else{}

                  if($fecha2<>0000-00-00)
                    {
                     if($fecha2 < $fechaactual)
                        {
                                  $x=1;

                         }
                           else
                         {
				  $fechaevento=$fecha2;  
                                  $y=1;

                         }                     
                    }else{}

                  if($fecha1<>0000-00-00)
                    {
                     if($fecha1 < $fechaactual)
                        {
                                  $x=1;

                         }
                           else
                         { 
				  $fechaevento=$fecha1; 
                                  $y=1;

                         }                     
                     }else{}







						$hoy	=	date("z");
						$ayer	=	mktime(0,0,0,substr($fechaactual,5,2),substr($fechaactual,8,2),substr($fechaactual,0,4)) ;
						$ayer1	=	date("z",$ayer);
						$manana	=	mktime(0,0,0,substr($fechaevento,5,2),substr($fechaevento,8,2),substr($fechaevento,0,4)) ;
						$manana1=	date("z",$manana);



						$resta=$hoy-$manana1;

						if($resta<0)
							{
								$resta=$resta*-1;
							}
							else
							{


							}










              if($x==1 or $y==1)
                 {
                               


                      if($x==1)                     
                         {
                                  echo "<tr><td>$idac</td>";
				  echo "<td align=center><b><form action=modis.php method=post target=blanck><input type=hidden name=idac value=$idac><input type=image src='rojo.jpg'></form></td>"; 
                               if($y==1){}else{}

                         }else{echo "<td></td><td></td>";}

                             if($y==1)
                           
                                { 
                                  echo "<form action=modis.php method=post target='_blank'>";
                                 if($resta<=5)
                                 {
                                  echo "<td>$idac</td><td align=center><b><form action=modis.php method=post target=blanck><input type=hidden name=idac value=$idac><input type=image  src='amarillo.jpg'></form></td></form>";
                                 }else{}

                                }else{}
                 }else{}

                          

                        




                                 

  
                                        

                                if($x==1 or $y==1)
                                 {

                                   

                                   if($fechaveri=='0000-00-00'){echo "</tr>";}
                                     else{
                                    
                                    
                                      echo "<form action=cierre.php?c=1 method=post>";
                                      echo "<td>$idac</td><td align=center><input type=image  src='verde.jpg'></td><input type=hidden name=idac value=$idac></form></tr>";
                                          }
                                   
                                 }else{}

                                 $x=0;$y=0;

                                }


                           
                  }

              echo "</table>";
             
            





}



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
        
        <div class="section_w940"><font color=white>

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