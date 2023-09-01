<?php

//OPERADORES

//Atribuição =
$nome = "Lúcio José";
echo $nome;

echo "<br>";

//Concatenação/União
$sobreNome = " Canga";
echo $nome.$sobreNome." is my name";

echo "<br>";

//Atribuição e união
$Frutas = "Banana";
$Frutas .=" Verde";
echo $Frutas;

echo "<br>";

//Somar e Atribuir +=
$valorTotal = 10;
$valorTotal += 3;
echo "Valor total += ".$valorTotal;

echo "<br>";

//Subtrair e atribuir -=
$valorTotal = 10;
$valorTotal -= 3;
echo "Valor total -= ".$valorTotal;

echo "<br>";

//Operadores aritimeticos "+ - * /"

$firstNumber = 10;
$secondNumber = 2;

//Soma
echo "Soma de ".$firstNumber." + ".$secondNumber." = ". $firstNumber + $secondNumber;
echo "<br>";
//Subtração
echo "Subtração de ".$firstNumber." - ".$secondNumber." = ". $firstNumber - $secondNumber;
echo "<br>";
//Multiplicação
echo "Multiplicação de ".$firstNumber." X ".$secondNumber." = ".  $firstNumber * $secondNumber;
echo "<br>";
//divisão
echo "Divisão de ".$firstNumber." / ".$secondNumber." = ". $firstNumber / $secondNumber;
echo "<br>";
//Módulo
echo "Módulo ou resto da divisão = ".$firstNumber % $secondNumber;
echo "<br>";
//Expoente
echo "10 elevado a 2/ 10 ao quadrado = ".$firstNumber ** $secondNumber;
echo "<br>";

//Operadores lógicos <> = ==

//Maior e menor
echo "10 é maior que 2? Resposta: ";
echo var_dump($firstNumber > $secondNumber);
echo "<br>";

echo "2 é maior que 10? Resposta: ";
echo var_dump($firstNumber < $secondNumber); 
echo "<br>";

echo "10 é igual a 2? Resposta: ";
echo var_dump($firstNumber == $secondNumber);
echo "<br>"; 

echo "10 é igual e com o mesmo tipo a 2? Resposta: ";
echo var_dump($firstNumber === $secondNumber); 
echo "<br>"; 


echo "10 maior, igual, ou menor que 2? Resposta: ";
/**
 * se for maior retorna = 1
 * se for igual retorna = 0
 * se for menor retorna = -1
 */
var_dump($firstNumber <=> $secondNumber); 
echo "<br>"; 

//
$numberA= NULL; $numberB=NULL; $numberC=12;
//Primeiro valor é nulo? retorna o segundo. O segundo é nulo? retorna o terceiro.
var_dump($numberA ?? $numberB ?? $numberC);
echo "<br>"; 


$numberA= 2; $numberB=2; $numberC=4;
//Incremento ++
echo "Number = ".$numberA++; echo "<br>";/**Retorna 2 porque imprime o valor antes de incrementa */
echo "Number = ".$numberA; //Retorna 3 porque já incrementou na linha anterior
echo "<br>";

//Pré-incremento
echo "Number = ".++$numberC; echo "<br>";/**Retorna 5 porque incrementa o valor depois imprime */

//O Decremento é o inverso do incremento "--"

//Operadores && e ||
$A= 2; $B=2; $C=4;
var_dump($A == $B && $A<$C);
echo "<br>";
var_dump($A > $B || $A<$C)

/**
 * 
 */
?>


