<?php
 
session_start(); //Serve para inicializar o uso da sessão

//session_unset();//Serve para eliminar todas as variáveis de sessão
//session_unset($_SESSION["nome"]);//Serve para eliminar sessão expecífica

echo $_SESSION["nome"];
?>