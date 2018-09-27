var id = null;

    var IdU = getParameterByName('IdUsuario');
    var dataString = "IdUsuario=" + IdU + "";
    var url= "http://localhost:8080/baroloapp/php/pedido.php?"+dataString+"";
        $.getJSON(url, function(result){
            $.each(result, function(i, field) {
                id = field.IdProducto;
                var IdPe = field.IdPedido;
                var IdP = field.IdP;
                var Nombre = field.NombreProducto;
                var Costo = field.Precio;
                var Cantidad = field.Cantidad;
                var SubTotal = Cantidad * Costo;
                var IdU = getParameterByName('IdUsuario');
               
            $("#list").append("<li class='cards__item'>"
                 + "<div class='card'>"
                 + "<div class='col-md-12 centered'>"
                 + "<div class='custom-heading style-1'>"
                 + "<br> <h2>"+Nombre+"</h2>"
                 + "<br> <h2>$ "+Costo+"</h2>"
                 + "</div>"
                 + "<p>CANTIDAD: "+Cantidad+"</p>"
                 + "<p>SUBTOTAL: "+SubTotal+"</p>"
                 + " <a id='delete' class='discover_more has_transition_400' href='delete.html?Id="+id+"&IdUsuario="+IdU+"&IdPedido="+IdPe+"'>ELIMINAR</a>"
                 + "</div>"
                 + "</div>"
                 + "</li>"
               );
            
           });
        });



function getParameterByName(name) {
   name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
   var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
   results = regex.exec(location.search);
   return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

