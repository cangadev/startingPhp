<?php

    $conexao = mysqli_connect("localhost","root","","santaAna");

    if(isset($_GET["id"])){
        $id = $_GET["id"];

        $sql= "DELETE FROM aluno WHERE id=$id";
        $conexao->query($sql);

    }

    header("location: /lucio/index.php")
?>