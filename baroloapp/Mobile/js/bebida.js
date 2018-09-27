var id = null;
$(document).ready(function() {
       var url = "http://localhost:8080/baroloapp/php/bebida.php";
       $.getJSON(url, function(result) {
           $.each(result, function(i, field) {
                id = field.IdProducto;
                var Nombre = field.NombreProducto;
                var Costo = field.Precio;
                var Descripcion = field.Descripcion;
                var IdU = getParameterByName('IdUsuario');

                $("#list").append("<li class='cards__item'>"
                + "<div class='card'>"
                + "<div class='col-md-12 centered'>"
                + "<div class='custom-heading style-1'>"
                + "<br> <h2>"+Nombre+"</h2>"
                + "<br> <h2>$ "+Costo+"</h2>"
                + "</div>"
                + "<p>"+Descripcion+"</p>"
                + " <a id='insert' class='discover_more has_transition_400' href='agregar.html?Id="+id+"&IdUsuario="+IdU+"'>AGREGAR</a>"
                + "</div>"
                + "</div>"
                + "</li>"
              );
           });
       });
   });



function getParameterByName(name) {
   name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
   var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
   results = regex.exec(location.search);
   return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

