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
include('menushallazgos.php');

?>            


        </ul>
    </div> <!-- end of menu -->
    
</div> <!-- end of menu wrapper -->

<div id="templatemo_content">

	<div id="main_column">
    
    	<div class="section_w500">
            
<center><h2><font color=#324D8A>ACCIONES CORRECTIVAS CANCELADAS</h2><br>
<?php
include_once("conecta.php");
				$consulta1=mysql_query("SELECT * FROM acc where cancel=1",$link);
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
                                echo "<td align=center><form action=menucancel.php?x=2 method=post><input type=hidden name=idac value=$idac><input type=image src=regreso.jpg  name=regreso></form></td></tr>";

                                }

			echo "</table>";

                               

?>

                            <br><br><center><h2><font color=#324D8A>ACCIONES PREVENTIVAS CANCELADAS</h2><br>
<?php
                
include('conecta.php');
				$consulta=mysql_query("SELECT * FROM app where cancel=1",$link);
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
                                echo "<td align=center><form action=menucancel.php?x=1 method=post><input type=hidden name=idac value=$idac><input type=image src=regreso.jpg name=regreso></form></td></tr>";
                                   

                                }


                               
             echo "</table>";
?>









                            <br><br><center><h2><font color=#324D8A>CORRECCION CANCELADAS</h2><br>
<?php
                
include('conecta.php');
				$consulta2=mysql_query("SELECT * FROM corres where cancel=1",$link);
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
                                echo "<td align=center><form action=menucancel.php?x=3 method=post><input type=hidden name=idco value=$idco><input type=image src=regreso.jpg  name=regreso></form></td></tr>";
                                   

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

<script>
function imprSelec(muestra, TituloDoc)
{
	var ficha=document.getElementById(muestra);
	var ventimp=window.open(' ','popimpr');
	ventimp.document.write(ficha.innerHTML);
	
	var title = ventimp.document.createElement("Title");
	var texto = ventimp.document.createTextNode(TituloDoc);
	title.appendChild(texto);
	ventimp.document.head.appendChild(title);
	
	var css = ventimp.document.createElement("link");
	css.setAttribute("href", "estilosp.css");
	css.setAttribute("rel", "stylesheet");
	css.setAttribute("type", "text/css");
	ventimp.document.head.appendChild(css);
	
	ventimp.document.close();
	ventimp.print();
	ventimp.close();
}
</script>