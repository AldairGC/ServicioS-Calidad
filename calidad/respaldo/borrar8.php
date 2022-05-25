<?php

        $fichero=$_GET['fichero'];

         
           
        $r='/home/hosting/siiutp/exa/tmp8/'.$fichero;

         echo $r;
        
	unlink($r);



?>


