<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./cadastrar.php" method="post">
        <input type="text" required name="nome" placeholder="Nome">
        <input type="text" required name="telefone" placeholder="telefone">
        <input type="text" required name="idade" placeholder="idade">
        <button type="submit">Cadastrar</button>
    </form>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>Telefone</th>
            <th>IDADE</th>
            <th>OPCAO</th>
        </tr>

<?php
$conexao=mysqli_connect("localhost","root","","santaAna");

if($conexao->connect_error){
    die("EROOO".$conexao->connect_error);
}

$sql = "SELECT * FROM aluno";
$result=mysqli_query($conexao, $sql);

while($linha = $result->fetch_assoc()){
    echo"
    <tr>
        <td>$linha[id]</td>
        <td>$linha[nome]</td>
        <td>$linha[telefone]</td>
        <td>$linha[idade]</td>
        <td>
        <a href='./delete.php?id=$linha[id]'><button>Eliminar</button></a>
            <a href='./edite.php?id=$linha[id]'><button>Editar</button></a>
        </td>
    </tr>
    ";
}
?>
    </table>
</body>
</html>