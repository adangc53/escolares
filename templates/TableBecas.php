<?php 
include_once("../src/utilerias/database_utilerias.php");
$res = selectBecas();
if($res == false)die("failed". $res->ErrorMsg().'<br>');
print "<table class='table  align=center table-responsive-sm '>   <thead class='thead-dark'> <tr><th>Folio</th> <th>No. Control</th>  <th>Fecha</th><th></th></tr>  </thead>";
print '<tbody id="myTable">';
while (!$res -> EOF ){
    $resfolio=$res->fields["Folio"];
   $nc=$res->fields["NoControl"];
   $fecha=$res->fields["Date"];
  
   print "<tr class='hover'><td class='text-center'>$resfolio</td><td>$nc</td><td>$fecha</td>
    <td><a id='update' href='#' class='selecciona ' data-folio='$resfolio' data-nc='$nc' data-fecha='$fecha'><i class=' fas fa-pen' aria-hidden='true'></i></a>
    <a id='del' href='#'  class='selecciona' data-folio='$resfolio'> <i class='fas fa-trash mx-3' aria-hidden='true'></i></a> </td></tr>";
    
     $res ->MoveNext();
}
print '</tbody>';
print "</table>";

//print " <script  type='text/javascript' src='js/user.js'></script>";
?> 