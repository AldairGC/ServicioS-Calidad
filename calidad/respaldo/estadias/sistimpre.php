<meta charset="utf-8">

<?PHP

header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header("Content-Disposition: attachment;filename=ejemplo.doc"); 

header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header("Content-Disposition: attachment;filename='ejemplo.doc'");


$output.= "<html>";
$output.= "<body>";
$output.= "<link href='http://siiutp.utpuebla.edu.mx/exa/estadias/css/style.css' rel='stylesheet' type='text/css' /><font size=2>";



$output.= "<center><img src='http://siiutp.utpuebla.edu.mx/exa/estadias/puebla.jpg'>";
$output.= "<b>UNIVERSIDAD TECNOLÓGICA DE PUEBLA</b><img src='http://siiutp.utpuebla.edu.mx/exa/estadias/logos.jpg'>";
$output.= "___________________________________________________________________________________";
$output.= "<br><b>“2015, Año del Generalísimo José María Morelos y Pavón”</b>";

$output.= "<p align=right>Cuatro veces Heroica Puebla de Zaragoza; a 06 de Mayo del 2015<br>";
$output.= "Carta de Presentación y Aceptación para realizar Estadías Prácticas";
$output.= "<p align=left>";        	
$output.= "<br><b>Chevrolet García Pineda";
$output.= "<br>Cto. Int. Juan Pablo II No. 1751 Col. La Noria";
$output.= "<br>Tel: 2826400";

$output.= "<br><br>Lic. Ivonne Solar Díaz";
$output.= "<br>Gerente de Recursos Humanos<br><br></b>";

$output.= "P r e s e n t e:<br>";


$output.= "<p class='linea'>Los estudiantes que cursan el último cuatrimestre en las Universidades Tecnológicas, como parte de su formación académica, deben realizar de manera obligatoria su Estadía Práctica como parte del Servicio Social dentro de una empresa o institución relacionada con algún área de especialización de sus estudios respectivos.Estas actividades se desarrollarán dentro de un período de 14 a 16 semanas, que comprende jornadas de trabajo de tiempo completo (8 Horas por día).<br><br>";
$output.= "Es importante destacar que los alumnos tienen la obligación de mantener la confidencialidad de la información derivada de la Estadía Práctica como parte de su Servicio Social, además, durante el desarrollo de ésta, no generarán relación laboral alguna con la Unidad Productiva o Social.<br><br>";
$output.= "Por ello le agradecemos las facilidades brindadas al alumno (a) <b>Alfonso García Méndez</b>  de la  carrera de <b>Ingeniería en Tecnologías de la Información y Comunicación</b> de la Universidad Tecnológica de Puebla, con número de registro <b>3214220058</b>, y número de afiliación al seguro social 2230-12-4551-4 para que realice su Estadía Práctica como parte del Servicio Social en su empresa, en los siguientes términos:<br><br>";

$output.= "<p align=left>Área y/o Proyecto Asignado:<b> Sistemas</b><br>";
$output.= "Duración: <b>07 de Mayo al 28 de Agosto del 2015</b><br>";
$output.= "Asesor por parte de la Unidad Productiva o Social : <b>Lic. Ivonne Solar Díaz</b><br>";
$output.= "Asesor por parte de la UTP :  <b>José Rubén Cabrera Gutiérrez</b><br><br><br>";

$output.= "De conformidad con lo anterior, las partes se comprometen a cumplir con lo mencionado anteriormente.<br><br>";

$output.= "       Por la Universidad                                           Por la Unidad Productiva                                            Alumno  (a)";	                                                                                  						
$output.= "                                                                              o Social<br><br>";


$output.= "____________________________                    _______________________________             ______________________<br>";
$output.= "M.T.E. ROSA AURORA LOPEZ PALACIOS                LIC. IVONNE SOLAR DIAZ                            ALFONSO GARCÍA MÉNDEZ";
$output.= "<br>Directora de la carrera de T.I.C.                Asesor Externo de Estadía<br><br><br>";         
                     
    

$output.= "Original. Unidad Productiva o Social<br>";
$output.= "c.c.p.     Dirección de la Carrera<br>";
$output.= "c.c.p.     Depto. de Prácticas y Estadías<br>";
$output.= "c.c.p.    Alumno<br><br>";
$output.= "REV. 2  FECHA: 03-07-2013-----------------------------------------------------------FR-DC-08<br>";
$output.= "<center>____________________________________________________________________________";
$output.= "<br>Antiguo Camino a La Resurrección No. 1002-A, Zona Industrial Oriente C.P. 72300 Puebla, Pue.";
$output.= "		Tel: (01-222) 309.88.87                    www.utpuebla.edu.mx";


               
  

				
					 
				
echo $output;
?> 