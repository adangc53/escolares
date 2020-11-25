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
            alert($respuesta)
           if($respuesta==400){
               alert("Error faltan datos de entrada")
            
           }
           else{
            alert("Error")
                 clear();
                 colapsa();
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
});//end document

