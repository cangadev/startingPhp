<?php
//VARIAVEIS
 $info= "Ola Mundo";
 $nome= "Lucio";
 $sobreNome = "José";

/* CONCATENAR VALORES */
 //$nomeCompleto = $nome." ".$sobreNome;
 echo $nome." ".$sobreNome;
 echo "<br>";

 /* TIPOS DE VARIAVEIS */
$ano = '2001';
echo "<br>";
$frutas = array(2,"Bana", "Manga", "Uva");
echo $frutas[1];
echo "<br>";

/*var_dump() serve para mostrar o tipo e o valor de um variavel*/
var_dump($ano);
 var_dump($info);
 echo "<br>";
 echo $info;
 echo "<br>";
 
$info = " ";
var_dump($info);
echo "<br>";

/*unset serve para remover variaveis da memoria do computador */
unset($info);

if(!isset($info)){
    echo "Não exite";
};

?>


