<?php
session_start();
$no='Administrador del Sistema';
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





include('menus.php');
?>
</ul>
</div>
                               
			</div>

                    </div>
<ul>
</map>
</body>
</html>
<?php

$fechaactual = Date("Y-m-d");
echo "<form action=horacorrectiva.php method=post>";

echo "<input type=submit value=Calcular name=hola>";
echo "</form>";

$hola=isset($_POST['hola']);



if($hola)
 {

echo "<b><h2><center>fecha al dia de Hoy: $fechaactual<br><br<br>Acciones Correctivas </h2><center><img src='rojo.jpg'>Vencida<img src='amarillo.jpg'>Pendiente<img src='verde.jpg'>Cerrada<br>";


$i=0;

include('conecta.php');
				$consulta=mysql_query("SELECT * FROM ac",$link);
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

mysql_close($link);

?>