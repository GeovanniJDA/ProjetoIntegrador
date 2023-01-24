<?php

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$email = $_POST['email'];
$senha = $_POST['senha']

$host = "localhost";
$database = "projeto";
$username = "root";
$password = "";

$conexao = mysqli_connect($host,$username,$password,$database);
if(!$conexao){
    die("Conexão Falhou");
}

$sql= "INSERT INTO usuario VALUES ($cpf,'$nome','$data_nascimento','$email','$senha')";

if(mysqli_query($conexao,$sql)){
    echo "Inserido !";
}
mysqli_close($conexao);

header('Location: index.html');


?>