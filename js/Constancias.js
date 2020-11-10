$(document).ready(function () {

$("#save").on('click', function(e){
   clear();
   
   $('#collapseExample').removeClass('show');
});//save fucntion 
$(".dateadd").on('click', function(e){
    fecha()
});
function fecha(){
    var f = new Date();
    $("#Date").val(f.getFullYear() + "-" + (f.getMonth() +1) + "-" +f.getDate() )
console.log(f.getFullYear() + "/" + (f.getMonth() +1) + "/" +f.getDate() );
$("#Date").prop('disabled', true);
}
function clear(){
    $("#Date").val("" )
    $("#Date").prop('disabled', false);
}
});//end document