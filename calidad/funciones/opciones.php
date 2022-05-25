<?php
    $options="";
    if ($_POST["elegido"]=="ampliar_cobertura") {
        $options= '
        <option value="genera">Genera</option>
        ';
    }
    if ($_POST["elegido"]=="disminuir_cobertura") {
        $options= '
        <option value="genera">Genera</option>
        ';
    }
    if ($_POST["elegido"]=="cancelacion_poliza_pagada") {
        $options= '
        <option value="genera">Genera</option>
        ';
    }
    if ($_POST["elegido"]=="cambio_domicilio") {
        $options= '
        <option value="genera">Genera</option>
        ';
    }
    if ($_POST["elegido"]=="cambio_conductor") {
        $options= '
        <option value="genera">Genera</option>
        ';
    }
    if ($_POST["elegido"]=="equipo_especial") {
        $options= '
        <option value="genera">Genera</option>
        ';
    }
    if ($_POST["elegido"]=="cambio_placas") {
        $options= '
        <option value="no_genera">No Genera</option>
        ';
    }
    if ($_POST["elegido"]=="modificacion_caracteres") {
        $options= '
        <option value="no_genera">No Genera</option>
        ';
    }
    if ($_POST["elegido"]=="beneficiarios_preferentes") {
        $options= '
        <option value="no_genera">No Genera</option>
        ';
    }
    

    echo $options;
?>
