$(document).ready(function () {
    dateweek()
    var lastweek= new Array()
    
    
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
                 //  console.log(lastweek[i])
               }
            } // fin del success
            
        }); // fin de ajax  
    }
    $("#filtro").click(function(){
        var seleccion=$("#depo").val(), datestart= $("#startDate").val(), dateend=$("#endDAte").val()
        var parametros="dep="+seleccion+"&start="+datestart+"&end="+dateend;
        if(datestart==""||dateend==""){alert("Faltan datos de entrada")}
        else{
            $.ajax({
                url:"templates/graficasSession.php",
                type:"POST",
                data:parametros,
                success:function(respuesta){
                  console.log(respuesta)
                } // fin del success
                
            }); // fin de ajax  
        }
       
    });
});