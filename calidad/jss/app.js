  $(document).ready(function () {
    
    $('.sidebar-menu').tree();
    $('#registros').DataTable({
      'paging'      : true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
      'language': {
        paginate: {
          next: 'Siguiente',
          previous: 'Anterior',
          last: 'Ultimo',
          first: 'Primero'
        },
        info: 'Mostrando _START_ a _END_ de _TOTAL_ resultados',
        lengthMenu: "Mostrar _MENU_ resultados",
        //emptyTable: 'No hay Registros',
        zeroRecords:    "No se encontraron resultados",
        infoEmpty: '0 Registros',
        infoFiltered:   "(filtrado de _MAX_ registros)",
        search: 'Buscar :'
      }
    });
    //$('#registros').DataTable({
      //'paging'      : true,
      //'pageLength'  : 10,
      //'lengthChange': false,
      //'searching'   : true,
      //'ordering'    : true,
      //'info'        : true,
      //'autoWidth'   : false,
      //'language'  : {
        //paginate: {
          //next: 'Siguiente',
          //previous: 'Anterior',
          //last: 'Ultimo',
          //first: 'Primero'
        //},
        //info: 'Mostrando _START_ a _END_ de _TOTAL_ resultados',
        //emptyTable: 'No hay Registros',
        //infoEmpty: '0 Registros',
        //search: 'Buscar :'
      //}
    //});

    $('#crear_registro_admin').attr('disabled', true);

    $('#repetir_password').on('input', function(){
      var password_nuevo = $('#password').val();
      if ($(this).val() == password_nuevo) {
        $('#resultado_password').text('Correcto');
        $('#resultado_password').parents('.form-group').addClass('has-success').removeClass('has-error');
        $('input#password').parents('.form-group').addClass('has-success').removeClass('has-error');
        $('#crear_registro').attr('disabled', false);
      }else{
        $('#resultado_password').text('Password no coinciden');
        $('#resultado_password').parents('.form-group').addClass('has-error').removeClass('has-success');
        $('input#password').parents('.form-group').addClass('has-error').removeClass('has-success');
      }
    });

     //Date picker
    $('#fecha').datepicker({
      autoclose: true
    });

    //Select2
    $('.seleccionar').select2();

     //Timepicker
    $('.hora').timepicker({
      showInputs: false
    })

    //Plugin Icono Font Awesome

    $('#icono').iconpicker();

    //icheck checkboxes
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    });

    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    });
    $('#referencia').change(function(){
      $('#referido').removeAttr('disabled');
    });
    // LINE CHART
    //$.getJSON('servicio-registrados.php', function(data){
        //var line = new Morris.Line({
          //element: 'grafica-registros',
          //resize: true,
          //data: data,
          //xkey: 'fecha',
          //ykeys: ['cantidad'],
          //labels: ['Item 1'],
          //lineColors: ['#3c8dbc'],
          //hideHover: 'auto'
        //});
    //});
  })