<?php 
include_once("../src/utilerias/database_utilerias.php");
$res = ConsltUsers();
if($res == false)die("failed". $res->ErrorMsg().'<br>');
print "<table class='table  align=center table-responsive-sm table-striped'>   <thead class='thead-dark'> <tr><th>nombre</th><th>contraseña</th><th></th></tr>  </thead>";

while (!$res -> EOF ){
    $resUser=$res->fields["user"];
   $resPass=$res->fields["pass"];
    
   
   print "<tr><td class='text-center'>$resUser</td><td>$resPass</td>
    <td><a href='#' class='selecciona ' data-user='$resUser' data-pass='$resPass'><i class=' fas fa-pen' aria-hidden='true'></i></a>
    <a href='#' id='delete' data-user='$resUser'> <i class='fas fa-trash mx-3' aria-hidden='true'></i></a> </td></tr>";
    
     $res ->MoveNext();
}
print "</table>";
?> 