<?php

        $fichero=$_GET['fichero'];

         
           
        $r='/home/hosting/siiutp/exa/nuevaversion2018/tmp/'.$fichero;

         echo $r;
        
	unlink($r);



?>


