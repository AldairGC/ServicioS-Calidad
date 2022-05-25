          $(document).ready(function(){
            $("#vehiculo").change(function (){
                $("#vehiculo option:selected").each(function (){
                    elegido=$(this).val();
                    $.post("funciones/autos/ejemplo_opciones.php",
                     { 
                      elegido: elegido
                     },
                      function(data)
                       {
                         $("#tipov").html(data);
                       });
                  });
          })
         $("#tipov").change(function (){
            $("#tipov option:selected").each(function (){
                elegido=$(this).val();
                $.post("funciones/autos/ejemplo_uso.php",
                  { 
                   elegido: elegido
                  },
                   function(data)
                       {
                         $("#uso").html(data);
                       });
                  });
          })
          $("#uso").change(function (){
              $("#uso option:selected").each(function (){
                  elegido=$(this).val();
                  $.post("funciones/autos/ejemplo_rango.php",
                    { 
                     elegido: elegido
                    },
                     function(data)
                       {
                         $("#rango").html(data);
                       });
                  });
          })
         $("#rango").change(function (){
              $("#rango option:selected").each(function (){
                  elegido=$(this).val();
                  $.post("funciones/autos/ejemplo_especial.php",
                    { 
                      elegido: elegido
                    }, 
                      function(data)
                       {
                         $("#especial").html(data);
                       });
                  });
          })
         $("#rango").change(function (){
              $("#rango option:selected").each(function (){
                  elegido=$(this).val();
                  $.post("funciones/autos/ejemplo_accesorios.php",
                    { 
                      elegido: elegido
                    }, 
                      function(data)
                       {
                         $("#accesorios").html(data);
                       });
                  });
          })
      });