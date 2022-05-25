<?php
define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', 'syscompras');
define('DB_SERVER_PASSWORD', 'AdminCompras');
define('DB_DATABASE', 'calidad');
define('NUM_ITEMS_BY_PAGE', 6);

$connexion = new mysqli(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE);
?>