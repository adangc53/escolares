<?php 
include_once("../src/utilerias/database_utilerias.php");
$res = ConsltUsers();
if($res == false)die("failed". $res->ErrorMsg().'<br>');
print "<table class='table  align=center table-responsive-sm '>   <thead class='thead-dark'> <tr><th>nombre</th><th>contraseña</th><th></th></tr>  </thead>";

while (!$res -> EOF ){
    $resUser=$res->fields["user"];
   $resPass=$res->fields["pass"];
    
   
   print "<tr class='hover'><td class='text-center'>$resUser</td><td>$resPass</td>
    <td><a id='update' href='#' class='selecciona ' data-user='$resUser' data-pass='$resPass' data-toggle='modal' data-target='#exampleModal'><i class=' fas fa-pen' aria-hidden='true'></i></a>
    <a id='del' href='#'  class='selecciona' data-user='$resUser'> <i class='fas fa-trash mx-3' aria-hidden='true'></i></a> </td></tr>";
    
     $res ->MoveNext();
}

print "</table>";

//print " <script  type='text/javascript' src='js/user.js'></script>";
?> 