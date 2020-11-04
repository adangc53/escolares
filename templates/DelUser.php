<?php 
include_once("../src/utilerias/database_utilerias.php");
    $user=$_POST['user'];
    
    if($user==null){
        echo 400;
       
    }
    else{
        $res = Deluser($user);
        echo 200;
    }

return;
     

?> 