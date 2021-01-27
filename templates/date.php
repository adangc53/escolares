<?php
$f=date("Y-m-d");
$arreglo=array();
for( $i = -1; $i < 6; $i++ ){
//echo date("Y-m-d", strtotime("$f   -$i day"))."<br>";
array_push($arreglo,date("Y-m-d", strtotime("$f   -$i day")));
}
//echo $f;
$nuevo="";
$n=count($arreglo);
//print($n);
for($i=0; $i<$n;$i++){
    if($i<$n-1)
    $nuevo=$nuevo.'"'.$arreglo[$i].'"'.",";
    else
    $nuevo=$nuevo.'"'.$arreglo[$i].'"';
}
$hola='['.$nuevo.']';

print(json_encode( $arreglo));
?>