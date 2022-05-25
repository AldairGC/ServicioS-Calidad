<?php
$options="";
if ($_POST["elegido"]=="individual") {
    $options= '
    <option value="">Accesorios</option>
    <option value="plataforma">Plataforma</option>
    <option value="cama_baja">Cama Baja</option>
    <option value="cama_normal">Cama Normal</option>
    <option value="tanque">Tanque</option>
    <option value="jaula_ganadera">Jaula Ganadera</option>
    ';
}
if ($_POST["elegido"]=="flotilla") {
    $options= '
    <option value="">Accesorios</option>
    <option value="plataforma">Plataforma</option>
    <option value="cama_baja">Cama Baja</option>
    <option value="cama_normal">Cama Normal</option>
    <option value="tanque">Tanque</option>
    <option value="jaula_ganadera">Jaula Ganadera</option>
    ';
}
echo $options;
?>