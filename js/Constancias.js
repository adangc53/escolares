$(document).ready(function () {

$("#save").on('click', function(e){
    var parametros = 'folio=' + $("#folio").val() +
    '&nocontrol=' + $("#NoControl").val()+
    '&date=' + $("#Date").val(); 
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
           }
        } // fin del success
        
    }); // fin de ajax   
   
});//save function 
$(".dateadd").on('click', function(e){
    fecha()
});
function fecha(){
    var f = new Date();
    $("#Date").val(f.getFullYear() + "-" + (f.getMonth() +1) + "-" +f.getDate() )
//console.log(f.getFullYear() + "/" + (f.getMonth() +1) + "/" +f.getDate() );
$("#Date").prop('disabled', true);
}
function clear(){
    $("#folio").val("" )
    $("#NoControl").val("" )
    $("#Date").val("" )
    $("#Date").prop('disabled', false);
}
function colapsa(){
    $('#collapseExample').addClass('collapsing');
    $('#collapseExample').removeClass('show');
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
});//end document

