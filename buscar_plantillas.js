
var opcionesE = document.getElementById("establecimientoOpciones");
var opcionesC = document.getElementById("cursoOpciones");

$("#btnBuscarListas").click(function()
{
    var optionEstablecimiento = $(opcionesE).val();
    var cursoOpciones = $(opcionesC).val();
    $.ajax({
        url: 'plantillas.php',
        type: "POST",
        dataType: "html",
        data: {optionEstablecimiento: optionEstablecimiento, cursoOpciones: cursoOpciones},
    })
    .done(function(resultado){
        $(".contenedor_cartas").html(resultado);
    });
});




/*$(document).on('keyup', '#busqueda', function()
    {
    var valorBusqueda=$(this).val();
    if(valorBusqueda!="")
    {
        obtener_registros(valorBusqueda);
    }
    else
    {
        obtener_registros
    }
});*/

 /*function getSelectedValue()
    {
    var valorSeleccionado = document.getElementById("option").value;
    console.log(valorSeleccionado);
    
    }

    $(document).on('onchange', '#option', function()
    {
        getSelectedValue
    });



        //html= "<table class = 'table table-bordered'><thead><tr><th>Nombre</th><th>Marca</th><th>PrecioNeto</th><th>Precio</th><th>Utilidad</th><th>Unidad</th><th>Grupo</th><th>Color</th><th>Detalle</th><th>Link</th><th>CodigoTienda</th><th>ID</th><th>Stock</th><th>Precio2</th><th>Precio3</th></tr></thead><tbody>";
//for(i=0;i<valores.length;i++){
           // html+="<tr><td>"+(i+1)+"</td><td>"+valores[i][1]+"<td></td>"+valores[i][2]+"<td></td>"+valores[i][3]+"<td></td>"+valores[i][4]+"<td></td>"+valores[i][5]+"<td></td>"+valores[i][6]+"<td></td>"+valores[i][7]+"<td></td>"+valores[i][8]+"<td></td>"+valores[i][9]+"<td></td>"+valores[i][10]+"<td></td>"+valores[i][11]+"<td></td>"+valores[i][12]+"<td></td>"+valores[i][13]+"<td></td>"+valores[i][14]+"<td></td></tr>";
              //  }
    //html+="</tbody></table>"
    //$("#lista").html(html);
*/
