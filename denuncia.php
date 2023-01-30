<?php
include('conexao.php');

$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];

$nome_CE = $_POST['nome_CE'];
$telefone = $_POST['telefone'];

$sql= "INSERT INTO endereco VALUES ('$rua','$numero','$bairro','$cep')";
$sql= "INSERT INTO endereco VALUES ('$nome_CE','$telefone')";

if(mysqli_query($conexao,$sql)){
    header('Location:pagina_principal.php');
}

mysqli_close($conexao);


?>