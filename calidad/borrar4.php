<?php

        $fichero=$_GET['fichero'];

         
           
        $r='/home/hosting/siiutp/exa/nuevaversion2018/tmp4/'.$fichero;

         echo $r;
        
	unlink($r);



?>


