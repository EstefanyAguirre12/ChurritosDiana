$(document).ready(function() {
    $("#insert").click(function() {
        var IdP = getParameterByName('Id');
        var IdU = getParameterByName('IdUsuario');
        var cantidad = $("#cantidad").val();
        var dataString = "IdP=" + IdP + "&IdU=" + IdU + "&cantidad=" + cantidad + "&insert=";
            $.ajax({
                type: "POST",
                url: "http://localhost:8080/baroloapp/php/insert.php",
                data: dataString,
                crossDomain: true,
                cache: false,
                success: function(data) {
                    var variable1 = data.trim();
                    if (variable1 == "success") {
                        swal({title: 'Se agrego correctamente', text: '', icon: 'success', button: 'Aceptar', closeOnClickOutside: false, closeOnEsc: false}).then(value=>{location.href = 'principal.html?IdUsuario='+IdU+''});
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