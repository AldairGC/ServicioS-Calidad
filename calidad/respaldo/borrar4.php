<?php

        $fichero=$_GET['fichero'];

         
           
        $r='/home/hosting/siiutp/exa/tmp4/'.$fichero;

         echo $r;
        
	unlink($r);



?>


