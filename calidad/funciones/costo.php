<?php
    $options="";
    if ($_POST["elegido"]=="cotizacion") {
        $options= '
        <option value="cotizacion">Cotizacion</option>
        ';
    }
    if ($_POST["elegido"]=="emision_poliza") {
        $options= '
        <option value="emision_poliza">Emision Poliza</option>

        ';
    }
    if ($_POST["elegido"]=="cancelacion_poliza") {
        $options= '
        <option value="cancelacion_poliza">Cancelacion Poliza</option>
        ';
    }
    if ($_POST["elegido"]=="endoso") {
        $options= '
        <option value="">Elige una Opcion</option>
        <option value="ampliar_cobertura">Ampliar Cobertura</option>
        <option value="disminuir_cobertura">Disminuir Cobertura</option>
        <option value="cancelacion_poliza_pagada">Cancelacion Poliza Pagada</option>
        <option value="cambio_domicilio">Cambio de Domicilio</option>
        <option value="cambio_conductor">Cambio de Conductor</option>
        <option value="equipo_especial">Equipo Especial</option>
        <option value="cambio_placas">Cambio de Placas</option>
        <option value="modificacion_caracteres">Modificacion de Caracteres</option>
        <option value="beneficiarios_preferentes">Beneficiarios Preferentes</option>
        ';
    }
    if ($_POST["elegido"]=="siniestro") {
        $options= '
        <option value="auto">Auto</option>
        <option value="casa_habitacion">Casa Habitacion</option>
        <option value="empresa">Empresa</option>
        ';
    }
    echo $options;
?>
