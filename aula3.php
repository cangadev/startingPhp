<?php

//ESCOPO DE VARIAVEIS

/**
 * Por padrão as variaveis declarada fora de uma função
 * (variavel global), não podem ser usadas dentro da função
 */

 $nome = "Lúcio José";

 function Nomear(){
    echo $nome;
    /*Não vai exibir o nome porque a variavel "nome" não foi declarada
      dentro dessa função.
    */
 }
 Nomear();

 //

 function exibirNome(){
    global $nome;
    echo $nome;
    /*Vai exibir o nome porque chamamos a variavel "nome" do escopo global
    */
 }
 exibirNome();

?>


