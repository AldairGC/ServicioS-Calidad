﻿<?php

        $fichero=$_GET['fichero'];

         
           
        $r='/home/hosting/siiutp/exa/tmp6/'.$fichero;

         echo $r;
        
	unlink($r);



?>


