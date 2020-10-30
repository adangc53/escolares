<?php 
include_once("../src/utilerias/database_utilerias.php");
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    if($user==""||$pass==""){
        $res=0;
    }
    else{
        $res = agregarusr($user,$pass);
        $res= 1;
    }

return $res;
     

?> 