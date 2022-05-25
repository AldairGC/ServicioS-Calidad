<?php
require_once 'bd_conexion.php';
//ini_set('date.timezone','America/Mexico_City');
$letras="FT";
//$a=substr(date("Y"),2,2);
//$m=date("m");
//$d=date("d");

      try {
        $sql = "SELECT MAX(Auto) AS id FROM tramites";
        $resultado = $conn->query($sql);
        while($folio = $resultado->fetch_assoc()) {
          $id = trim($folio['id']);
        }
        if ($id == "") {
            $id = 1;
        }else{
          $id++;
        }
        echo $letras.$id;
        //$sql = "SELECT Auto FROM tramites";
        //$resultado = $conn->query($sql);
        //while ($folio_tramite = $resultado->fetch_assoc()){
        //  $folio = $folio_tramite['Auto'];
        //}
        //if (@$folio == ""){
        //  $folio = 1;
        //}else{
        //  $folio++;
        //}
        //$ticket=$letras.$folio;
        //echo $ticket;
      } catch (Exception $e) {
        $error = $e->getMessage();
        echo $error;
      }
?>