$(document).on('ready', funcPrincipal);

function funcPrincipal ()
{
    $('#btnIngresar').on('Click', funcVerificar);
}

function funcVerificar ()
{
    var nombreUsuario = $("#nombreUsuario").val();
    var contrasena = $("#contrasena").val();
    $.get('login.php?nombreUsuario='+nombreUsuario+'&contrasena='+contrasena, function (data)
        {
            alert("Respuesta del servidor: "+data);
        });
    $('#verificado').text("Nombre de usuario o contraseña incorrectos");
}