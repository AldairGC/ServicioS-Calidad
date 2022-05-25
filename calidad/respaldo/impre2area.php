<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?PHP


header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header("Content-Disposition: attachment;filename=ejemplo.doc"); 

header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header("Content-Disposition: attachment;filename='ejemplo.doc'");
$output="";
include('conecta.php');
$consulta=mysql_query("SELECT * FROM areas",$link);

$output.= "<table width='80%' border=3 bordercolor='#19070B'>";

              
              
                              
              $output.= "<tr>";
              $output.= "<img src=logo.jpg>";
              $output.= "<td bgcolor=ffffff><h3><b><img src=logo.jpg><center>UNIVERSIDAD TECNOLOGICA DE PUEBLA<br>CATALOGO DE AREAS</td>";
              $output.= "</tr>";
              $output.= "</table>";
             $output.= "<table width=80% border=4 bordercolor=#669933>";
             $output.= "<tr>";

             $output.= "<td bgcolor=ffffff align=center><b>clave</td>";
             $output.= "<td bgcolor=ffffff align=center><b>Nombre del Area</td>";
             $output.= "<td bgcolor=ffffff align=center><b>Nombre del Auditor</td>";
             $output.= "<td bgcolor=ffffff align=center><b>Nombre del Titular</td>";

             $output.= "</tr>";

	
while($row=mysql_fetch_array($consulta))
	{
					$idarea=$row['idarea'];
					$clave=$row['clave'];
					$nomarea=$row['nomarea'];
					$nomcal=$row['nomcal'];
					$titu=$row['titu'];





	     $output.= "<td bgcolor=ffffff>$clave</td>";
	     $output.= "<td bgcolor=ffffff>$nomarea</td>";
	     $output.= "<td bgcolor=ffffff>$nomcal</td>";
	     $output.= "<td bgcolor=ffffff>$titu</td>";
	     $output.= "</tr>";				










}
				

              $output.= 	"</table>";   
  

				
					 
				
echo $output;


?> 