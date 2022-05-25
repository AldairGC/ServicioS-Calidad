<?php
$options="";
if ($_POST["elegido"]=="auto") {
    $options= '
    <option value="">Uso</option>
    <option value="comercial">comercial</option>
    <option value="personal">personal</option>
    <option value="servicio publico">servicio publico</option>
    ';
}

if ($_POST["elegido"]=="camion") {
    $options= '
    <option value="">Uso</option>
    <option value="servicio publico federal">servicio publico federal</option>
    <option value="servicio publico privado">servicio publico privado</option>
    ';
}
echo $options;
?>