<?php
include('conexao.php');

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql= "INSERT INTO usuario VALUES ('$nome',$cpf,'$data_nascimento','$email','$senha')";

if(mysqli_query($conexao,$sql)){
    header('Location:visualizar.php');
}

mysqli_close($conexao);




?>