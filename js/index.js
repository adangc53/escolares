$("#Login").click(function(){
    var parametros = 'user=' + $("#user").val() +
        '&pass=' + $("#password").val();
    $.ajax({
        url:"templates/index.php",
        type:"POST",
        data:parametros,
        success:function(respuesta){
            if(respuesta==2||respuesta==-100){
            $("#msg").html("Error usuario o contraseña incorrecto");
            $("#user").focus();
            }
            else{
                document.location.href="home.php";   //exitoLogin
            }
        } // fin del success
        
    }); // fin de ajax    
});