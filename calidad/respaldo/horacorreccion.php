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
echo "<form action=horacorreccion.php method=post>";

echo "<input type=submit value=Calcular name=hola>";
echo "</form>";

$hola=isset($_POST['hola']);



if($hola)
 {

echo "<b><h2><center>fecha al dia de Hoy: $fechaactual<br><br<br>Acciones Correccion</h2>";


$i=0;

include('conecta.php');
				$consulta=mysql_query("SELECT * FROM corre",$link);
             echo "<center><table width=60% border=4px bordercolor=black>";
              echo "<tr>";
              echo "<td bgcolor=ffffff align=center><b>Id</td>";
              echo "<td bgcolor=ffffff align=center><b><img src=tache.jpg></td>";
              echo "<td bgcolor=ffffff align=center><b>Id</td>";
              echo "<td bgcolor=ffffff align=center><b><img src=play.jpg></td>";
              echo "<td bgcolor=ffffff align=center><b>Id</td>";
              echo "<td bgcolor=ffffff align=center><b><img src=cerrar.jpg></td>";

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
				  echo "<td align=center><b><form action=modico.php method=post target=blanck><input type=hidden name=idco value=$idco><input type=submit value=Vencida></form></td>"; 
                               if($y==1){}else{echo "<td></td><td></td>";}

                         }else{echo "<td></td><td></td>";}

                             if($y==1)
                           
                                { 
                                  echo "<form action=modico.php method=post target='_blank'>";
                                  echo "<td>$idco</td><td align=center><b><form action=modico.php method=post target=blanck><input type=hidden name=idco value=$idco><input type=submit value='Proximo Vencimiento'></form></td></form>";

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

                                      echo "<form action=cierre2.php?c=3 method=post>";
                                      echo "<td>$idco</td><td align=center><input type=submit value=Cerrar name=cierre></td><input type=hidden name=idco value=$idco></form></tr>";


                                 }else{}

                                 $x=0;$y=0;

                                }


                           }


              echo "</table>";
                                                                   


                              
  



             






}

mysql_close($link);
?>