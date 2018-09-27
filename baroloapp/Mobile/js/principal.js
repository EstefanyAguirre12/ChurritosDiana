$(document).ready(function() {
    $("#ok1").click(function() {
        var Id = getParameterByName('IdUsuario');
        swal({title: 'Agrega el desayuno que deseas', text: '', icon: 'info', button: 'Aceptar', closeOnClickOutside: false, closeOnEsc: false}).then(value=>{location.href = 'desayuno.html?IdUsuario='+Id+''});
    });
    $("#ok2").click(function() {
        var Id = getParameterByName('IdUsuario');
        swal({title: 'Agrega la entrada que deseas', text: '', icon: 'info', button: 'Aceptar', closeOnClickOutside: false, closeOnEsc: false}).then(value=>{location.href = 'entrada.html?IdUsuario='+Id+''});
    });
    $("#ok3").click(function() {
        var Id = getParameterByName('IdUsuario');
        swal({title: 'Agrega el almuerzo que deseas', text: '', icon: 'info', button: 'Aceptar', closeOnClickOutside: false, closeOnEsc: false}).then(value=>{location.href = 'almuerzo.html?IdUsuario='+Id+''});
    });
    $("#ok4").click(function() {
        var Id = getParameterByName('IdUsuario');
        swal({title: 'Agrega la cena que deseas', text: '', icon: 'info', button: 'Aceptar', closeOnClickOutside: false, closeOnEsc: false}).then(value=>{location.href = 'cena.html?IdUsuario='+Id+''});
    });
    $("#ok5").click(function() {
        var Id = getParameterByName('IdUsuario');
        swal({title: 'Agrega los postres que deseas', text: '', icon: 'info', button: 'Aceptar', closeOnClickOutside: false, closeOnEsc: false}).then(value=>{location.href = 'postre.html?IdUsuario='+Id+''});
    });
    $("#ok6").click(function() {
        var Id = getParameterByName('IdUsuario');
        swal({title: 'Agrega las bebidad que deseas', text: '', icon: 'info', button: 'Aceptar', closeOnClickOutside: false, closeOnEsc: false}).then(value=>{location.href = 'bebida.html?IdUsuario='+Id+''});
    });
});



function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}