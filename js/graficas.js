$(document).ready(function () {
    dateweek()
    var lastweek= new Array()
    $("#filtro").click(function(){
       console.log("hola")
        dateweek()
    });
    function p(){
       
    }
    function dateweek(){
        $.ajax({
            url:"templates/date.php",
            type:"POST",
            data:0,
            success:function(respuesta){
              // console.log(respuesta);
               lastweek=JSON.parse(respuesta)//Array.from(respuesta)
               console.log(lastweek.length);
               $("#dates").val(JSON.stringify(lastweek));
               for(var i=0; i<lastweek.length; i++){
                   console.log(lastweek[i])
               }
            } // fin del success
            
        }); // fin de ajax  
    }
});