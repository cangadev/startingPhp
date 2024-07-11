<?php

$pessoas =  array();

array_push($pessoas, array(
    'nome'=>'Lucio',
    'idade'=>22
));

array_push($pessoas, array(
    'nome'=>'Ana',
    'idade'=>25
));


echo json_encode($pessoas); //json_encode: pega um array e tranforma em json
$arr= json_encode($pessoas);
echo"<br>";
$A= json_decode($arr, true); //json_decode: pega um json e tranforma em Array
print_r($A)

?>