<?php
$frutas = array(
    "BANANA",
    "MAÇÃ",
    "MORANGO"
);
print_r($frutas);
echo "<br><br>";

$marcas[0][0]= "Nike1";
$marcas[0][1]= "Nike2";
$marcas[0][2]= "Nike3";

$marcas[1][0]= "Nike4";
$marcas[1][1]= "Nik5";
$marcas[1][2]= "Nike6";

print_r($marcas[1][0]);
echo "<br>";
print_r (end($marcas[0]));
echo "<br><br>";


$example = array();

array_push($example, array(
    "nome"=>"Canga",
    "sobName" => "Dev"
));
array_push($example, array(
    "nome"=>"Lucio",
    "sobName" => "Jose"
));
print_r($example);
echo "<br>";
print_r($example[0]["nome"]);
?>


