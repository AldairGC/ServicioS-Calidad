<?php

        $fichero=$_GET['fichero'];

         
           
        $r='/home/hosting/siiutp/exa/tmp5/'.$fichero;

         echo $r;
        
	unlink($r);



?>


