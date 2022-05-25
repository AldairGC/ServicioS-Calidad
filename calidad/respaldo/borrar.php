<?php

        $fichero=$_GET['fichero'];

         
           
        $r='/home/hosting/siiutp/exa/tmp/'.$fichero;

         echo $r;
        
	unlink($r);



?>


