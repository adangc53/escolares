$(document).ready(function () {

$("#save").on('click', function(e){
   clear();
   $('#collapseExample').addClass('collapsing');
   $('#collapseExample').removeClass('show');
});//save function 
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
    $("#folio").val("" )
    $("#NoControl").val("" )
    $("#Date").val("" )
    $("#Date").prop('disabled', false);
}
});//end document