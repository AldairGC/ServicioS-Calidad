<?php
session_start();
$no='Auditor';

$var1=$_SESSION['usuario'];
$var2=$_SESSION['clave'];




$idac=$_POST['idac'];


				include_once("conecta.php");


				$consulta1=mysql_query("SELECT * FROM areas WHERE passauditor='$var2'",$link);
				while($row=mysql_fetch_array($consulta1))
			{

					
					$nomcal=$row['nomcal'];
                         }







				$consulta=mysql_query("SELECT * FROM ap WHERE idac='$idac' and auditor='$nomcal'",$link);
				while($row=mysql_fetch_array($consulta))
			{
                                        $numero=$idac;
                         }


                       if($idac==$numero)
                          {



echo "<input type=button value='Imprimir Frente' onClick=window.open('usu.php?idac=$idac','_blank')>";
echo "<input type=button value='Imprimir Reverso' onClick=window.open('usu1.php?idac=$idac','_blank')>";

}
else
{
echo "<br><br><b><h2>No tiene registrada ninguna acci&oacute;n con este n&uacute;mero";
}
mysql_close($link);
?>
</center>


</body>