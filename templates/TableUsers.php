<?php 
include_once("../src/utilerias/database_utilerias.php");
$res = ConsltUsers();
if($res == false)die("failed". $res->ErrorMsg().'<br>');
print "<table class='table  align=center table-responsive-sm '>   <thead class='thead-dark'> <tr><th>no control</th><th>nombre</th><th>contraseña</th><th></th></tr>  </thead>";

while (!$res -> EOF ){
    $resUser=$res->fields["user"];
   $resPass=$res->fields["pass"];
    
   
   print "<tr><td><a href='#' class='selecciona' data-nc='$resUser' data-nom='$resPass'>click</a></td><td>$resUser</td><td>$resPass</td> <td><i class=' fas fa-pen' aria-hidden='true'></i><i class=' fas fa-trash mx-3' aria-hidden='true'></i></td></tr>";
    
     $res ->MoveNext();
}
print "</table>";
?> 