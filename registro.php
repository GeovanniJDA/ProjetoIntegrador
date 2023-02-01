<?php
include('conexao.php');

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$data_de_nascimento = $_POST['data_de_nascimento'];
$sexo = $_POST['sexo'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$sql= "INSERT INTO denunciante VALUES ('$cpf',$nome,'$data_de_nascimento','$sexo','$email','$telefone')";

if(mysqli_query($conexao,$sql)){
    header('Location:visualizar.php');
}

mysqli_close($conexao);

?>