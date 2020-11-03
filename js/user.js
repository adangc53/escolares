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
            }
        } // fin del success
        
    }); // fin de ajax    
    });
    
    
    function limpiar(){
        $("#user").val("");
        $("#password").val("");
    };

    $('.delete').on('click', function(e) {
      
      console.log("tlacua")
    });
   
});