<head>
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

//<STYLE> 
//H1.SaltoDePagina { PAGE-BREAK-AFTER: always } 
//</STYLE>


</head>


 <body onload='print()'>


<div id="formato">
<?PHP








              echo "<img src=logo1.jpg><center>UNIVERSIDAD TECNOLOGICA DE PUEBLA<br>COORDINACION DEL SISTEMA DE GESTION DE CALIDAD<BR>CONTROL DE HALLAZGOS<br><br>";



              echo  "<table width='80%' border=3 bordercolor='#19070B'>";   
              echo  "<tr>";
              echo  "<td bgcolor=ffffff align=center><h5>AUDITOR</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>AC</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>AP</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>C</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>FOLIO</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>RI</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>AI</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>AE</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>SQD</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>MSGC</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>INSGC</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>CI</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>AREA</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>DECLARACION Y FECHA DE LA NO CONFORMIDAD</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>ACCION INMEDIATA</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>PENDIENTE POR FECHA</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>EFECTIVIDAD DE LA IMPLMENTACION</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>CERRADA</td>";
              echo  "</tr>";




include('conecta.php');
$consulta=mysql_query("SELECT * FROM ap",$link);

				while($row=mysql_fetch_array($consulta))
				{

					$idac=$row['idac'];
					$conforme=$row['conforme'];
					$folio=$row['folio'];
					$dete=$row['dete'];
					$dete1=$row['dete1'];
					$dete2=$row['dete2'];
					$dete3=$row['dete3'];
					$dete4=$row['dete4'];
					$otra=$row['otra'];
					$fechanoti=$row['fechanoti'];
					$area=$row['area'];
					$auditor=$row['auditor'];
					$nombreno=$row['nombreno'];
					$nombreres=$row['nombreres'];
					$nombre=$row['nombre'];
					$accionin=$row['accionin'];
					$resultado=$row['resultado'];
					$accion1=$row['accion1'];
					$res1=$row['res1'];
					$fecha1=$row['fecha1'];
					$accion2=$row['accion2'];
					$res2=$row['res2'];
					$fecha2=$row['fecha2'];
					$accion3=$row['accion3'];
					$res3=$row['res3'];
					$fecha3=$row['fecha3'];
					$accion4=$row['accion4'];
					$res4=$row['res4'];
					$fecha4=$row['fecha4'];
					$accion5=$row['accion5'];
					$res5=$row['res5'];
					$fecha5=$row['fecha5'];
					$porque1=$row['porque1'];
					$porque2=$row['porque2'];
					$porque3=$row['porque3'];
					$porque4=$row['porque4'];
					$porque5=$row['porque5'];
					$otratec=$row['otratec'];
					$causa1=$row['causa1'];
					$causa2=$row['causa2'];
					$causa3=$row['causa3'];
					$causa4=$row['causa4'];
					$causa5=$row['causa5'];
					$causa6=$row['causa6'];
					$efecto=$row['efecto'];
					$tipo=$row['tipo'];
					$efectivo=$row['efectivo'];
					$auditorarea=$row['auditorarea'];
					$fechaarea=$row['fechaarea'];
					$veriefectivo=$row['veriefectivo'];
					$auditorveri=$row['auditorveri'];
					$fechaveri=$row['fechaveri'];





              echo  "<tr>";

              echo  "<td bgcolor=ffffff align=center><h5>$auditor</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b></td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>$tipo</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b></td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>$folio</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b></td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>$dete</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>$dete1</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>$dete2</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>$dete3</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>$dete4</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b></td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>$area</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>$conforme</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>$accionin</td>";


                     if($fecha5=='0000-00-00')
                         {
                            if($fecha4=='0000-00-00')
                                 {
                                    if($fecha3=='0000-00-00')
                                        {
                                            if($fecha2=='0000-00-00')
                                                 { 
                                                     if($fecha1=='0000-00-00')
                                                          {

                                                           }
                                                              else
                                                           { 
                                                              echo  "<td bgcolor=ffffff align=center><h5><b>$fecha1</td>";
                                                            }
                                                  }
                                                     else
                                                    { 
                                                      echo  "<td bgcolor=ffffff align=center><h5><b>$fecha2</td>";
                                                     }
                                          }          
                                             else
                                           { 
                                             echo  "<td bgcolor=ffffff align=center><h5><b>$fecha3</td>";
                                            }
                                  }
                                    else
                                    { 
                                       echo  "<td bgcolor=ffffff align=center><h5><b>$fecha4</td>";
                                     }
                          }
                            else
                           { 
                              echo  "<td bgcolor=ffffff align=center><h5><b>$fecha5</td>";
                           }

                                    

                                                        










              echo  "<td bgcolor=ffffff align=center><h5><b>$efectivo</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>$veriefectivo</td>";
              echo  "</tr>";





			  	 
				}




include('conecta.php');
$consulta1=mysql_query("SELECT * FROM ac",$link);

				while($row=mysql_fetch_array($consulta1))
				{

					$idac=$row['idac'];
					$conforme=$row['conforme'];
					$folio=$row['folio'];
					$dete=$row['dete'];
					$dete1=$row['dete1'];
					$dete2=$row['dete2'];
					$dete3=$row['dete3'];
					$dete4=$row['dete4'];
					$otra=$row['otra'];
					$fechanoti=$row['fechanoti'];
					$area=$row['area'];
					$auditor=$row['auditor'];
					$nombreno=$row['nombreno'];
					$nombreres=$row['nombreres'];
					$nombre=$row['nombre'];
					$accionin=$row['accionin'];
					$resultado=$row['resultado'];
					$accion1=$row['accion1'];
					$res1=$row['res1'];
					$fecha1=$row['fecha1'];
					$accion2=$row['accion2'];
					$res2=$row['res2'];
					$fecha2=$row['fecha2'];
					$accion3=$row['accion3'];
					$res3=$row['res3'];
					$fecha3=$row['fecha3'];
					$accion4=$row['accion4'];
					$res4=$row['res4'];
					$fecha4=$row['fecha4'];
					$accion5=$row['accion5'];
					$res5=$row['res5'];
					$fecha5=$row['fecha5'];
					$porque1=$row['porque1'];
					$porque2=$row['porque2'];
					$porque3=$row['porque3'];
					$porque4=$row['porque4'];
					$porque5=$row['porque5'];
					$otratec=$row['otratec'];
					$causa1=$row['causa1'];
					$causa2=$row['causa2'];
					$causa3=$row['causa3'];
					$causa4=$row['causa4'];
					$causa5=$row['causa5'];
					$causa6=$row['causa6'];
					$efecto=$row['efecto'];
					$tipo=$row['tipo'];
					$efectivo=$row['efectivo'];
					$auditorarea=$row['auditorarea'];
					$fechaarea=$row['fechaarea'];
					$veriefectivo=$row['veriefectivo'];
					$auditorveri=$row['auditorveri'];
					$fechaveri=$row['fechaveri'];





              echo  "<tr>";

              echo  "<td bgcolor=ffffff align=center><h5>$auditor</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>$tipo</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b></td>";
              echo  "<td bgcolor=ffffff align=center><h5><b></td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>$folio</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b></td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>$dete</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>$dete1</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>$dete2</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>$dete3</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>$dete4</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b></td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>$area</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>$conforme</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>$accionin</td>";


                     if($fecha5=='0000-00-00')
                         {
                            if($fecha4=='0000-00-00')
                                 {
                                    if($fecha3=='0000-00-00')
                                        {
                                            if($fecha2=='0000-00-00')
                                                 { 
                                                     if($fecha1=='0000-00-00')
                                                          {
                                                              
                                                           }
                                                              else
                                                           { 
                                                              echo  "<td bgcolor=ffffff align=center><h5><b>$fecha1</td>";
                                                            }
                                                  }
                                                     else
                                                    { 
                                                      echo  "<td bgcolor=ffffff align=center><h5><b>$fecha2</td>";
                                                     }
                                          }          
                                             else
                                           { 
                                             echo  "<td bgcolor=ffffff align=center><h5><b>$fecha3</td>";
                                            }
                                  }
                                    else
                                    { 
                                       echo  "<td bgcolor=ffffff align=center><h5><b>$fecha4</td>";
                                     }
                          }
                            else
                           { 
                              echo  "<td bgcolor=ffffff align=center><h5><b>$fecha5</td>";
                           }





              echo  "<td bgcolor=ffffff align=center><h5><b>$efectivo</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>$veriefectivo</td>";
              echo  "</tr>";





			  	 
				}




include('conecta.php');
$consulta2=mysql_query("SELECT * FROM corre",$link);

				while($row=mysql_fetch_array($consulta2))
				{

					$idco=$row['idco'];
					$nomdoc=$row['nomdoc'];
					$folio=$row['folio'];
					$codigo=$row['codigo'];
					$hallazgo=$row['hallazgo'];
					$notifica=$row['notifica'];
					$area=$row['area'];
					$lider=$row['lider'];
					$nomhalla=$row['nomhalla'];
					$nomres=$row['nomres'];
					$descrip=$row['descrip'];
					$accion=$row['accion'];
					$audito=$row['audito'];
					$fecha=$row['fecha'];
					$tipo=$row['tipo'];




              echo  "<tr>";

              echo  "<td bgcolor=ffffff align=center><h5>$lider</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b></td>";
              echo  "<td bgcolor=ffffff align=center><h5><b></td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>$tipo</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>$folio</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b></td>";
              echo  "<td bgcolor=ffffff align=center><h5><b></td>";
              echo  "<td bgcolor=ffffff align=center><h5><b></td>";
              echo  "<td bgcolor=ffffff align=center><h5><b></td>";
              echo  "<td bgcolor=ffffff align=center><h5><b></td>";
              echo  "<td bgcolor=ffffff align=center><h5><b></td>";
              echo  "<td bgcolor=ffffff align=center><h5><b></td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>$area</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>$nomdoc</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>$nomhalla</td>";


                     if($fecha5=='0000-00-00')
                         {
                            if($fecha4=='0000-00-00')
                                 {
                                    if($fecha3=='0000-00-00')
                                        {
                                            if($fecha2=='0000-00-00')
                                                 { 
                                                     if($fecha1=='0000-00-00')
                                                          {
                                                              
                                                           }
                                                              else
                                                           { 
                                                              echo  "<td bgcolor=ffffff align=center><h5><b>$fecha1</td>";
                                                            }
                                                  }
                                                     else
                                                    { 
                                                      echo  "<td bgcolor=ffffff align=center><h5><b>$fecha2</td>";
                                                     }
                                          }          
                                             else
                                           { 
                                             echo  "<td bgcolor=ffffff align=center><h5><b>$fecha3</td>";
                                            }
                                  }
                                    else
                                    { 
                                       echo  "<td bgcolor=ffffff align=center><h5><b>$fecha4</td>";
                                     }
                          }
                            else
                           { 
                              echo  "<td bgcolor=ffffff align=center><h5><b>$fecha5</td>";
                           }


              echo  "<td bgcolor=ffffff align=center><h5><b>$descrip</td>";
              echo  "<td bgcolor=ffffff align=center><h5><b>$accion</td>";
              echo  "</tr>";



//echo "<H1 class=SaltoDePagina> </H1> ";


			  	 
				}


              



              echo  "</table>";

	






    
  
mysql_close($link);
				
		
?> 