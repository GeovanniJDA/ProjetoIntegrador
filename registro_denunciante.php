<?php
include('conexao.php');

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$data_de_nascimento = $_POST['data_de_nascimento'];
$sexo = $_POST['sexo'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];

$nome_CE = $_POST['nome_CE'];
$telefone = $_POST['telefone'];

$sql= "INSERT INTO usuario VALUES ('$cpf',$nome,'$data_de_nascimento','$sexo','$email','$telefone')";
$sql= "INSERT INTO endereco VALUES ('$rua','$numero','$bairro','$cep')";
$sql= "INSERT INTO endereco VALUES ('$nome_CE','$telefone')";

if(mysqli_query($conexao,$sql)){
    header('Location:visualizar.php');
}

mysqli_close($conexao);




?>