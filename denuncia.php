<?php
include('conexao.php');

$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];

$nome_CE = $_POST['nome_CE'];
$telefone = $_POST['telefone'];

$protocolo = $_POST['protocolo'];
$corpo = $_POST['corpo'];
$data = $_POST['data'];
$hora = $_POST['hora'];

$sql= "INSERT INTO endereco VALUES ('$rua','$numero','$bairro','$cep','$estado','$cidade')";
$sql= "INSERT INTO endereco VALUES ('$nome_CE','$telefone')";
$sql= "INSERT INTO endereco VALUES ('$protocolo','$corpo','$data','$hora')";


if(mysqli_query($conexao,$sql)){
    header('Location:pagina_principal.php');
}

mysqli_close($conexao);


?>