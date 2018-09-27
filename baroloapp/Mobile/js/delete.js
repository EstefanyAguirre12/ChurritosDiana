$(document).ready(function() {
    var IdU = getParameterByName('IdUsuario');

 $('#delete').click(function () {
            var id = getParameterByName('Id');
            var IdU = getParameterByName('IdUsuario');
            var IdPe = getParameterByName('IdPedido');
            var dataString = "id=" + id + "&IdUsuario=" + IdU + "&IdPedido=" + IdPe + "&delete=";
            $.ajax({
                type: "POST",
                url:  "http://localhost:8080/baroloapp/php/delete.php",
                data: dataString,
                crossDomain: true,
                cache: false,
                success: function(data) {
                    if (data == "success") {
                        swal({title: 'Se elimino correctamente', text: '', icon: 'success', button: 'Aceptar', closeOnClickOutside: false, closeOnEsc: false}).then(value=>{location.href = 'pedido.html?IdUsuario='+IdU+''});
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