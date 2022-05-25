function multiplicar(){
  m1 = document.getElementById("multiplicando").value;
  m2 = document.getElementById("multiplicador").value;
  r = m2 / (m1 * m1);
  


  document.getElementById("resultado").value = r;

  
}





function getNum(val) {
   if ( isNaN(parseInt(val)) ) {
     return 0;
   }
   return val;
}


function sumar (v1, v2, v3, v4, v5, v6, v7, v8) {
    var total = 0;
    var n1=0,n2=0,n3=0,n4=0,n5=0,n6=0,n7=0,n8=0;
    n1 = getNum(v1);
    n2 = getNum(v2);
    n3 = getNum(v3);	
    n4 = getNum(v4);	
    n5 = getNum(v5);	
    n6 = getNum(v6);	
    n7 = getNum(v7);	
    n8 = getNum(v8);	
    total = document.getElementById('spTotal').innerHTML;
	
    /* Esta es la suma. */
    total = n1*1 + n2*1 + n3*1 + n4*1 + n5*1 + n6*1 + n7*1 + n8*1;
	
    // Colocar el resultado de la suma en el control "span".
    document.getElementById('spTotal').innerHTML = parseInt(total);
}

function getNum(val) {
   if ( isNaN(parseInt(val)) ) {
     return 0;
   }
   return val;
}