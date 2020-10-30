<?php 
include_once("../src/utilerias/database_utilerias.php");
    $user=$_POST['user'];
    $pass=$_POST['pass'];
$res = consultaUsers($user);
if (!$res->EOF){
     
    $resUser=$res->fields["user"];
   $resPass=$res->fields["pass"];
   
   if ( password_verify($pass, $resPass)){
     if  (!isset($_SESSION))
     session_start();
     $_SESSION["conect"]="53345fe&%/&%6756";
     $_SESSION["usuario"]="$resUser";
          echo 1;
     }
     else{
          echo 0;
     }
}
else{
     echo -100;
}
     

?> 