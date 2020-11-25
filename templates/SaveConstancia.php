<?php 
include_once("../src/utilerias/database_utilerias.php");
    $folio=$_POST['folio'];
    $nc=$_POST['nocontrol'];
    $date =$_Date['date'];
    if($folio==null||$nc==null){
        echo 400;
       
    }
    else{
       // $res = agregarusr($user,$pass);
        echo 200;
    }

return;
     

?> 