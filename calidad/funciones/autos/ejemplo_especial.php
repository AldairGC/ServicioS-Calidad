<?php
$options="";

if ($_POST["elegido"]=="taxi") {
    $options= '
    <option value="">Rango</option>
    <option value="individual">individual</option>
    <option value="flotilla">flotilla</option>
    ';
}
if ($_POST["elegido"]=="uber") {
    $options= '
    <option value="">Rango</option>
    <option value="individual">individual</option>
    <option value="flotilla">flotilla</option>
    ';
}
echo $options;
?>