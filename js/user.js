$(document).ready(function () {
    
    $('#Save').on('click', function(e) {
        //validar()
        var a= $("#aaa").val();
        var parametros = 'user=' + $("#user").val() +
        '&pass=' + $("#password").val();
        if(a==0){
               
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
                } 
        else{
            $.ajax({
                url:"templates/UpdateUser.php",
                  type:"POST",
                  data:parametros,
                  success:function(respuesta){
                       if(respuesta=="400"){
                   alert('Faltan datos de entradam, ingrese usuario y contraseña error: '+respuesta);
   
                    }
                       else{
                        $("#aaa").val(0);
                        limpiar();
                        $('.close:visible').click();  
                        $("#tabla").load("templates/TableUsers.php");
                        console.log(respuesta)
                        $("#user").prop('disabled', false);
                     }
                  } // fin del success
           
             }); // fin de ajax   
           
        }
    });
    
    
    function limpiar(){
        $("#user").val("");
        $("#password").val("");
    };

    $("#tabla").on("click","#del",function(){
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
$("#tabla").on("click","#update",function(){
    $("#user").val(($(this).attr("data-user")));
$("#aaa").val(1)
$("#user").prop('disabled', true);
});//cierra click update
$('#closemodal').on('click', function(e){
    $("#user").val("");
    $("#aaa").val(0)
    $("#user").prop('disabled', false);
});
});