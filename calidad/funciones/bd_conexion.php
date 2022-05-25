<?php
	$conn = new mysqli('localhost', 'root', '','sistema');

	if($conn->connect_error){
		echo $error -> $conn->connect_error;
	}
?>