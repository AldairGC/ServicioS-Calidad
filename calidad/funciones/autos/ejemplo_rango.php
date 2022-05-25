<?php
$options="";
if ($_POST["elegido"]=="comercial") {
    $options= '
    <option value="">Rango</option>
    <option value="individual">individual</option>
    <option value="flotilla">flotilla</option>
    ';
}
if ($_POST["elegido"]=="personal") {
    $options= '
    <option value="">Rango</option>
    <option value="individual">individual</option>
    <option value="flotilla">flotilla</option>
    ';
}
if ($_POST["elegido"]=="servicio publico") {
    $options= '
    <option value="">Tipo</option>
    <option value="taxi">taxi</option>
    <option value="uber">uber</option>
    ';
}

if ($_POST["elegido"]=="servicio publico federal") {
    $options= '
    <option value="">Rango</option>
    <option value="individual">individual</option>
    <option value="flotilla">flotilla</option>
    ';
}

if ($_POST["elegido"]=="servicio publico privado") {
    $options= '
    <option value="">Rango</option>
    <option value="individual">individual</option>
    <option value="flotilla">flotilla</option>
    ';
}
echo $options;
?>