<?php
$options="";
if ($_POST["elegido"]=="antiguos") {
    $options= '
    <option value="">Tipo Vehiculo</option>
    <option value="auto">Auto</option>
    <option value="camion">Camion</option>
    <option value="camiones10">Camiones hasta (10 Toneladas)</option>
    <option value="camiones14">Camiones hasta (14 Toneladas)</option>
    <option value="camiones18">Camiones hasta (18 Toneladas)</option>
    <option value="camiones20">Camiones hasta (20 Toneladas)</option>
    <option value="motocicleta">Motocicleta</option>
    ';
}
if ($_POST["elegido"]=="blindados") {
    $options= '
    <option value="">Tipo Vehiculo</option>
    <option value="auto">Auto</option>
    <option value="camion">Camion</option>
    <option value="camiones10">Camiones hasta (10 Toneladas)</option>
    <option value="camiones14">Camiones hasta (14 Toneladas)</option>
    <option value="camiones18">Camiones hasta (18 Toneladas)</option>
    <option value="camiones20">Camiones hasta (20 Toneladas)</option>
    <option value="motocicleta">Motocicleta</option>
    ';
}
if ($_POST["elegido"]=="clasicos") {
    $options= '
    <option value="">Tipo Vehiculo</option>
    <option value="auto">Auto</option>
    <option value="camion">Camion</option>
    <option value="camiones10">Camiones hasta (10 Toneladas)</option>
    <option value="camiones14">Camiones hasta (14 Toneladas)</option>
    <option value="camiones18">Camiones hasta (18 Toneladas)</option>
    <option value="camiones20">Camiones hasta (20 Toneladas)</option>
    <option value="motocicleta">Motocicleta</option>
    ';
}
if ($_POST["elegido"]=="fronterizos") {
    $options= '
    <option value="">Tipo Vehiculo</option>
    <option value="auto">Auto</option>
    <option value="camion">Camion</option>
    <option value="camiones10">Camiones hasta (10 Toneladas)</option>
    <option value="camiones14">Camiones hasta (14 Toneladas)</option>
    <option value="camiones18">Camiones hasta (18 Toneladas)</option>
    <option value="camiones20">Camiones hasta (20 Toneladas)</option>
    <option value="motocicleta">Motocicleta</option>
    ';
}
if ($_POST["elegido"]=="importados") {
    $options= '
    <option value="">Tipo Vehiculo</option>
    <option value="auto">Auto</option>
    <option value="camion">Camion</option>
    <option value="camiones10">Camiones hasta (10 Toneladas)</option>
    <option value="camiones14">Camiones hasta (14 Toneladas)</option>
    <option value="camiones18">Camiones hasta (18 Toneladas)</option>
    <option value="camiones20">Camiones hasta (20 Toneladas)</option>
    <option value="motocicleta">Motocicleta</option>
    ';
}
if ($_POST["elegido"]=="legalizados") {
    $options= '
    <option value="">Tipo Vehiculo</option>
    <option value="auto">Auto</option>
    <option value="camion">Camion</option>
    <option value="camiones10">Camiones hasta (10 Toneladas)</option>
    <option value="camiones14">Camiones hasta (14 Toneladas)</option>
    <option value="camiones18">Camiones hasta (18 Toneladas)</option>
    <option value="camiones20">Camiones hasta (20 Toneladas)</option>
    <option value="motocicleta">Motocicleta</option>
    ';
}
if ($_POST["elegido"]=="residentes") {
    $options= '
    <option value="">Tipo Vehiculo</option>
    <option value="auto">Auto</option>
    <option value="camion">Camion</option>
    <option value="camiones10">Camiones hasta (10 Toneladas)</option>
    <option value="camiones14">Camiones hasta (14 Toneladas)</option>
    <option value="camiones18">Camiones hasta (18 Toneladas)</option>
    <option value="camiones20">Camiones hasta (20 Toneladas)</option>
    <option value="motocicleta">Motocicleta</option>
    ';
}
echo $options;
?>