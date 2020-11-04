<?php 
include_once("../src/utilerias/database_utilerias.php");
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    if($user==null||$pass==null){
        echo 400;
       
    }
    else{
        $res = UpdateUser($user,$pass);
        echo 200;
    }

return;
     

?> 