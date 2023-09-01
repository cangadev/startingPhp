<?php

//STRINGs

$nome = "luCIO jose";

echo "OLÁ $nome";//Mostra a string e o valor dentro da variavel
echo "<br>";
echo 'OLÁ $nome';//Mostra todo conteudo da string sem o valor dentro da variavel
echo "<br>";

$nome = strtoupper($nome);//Transformar todo valor em maiusculas
echo $nome;
echo "<br>";

$nome = strtolower($nome);//Transformar todo valor em menusculas
echo $nome;
echo "<br>";

$nome = ucwords($nome);//Transformar as iniciais de todas palavras em maiusculas
echo $nome;
echo "<br>";

$nome = ucfirst($nome);//Transformar a inicial da primeira palavra em maiusculas
echo $nome;
echo "<br>";

//Replace
$nome = str_replace("ucio", "ucas", $nome);//Substitui um valor por um novo
echo $nome;
?>


