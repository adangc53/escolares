$(document).ready(function () {
    
    $('#Save').on('click', function(e) {
        //validar()
        var parametros = 'user=' + $("#user").val() +
        '&pass=' + $("#password").val();
    $.ajax({
        url:"templates/AddUser.php",
        type:"POST",
        data:parametros,
        success:function(respuesta){
            if(respuesta=="400"){
                alert('Faltan datos de entradam, ingrese usuario y contraseña error: '+respuesta);

            }
            else{
                console.log(respuesta)
                limpiar();
                $('.close:visible').click();  
                $("#tabla").load("templates/TableUsers.php");
            }
        } // fin del success
        
    }); // fin de ajax    
    });
    
    
    function limpiar(){
        $("#user").val("");
        $("#password").val("");
    };

    $("#tabla").on("click",".selecciona",function(){
        var user = ($(this).attr("data-user"));
        console.log(user)
        var parametros = 'user=' + user;
        if(user=="master"){
            alert("usuario privilegiado no se puede borrar este registro")
        }
        else{
            $.ajax({
                url:"templates/DelUser.php",
                type:"POST",
                data:parametros,
                success:function(respuesta){
                    if(respuesta=="400"){
                        alert('Faltan datos de entradam, ingrese usuario y contraseña error: '+respuesta);
        
                    }
                    else{
                        console.log(respuesta)
                        limpiar();
                        $('.close:visible').click();  
                        $("#tabla").load("templates/TableUsers.php");
                    }
                } // fin del success
                
            }); // fin de ajax 
        }
    });//cierra borrado

});