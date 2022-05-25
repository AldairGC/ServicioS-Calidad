<?php

        $fichero=$_GET['fichero'];

         
           
        $r='/home/hosting/siiutp/exa/tmp7/'.$fichero;

         echo $r;
        
	unlink($r);



?>


