<?php 
include_once("../src/utilerias/database_utilerias.php");
    $folio=$_POST['folio'];
    
    if($folio==null){
        echo 400;
       
    }
    else{
        $res = DelConstancia($folio);
        echo 200;
    }

return;
     

?> 