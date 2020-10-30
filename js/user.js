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
            if(respuesta==0){
                alert('Faltan datos de entradam, ingrese usuario y contraseña');
            }
            else{
                console.log(respuesta)
            }
        } // fin del success
        
    }); // fin de ajax    
    });
    
    function validar(){
        if ($('#user').val() == "" || $('#user').text() == null) {
            
            alert('Faltan datos de entrada');
            return false;
        } 
        else{
            console.log("bien")
        }
    };
});