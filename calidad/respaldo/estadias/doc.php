<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?PHP


header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header("Content-Disposition: attachment;filename=ejemplo.doc"); 

header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header("Content-Disposition: attachment;filename='ejemplo.doc'");

echo "<html>";
echo "<body>";
echo "<link href='style.css' rel='stylesheet' type='text/css' />";


$output.= "<P class='especial'><img src=puebla.jpg>";
$output.= "UNIVERSIDAD TECNOL�GICA DE PUEBLA<img src=logos.jpg></P class='especial'>";

$output.= "__________________________________________________________________________________________";
$output.= "<br>�2015, A�o del General�simo Jos� Mar�a Morelos y Pav�n�<br><br>";

$output.= "<p align=center>Cuatro veces Heroica Puebla de Zaragoza; a 06 de Mayo del 2015<br>";
$output.= "Carta de Presentaci�n y Aceptaci�n para realizar Estad�as Pr�cticas";
$output.= "<p align=left>";        	
$output.= "<br><b>Chevrolet Garc�a Pineda";
$output.= "<br>Cto. Int. Juan Pablo II No. 1751 Col. La Noria";
$output.= "<br>Tel: 2826400";

$output.= "<br><br>Lic. Ivonne Solar D�az";
$output.= "<br>Gerente de Recursos Humanos<br><br></b>";

$output.= "P r e s e n t e:<br><br>";


$output.= "<p class='linea'>Los estudiantes que cursan el �ltimo cuatrimestre en las Universidades Tecnol�gicas, como parte de su formaci�n acad�mica, deben realizar de manera obligatoria su Estad�a Pr�ctica como parte del Servicio Social dentro de una empresa o instituci�n relacionada con alg�n �rea de especializaci�n de sus estudios respectivos.Estas actividades se desarrollar�n dentro de un per�odo de 14 a 16 semanas, que comprende jornadas de trabajo de tiempo completo (8 Horas por d�a).<br><br>";
$output.= "Es importante destacar que los alumnos tienen la obligaci�n de mantener la confidencialidad de la informaci�n derivada de la Estad�a Pr�ctica como parte de su Servicio Social, adem�s, durante el desarrollo de �sta, no generar�n relaci�n laboral alguna con la Unidad Productiva o Social.<br><br>";
$output.= "Por ello le agradecemos las facilidades brindadas al alumno (a) <b>Alfonso Garc�a M�ndez</b>  de la  carrera de <b>Ingenier�a en Tecnolog�as de la Informaci�n y Comunicaci�n</b> de la Universidad Tecnol�gica de Puebla, con n�mero de registro <b>3214220058</b>, y n�mero de afiliaci�n al seguro social 2230-12-4551-4 para que realice su Estad�a Pr�ctica como parte del Servicio Social en su empresa, en los siguientes t�rminos:<br><br>";

$output.= "<p align=left>�rea y/o Proyecto Asignado:<b> Sistemas</b><br>";
$output.= "Duraci�n: <b>07 de Mayo al 28 de Agosto del 2015</b><br>";
$output.= "Asesor por parte de la Unidad Productiva o Social : <b>Lic. Ivonne Solar D�az</b><br>";
$output.= "Asesor por parte de la UTP :  <b>Jos� Rub�n Cabrera Guti�rrez</b><br><br><br>";

$output.= "De conformidad con lo anterior, las partes se comprometen a cumplir con lo mencionado anteriormente.<br><br>";

$output.= "       Por la Universidad                                           Por la Unidad Productiva                                            Alumno  (a)";	                                                                                  						
$output.= "                                                                              o Social<br><br><br>";


$output.= "____________________________                    _______________________________             ______________________<br>";
$output.= "M.T.E. ROSA AURORA LOPEZ PALACIOS                LIC. IVONNE SOLAR DIAZ                            ALFONSO GARC�A M�NDEZ";
$output.= "<br>Directora de la carrera de T.I.C.                Asesor Externo de Estad�a<br><br><br>";         
                     
    

$output.= "Original. Unidad Productiva o Social<br>";
$output.= "c.c.p.     Direcci�n de la Carrera<br>";
$output.= "c.c.p.     Depto. de Pr�cticas y Estad�as<br>";
$output.= "c.c.p.    Alumno<br><br>";
$output.= "REV. 2  FECHA: 03-07-2013FR-DC-08<br><br>";
$output.= "__________________________________________________________________________________________";
$output.= "	<p class='center'>Antiguo Camino a La Resurrecci�n No. 1002-A, Zona Industrial Oriente C.P. 72300 Puebla, Pue.";
$output.= "		<br>Tel: (01-222) 309.88.87                    www.utpuebla.edu.mx";

echo $output;
?>
										 

