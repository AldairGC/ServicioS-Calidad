﻿<?php
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
include('anunciocorreccion.php');
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
include('menusaccionesusu.php');

?>            


        </ul>
    </div> <!-- end of menu -->
    
</div> <!-- end of menu wrapper -->

<div id="templatemo_content">

	<div id="main_column">
    
    	<div class="section_w500">

<?php

$fechaactual = Date("Y-m-d");
echo "<form action=horacorreccion-usu.php method=post>";
?>

  <table width="20%" border="2" align="center" >
  
  <tbody>
 

  <tr><td colspan="2" align="center"><input type="submit" class="boot" name="hola" value="CALCULAR"></td></tr>
  </tbody></table></form><br><br>

            

<?php

$hola=isset($_POST['hola']);



if($hola)
 {

echo "<b><h2><center><font color=#324D8A>fecha al dia de Hoy: $fechaactual<br><br><br>Acciones Correccion</h2><center><img src='rojo.jpg'>Vencida<img src='amarillo.jpg'>Pendiente";


$i=0;

include('conecta.php');



				$consul=mysql_query("SELECT * FROM areas1 where usuusu='$var1'",$link);
				while($row=mysql_fetch_array($consul))
				{
					$nomcal=$row['nomcal'];
                                 }



				$consulta=mysql_query("SELECT * FROM corres where audito='$nomcal'",$link);
             echo "<center><table width=60% border=4px bordercolor=black>";
              echo "<tr>";
              echo "<td align=center><b>Id</td>";
              echo "<td align=center><b><img src=tache.jpg></td>";
              echo "<td align=center><b>Id</td>";
              echo "<td align=center><b><img src=play.jpg></td>";

              echo "</tr>";

              


                                
				while($row=mysql_fetch_array($consulta))
				{
					$idco=$row['idco'];
					$notifica=$row['notifica'];
					$folio=$row['folio'];
					$fecha=$row['fecha'];

					$cancel=$row['cancel'];

               if($cancel==1)
                  {}
                  else
                   {



                  if($fecha<>0000-00-00)
                    {
                     if($fecha < $fechaactual)
                         {
                                  $x=1;

                         }
                           else
                         { 
                                  $y=1;

                         }
                     }else{}





              if($x==1 or $y==1)
                 {
                               


                      if($x==1)                     
                         {
                                  echo "<tr><td>$idco</td>";
				  echo "<td align=center><b><form action=modico.php method=post target=blanck><input type=hidden name=idco value=$idco><input type=image src='rojo.jpg'></form></td>"; 
                               if($y==1){}else{echo "<td></td><td></td>";}

                         }else{echo "<td></td><td></td>";}

                             if($y==1)
                           
                                { 
                                  echo "<form action=modico.php method=post target='_blank'>";
                                  echo "<td>$idco</td><td align=center><b><form action=modico.php method=post target=blanck><input type=hidden name=idco value=$idco><input type=image src='amarillo.jpg'></form></td></tr></form>";

                                }else{}
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