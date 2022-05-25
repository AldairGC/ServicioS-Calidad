<?php

        $fichero=$_GET['fichero'];

         
           
        $r='/home/hosting/siiutp/exa/tmp1/'.$fichero;

         echo $r;
        
	unlink($r);



?>


