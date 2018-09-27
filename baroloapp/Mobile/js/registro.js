$(document).ready(function() {
    $("#insert").click(function() {
        var usuario = $("#usuario").val();
        var contrasena = $("#contrasena").val();
        var numero = $("#num").val();
        var codigo = $("#cod").val();
        var dataString = "Us=" + usuario + "&Con=" + contrasena + "&Num=" + numero + "&Cod=" + codigo + "&insert=";
            $.ajax({
                type: "POST",
                url: "http://localhost:8080/baroloapp/php/registro.php",
                data: dataString,
                crossDomain: true,
                cache: false,
                success: function(data) {
                    var variable1 = data.trim();
                    if (variable1 == "success") {
                        swal({title: 'Se registro correctamente', text: '', icon: 'success', button: 'Aceptar', closeOnClickOutside: false, closeOnEsc: false}).then(value=>{location.href = 'login.html'});
                    } else if (variable1 == "error") {
                        swal('Ocurrio un error');
                    }
                }
            });

    });
});



function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}