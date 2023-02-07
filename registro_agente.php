<?php
include('conexao.php');

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];


$sql= "INSERT INTO agente_publico VALUES ('$cpf','$nome','$cargo','$email','$telefone','$senha')";

$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];


$sql= "INSERT INTO agente_publico VALUES ('$cpf','$nome','$cargo','$email','$telefone')";


if(mysqli_query($conexao,$sql)){
    header('Location:pagina_endereco_agente.html');
}else{  
    header('Location:index.html');
}

mysqli_close($conexao);

?>

