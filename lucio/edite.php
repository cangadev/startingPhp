<?php
 $conexao =  mysqli_connect("localhost","root","","santaAna");

 if(!$conexao){
    echo "SEM conexao";
 }
 $id="";
 $nome="";
 $telefone = "";
 $idade="";


if($_SERVER['REQUEST_METHOD']=='GET') {

    $id = $_GET["id"];

    $sql = "SELECT * FROM aluno WHERE id='$id'";
    $resultado = $conexao->query($sql);
    $linha=$resultado->fetch_assoc();

    $nome= $linha["nome"];
    $telefone = $linha["telefone"];
    $idade= $linha["idade"];
   
}else{
    $id=$_POST["id"];
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $idade = $_POST["idade"];

    do{
        $sql = "UPDATE aluno SET nome= '$nome', telefone=$telefone,idade=$idade WHERE id=$id";

        $result = $conexao->query($sql);

        if(!$result){
            echo "ERROR: ".$conexao->error;
            break;
        }
        echo "ALteração feita";

        header("location: ./index.php");
        exit;
        
        
    }while(true);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input type="text" required name="nome" value="<?php echo $nome?>">
        <input type="text" required name="telefone" value="<?php echo $telefone?>">
        <input type="text" required name="idade" value="<?php echo $idade?>">
        <button type="submit">EDITAR</button>
    </form>
  
</body>
</html>



