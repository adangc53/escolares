<?php 
include_once("../src/utilerias/database_utilerias.php");
    $folio=$_POST['folio'];
    $nc=$_POST['nocontrol'];
    $date =$_POST['date'];
    if($folio==null||$nc==null){
        echo 400;
       
    }
    else{
        $res = InsertConstancia($folio,$nc,$date);
        echo 200;
    }

return;
     

?> 