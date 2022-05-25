<?php 
  
  require_once 'funciones/sessiones.php';
  require_once 'funciones/bd_conexion.php';
  require_once 'templates/header.php';
  require_once 'templates/barra.php';
  require_once 'templates/navegacion.php';

?>

<script>
function editar(Auto){
	window.location="editar-tramite.php?id="+Auto;
}
function imprime(Auto){
	window.location="impre2.php?idac="+idac;
}
function eliminar(Auto){
        var mensaje = "ESTAS SEGURO QUE QUIERES ELIMINAR";
	if(confirm(mensaje)){
		window.location="elimina-tramite.php?Auto="+Auto;
	}else{
	
	}
	
}
</script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Listado de Tramites
        <small></small>
      </h1>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Maneja los Tramites en esta Seccion</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="registros" class="display responsive nowrap" style="width:100%">
                <thead>
                <tr>
                  <th>Modifica</th>
                  <th>Baja</th>
                  <th>Folio Tramite</th>
                  <th>Tipo Tramite</th>
                  <th>Ramo</th>
                  <th>Status</th>
                 
                  <th>Nombre</th>
                  <th>Fecha Registro</th>
                  
                  
                </tr>
                </thead>
                <tbody>
                  <?php 
                    try {
                      $sql = "SELECT * FROM tramites1 ORDER BY Ramo";
                      $resultado = $conn->query($sql);
                    } catch (Exception $e) {
                      $error = $e->getMessage();
                      echo $error;
                    }

                    while($tramite = $resultado->fetch_assoc()){


$z=$tramite['Folio_Tramite'];



$consulta=mysqli_query($conn,"SELECT * FROM cotizaauto where Folio_Tramite='$z'");
while($row=mysqli_fetch_array($consulta))
				{


			$Autoauto=$row['Autoauto'];
                                           $au=$Autoauto;  
                                                              }  

	

$consultaa=mysqli_query($conn,"SELECT * FROM cotizavida where Folio_Tramite='$z'");
while($row=mysqli_fetch_array($consultaa))
				{


			$Autovida=$row['Autovida'];
                                           $vida=$Autovida;  
                                                              } 

$consultaas=mysqli_query($conn,"SELECT * FROM cotizadano where Folio_Tramite='$z'");
while($row=mysqli_fetch_array($consultaas))
				{


			$Autodano=$row['Autodano'];
                                           $dan=$Autodano;  
                                                              }       

$consultaaa=mysqli_query($conn,"SELECT * FROM cotizagmm where Folio_Tramite='$z'");
while($row=mysqli_fetch_array($consultaaa))
				{


			$Autocogmm=$row['Autocogmm'];
                                           $vid=$Autocogmm;  
                                                              }  




$neta=mysqli_query($conn,"SELECT * FROM  poliza_auto where polizatramite='$z'");
while($row=mysqli_fetch_array($neta))
				{


			$Autopo=$row['Autopo'];
                                           $auu=$Autopo;  
                                                              }  


$neta=mysqli_query($conn,"SELECT * FROM  dano where tramitedano='$z'");
while($row=mysqli_fetch_array($neta))
				{


			$Autodano=$row['Autodano'];
                                           $dan=$Autodano;  
                                                              }  

$netas=mysqli_query($conn,"SELECT * FROM  vida where tramitevida='$z'");
while($row=mysqli_fetch_array($netas))
				{


			$Autovida=$row['Autovida'];
                                           $dans=$Autovida;  
                                                              }  

$netas1=mysqli_query($conn,"SELECT * FROM  gmm where tramigmm='$z'");
while($row=mysqli_fetch_array($netas1))
				{


			$Autogmm=$row['Autogmm'];
                                           $dans1=$Autogmm;  
                                                              }  
                               
                 
                    
                



		echo '<td align=center>';
	              echo '<img src="imagenes/actions-edit.png" onclick="editar('.$tramite['Auto'].')"/></td>  ';
		echo '<td>';
		echo '<img src="imagenes/actions-delete.png" onclick="eliminar('.$tramite['Auto'].')"/>';
		echo '</td><td>';



echo 'T' . $tramite['Folio_Tramite']; 
echo "</td>";
?>



                            

                     <td><?php echo $tramite['Tipo_Tramite']; ?></td>

<td>
                      <?php 



if($tramite['Ramo']==1)
{
$q='Autos';
}
else
{} 

if($tramite['Ramo']==2)
{
$q='Vida';
}
else
{} 

if($tramite['Ramo']==3)
{
$q='Gastos Medicos';
}
else
{} 
if($tramite['Ramo']==5)
{
$q='Danos';
}
else
{} 
echo $q;
echo "</td><td>";



                         
                        $status = $tramite['Status'];
                        if ($status == 'terminado') {
                          echo '<span class="badge bg-green">Terminado</span>';
                        }else{

                                      if ($status == 'cancelado') {
                                                   echo '<span class="badge bg-green">Cancelado</span>';
                                         }else{


                                     

                                 if($tramite['Asunto_Tramite']=='cotizacion' && $tramite['Ramo']==1)
                                    {
                                              
                                       
                                              echo "<a href=editar-cotizaautos.php?id=$au><b>Pendiente</b></a>";
                                    }else{}

                                 if($tramite['Asunto_Tramite']=='cotizacion' && $tramite['Ramo']==2)
                                    {
                                             
                                       
                                              echo "<a href=editar-cotizavida.php?id=$vida><b>Pendiente</b></a>";
                                    }else{}


                                 if($tramite['Asunto_Tramite']=='cotizacion' && $tramite['Ramo']==5)
                                    {
                                             
                                       
                                              echo "<a href=editar-cotizadano.php?id=$dan><b>Pendiente</b></a>";
                                    }else{}



                                                   if($tramite['Asunto_Tramite']=='cotizacion' && $tramite['Ramo']==3)
                                    {
                                             
                                       
                                              echo "<a href=editar-cotizagastos.php?id=$vid><b>Pendiente</b></a>";
                                    }else{}

                                 if($tramite['Asunto_Tramite']=='emision_poliza' && $tramite['Ramo']==1)
                                    {
                                              
                                       
                                              echo "<a href=editar-poliza-auto.php?Autopo=$auu><b>Pendiente</b></a>";
                                    }else{}

                                 if($tramite['Asunto_Tramite']=='emision_poliza' && $tramite['Ramo']==5)
                                    {
                                              
                                       
                                              echo "<a href=editar-poliza-dano.php?Autodano=$dan><b>Pendiente</b></a>";
                                    }else{}

                                 if($tramite['Asunto_Tramite']=='emision_poliza' && $tramite['Ramo']==2)
                                    {
                                              
                                       
                                              echo "<a href=editar-poliza-vida.php?Autovida=$dans><b>Pendiente</b></a>";
                                    }else{}

                                 if($tramite['Asunto_Tramite']=='emision_poliza' && $tramite['Ramo']==3)
                                    {
                                              
                                       
                                              echo "<a href=editar-poliza-gmm.php?Autogmm=$dans1><b>Pendiente</b></a>";
                                       }else{}
                                   
                            }
                        }
                      ?>                           
                    </td>
                             

                    <td>
                      <?php 
                        if (empty($tramite['Nombre_Comp'])) {
                          echo $tramite['Nombre'] . " " . $tramite['Apellido_Pa'] . " " .$tramite['Apellido_Ma'];
                        }else{
                          echo $tramite['Nombre_Comp'];
                        }  
                      ?>
                    </td>
                    <td><?php echo $tramite['Fecha_Registro']; ?></td>
                    
                  </tr>
                  <?php
                    }
                  ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Modifica</th>
                  <th>Baja</th>

                  <th>Folio Tramite</th>
                  <th>Tipo Tramite</th>
                  <th>Ramo</th>                  
                   <th>Status</th>
                  <th>Nombre</th>
                  <th>Fecha Registro</th>                  
                  
                  
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  </div>
  <!-- /.content-wrapper -->
<?php require_once 'templates/footer.php' ?>
  <!-- Control Sidebar -->
  
