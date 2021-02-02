<?php 
include_once("../src/utilerias/database_utilerias.php");
    if  (!isset($_SESSION)){
     session_start();
     $_SESSION["arreglo"]="223205";
     $seleccion=$_POST["dep"];
     $inicio=$_POST["start"];
     $end=$_POST["end"];
     if($inicio=="undefined"){
         echo 400;
     }
     $res=consultagrafica($seleccion,$inicio,$end);
     $total=$res->fields["total"];
     echo $total;
    }
?> 