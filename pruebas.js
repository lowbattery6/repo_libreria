$(document).on('ready', funcionPrincipal);

function funcionPrincipal ()
{
    $('#btnIndexPrueba').click(funcionApretar);
}


function funcionApretar ()
{
      var nombre = $('#txtIndexPrueba').val();
      $.get("pruebaBdPhp.php?nombreUsuario="+nombre, function (data)
           {
                 $('#parrafoPrueba').text(""+data);  
          if(data.exito)
              {
                  alert (data.mensaje);
              }
      });
     event.preventDefault();
}