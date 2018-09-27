$("#insert").click(function () {
    var usuario = $("#usuario").val();
    var clave = $("#contrasena").val();
    var dataString = "usuario=" + usuario + "&contrasena=" + clave  + "";
    var url = "http://localhost:8080/baroloapp/php/login.php?"+dataString+"";
        $.getJSON(url, function(result){
            var id = 0;
            var id1 = 0;
            $.each(result, function(i, field) {
                console.log(result);
                id = field.IdUsuario;
                id1 = field.id1;
            });
            if(id1 > 0){
                swal({title: 'Bienvenido', text: '', icon: 'success', button: 'Aceptar', closeOnClickOutside: false, closeOnEsc: false}).then(value=>{location.href = 'principal.html?IdUsuario='+id+''});
                                   
              }
            else {
                swal({title: 'Campos erroneo', text: '', icon: 'error', button: 'Aceptar', closeOnClickOutside: false, closeOnEsc: false}).then(value=>{location.href = ''});
                
            }
        });
    });
