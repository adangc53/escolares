$(document).ready(function () {
   // $("#Date").prop('disabled', true);
   fecha()
    console.log($("#aaa").val())
$("#save").on('click', function(e){
    var parametros = 'folio=' + $("#folio").val() +
    '&nocontrol=' + $("#NoControl").val()+
    '&date=' + $("#Date").val()+'&ops='+$("#aaa").val(); 
    //$("#Date").prop('disabled', true);
    opss=$("#aaa").val()
    console.log(opss)
    var urls="";
    //if(opss=="inserta"){urls="templates/SaveConstancia.php"}
    //if(opss==""){urls="templates/UpdateConstancia.php"}
    console.log(urls)
    console.log(parametros)
    $.ajax({
        url:"templates/SaveConstancia.php",
        type:"POST",
        data:parametros,
        success:function($respuesta){
          
           if($respuesta==400){
               alert("Error faltan datos de entrada")
            
           }
           else{
            //alert("success")
                 clear();
                 colapsa();
                 $("#tabla").load("templates/Tableconstancias.php");
                 $("#aaa").val("inserta")
                // $("#Date").prop('disabled', false);
           }
        } // fin del success
        
    }); // fin de ajax   
   
});//save function 
$(".dateadd").on('click', function(e){
   // fecha()
});
function fecha(){
    var f = new Date();
    $("#Date").val(f.getFullYear() + "-" + (f.getMonth() +1) + "-" +f.getDate() )
//console.log(f.getFullYear() + "/" + (f.getMonth() +1) + "/" +f.getDate() );
//$("#Date").prop('disabled', true);
}
function clear(){
    $("#folio").val("" )
    $("#NoControl").val("" )
    $("#Date").val("" )
   // $("#Date").prop('disabled', false);
   fecha()
}

function colapsa(){
    document.getElementById("ckbtn").click();
}
$("#tabla").on("click","#del",function(){
    var folio = ($(this).attr("data-folio"));
    console.log(folio)
    var parametros = 'folio=' + folio;
    
        $.ajax({
            url:"templates/DelConstancia.php",
            type:"POST",
            data:parametros,
            success:function(respuesta){
                if(respuesta=="400"){
                    alert('Error de bnorado de datos  '+respuesta);
    
                }
                else{
                    console.log(respuesta)
                    clear();
                  //  $('.close:visible').click();  
                    $("#tabla").load("templates/Tableconstancias.php");
                }
            } // fin del success
            
        }); // fin de ajax Delete
   
});//cierra borrado
$("#tabla").on("click","#update",function(){
    $("#folio").val(($(this).attr("data-folio")));
    $("#NoControl").val(($(this).attr("data-nc")));
    $("#Date").val(($(this).attr("data-fecha")))
$("#aaa").val("actualiza")
colapsa()
//$("#folio").prop('disabled', true); //habilitar en success
//$("#date").prop('disabled', false);
});//cierra click update
$("#clear").on("click",function(){
  clear()
   //fecha()
   $("#aaa").val("inserta")
});//cierra click update
});//end document

