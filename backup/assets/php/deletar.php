<?php
$cpf = $_POST['cpf'];

$host = "localhost";
$database = "projeto";
$username = "root";
$password = "";

$conexao = mysqli_connect($host,$username,$password,$database);
if (!$conexao){
    die("Conexão Falhou");
}

$sql = "DELETE FROM usuario WHERE cpf = $cpf";

if(mysqli_query($conexao,$sql)){
    echo "Removido com Sucesso!";
}
mysqli_close($conexao);
header('Location:index.html');
?>