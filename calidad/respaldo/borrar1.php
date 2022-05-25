<?php

        $fichero=$_GET['fichero'];

         
           
        $r='/home/hosting/siiutp/exa/tmp3/'.$fichero;

         echo $r;
        
	unlink($r);



?>


