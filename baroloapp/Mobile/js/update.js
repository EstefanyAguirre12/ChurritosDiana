$(document).ready(function() {

 
 
 $('#update').click(function () {
            var id = getParameterByName('IdUsuario');
            var dataString = "IdUsuario=" + id + "&update=";
            $.ajax({
                type: "POST",
                url: "http://localhost:8080/baroloapp/php/update.php",
                data: dataString,
                crossDomain: true,
                cache: false,
                success: function(data) {
                    if (data == "success") {
                        swal({title: 'Se ha realizado tu pedido con exito', text: '', icon: 'success', button: 'Aceptar', closeOnClickOutside: false, closeOnEsc: false}).then(value=>{location.href = 'principal.html?IdUsuario='+id+''});
                    } else if (data == "error") {
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