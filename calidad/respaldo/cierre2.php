<?php
$uno=1;
$c=$_GET['c'];

$idco=$_POST['idco'];

include('conecta.php');



if($c==3)

{

		$consulta=mysql_query("SELECT * FROM corre where idco='$idco'",$link);
		while($row=mysql_fetch_array($consulta))
	
       			{

			mysql_query("UPDATE corre SET cancel='$uno' WHERE idco='$idco'",$link);
                        echo "<br><br><h2><center><b>La Correccion No. $idco fue Cerrada con Exito</center></b>";
                      
                        }





}
else{}



$fechaactual = Date("Y-m-d");
echo "<form action=horacorreccion.php method=post>";

echo "<input type=submit value=Calcular name=hola>";
echo "</form>";

$hola=isset($_POST['hola']);



if($hola)
 {

echo "<b><h3>fecha al dia de Hoy: $fechaactual<br><br<br>Acciones Correccion</h3>";


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
                                                                   


                              
  



             


echo "<br><br><form action=menu3.html method=post>";
echo "<input type=submit value=Menu></form>";



}
mysql_close($link);
?>