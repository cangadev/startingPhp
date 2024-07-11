<?php

$conexao = mysqli_connect("localhost","root","","santaAna");


if(!$conexao){
    echo "SEM CONEXAO";
}else{
    echo "CONECTADO";

    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $idade = $_POST["idade"];

    $sql = "INSERT INTO santaAna.aluno(nome,telefone,idade) VALUES('$nome','$telefone','$idade')";
    $resultado = mysqli_query($conexao, $sql);
    echo "Cadastro feito";

    header("location: /lucio/index.php");
}

?>















