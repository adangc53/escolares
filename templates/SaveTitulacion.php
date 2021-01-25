<?php 
include_once("../src/utilerias/database_utilerias.php");
    $folio=$_POST['folio'];
    $nc=$_POST['nocontrol'];
    $date =$_POST['date'];
    $ops=$_POST['ops'];
   
    
    if($folio==null||$nc==null){
        echo 400; 
    }
    else{
        if($ops=="inserta"){ InsertTitulacion($folio,$nc,$date);}
        if($ops=="actualiza"){UpdateConstancias($folio,$nc,$date); }
            
        echo 200;
    }

return;
     

?> 