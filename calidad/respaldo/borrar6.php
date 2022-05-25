<?php

        $fichero=$_GET['fichero'];

         
           
        $r='/home/hosting/siiutp/exa/tmp2/'.$fichero;

         echo $r;
        
	unlink($r);



?>


