<?php

//VARIAVEIS PRÉ-DEFINIDAS / ARAY SUPER GLOBAIS

//get - serve para pegar/buscar dados
$nome = $_GET["a"];
var_dump($nome);

echo "<br>";

//converter o valor em inteiro
$nome = (int)$_GET["a"];
var_dump($nome);

//Pegar informações usando SERVER
$ip = $_SERVER["REMOTE_ADDR"];//pega o endereço ip
echo $ip;

echo "<br>";

$nomeAquivo = $_SERVER["SCRIPT_NAME"];//pega o endereço do arquivo que contem o script/codigo
echo $nomeAquivo;



?>


