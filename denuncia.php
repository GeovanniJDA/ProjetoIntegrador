<?php
include('conexao.php');

session_start();

$corpo = $_POST['corpo'];
$cpf = $_SESSION['cpf'];
$gera = rand(1,100000);
$gera2 = rand(1,100000)+$gera;
$protocolo = $gera2;

$sql= "INSERT INTO denuncia VALUES ('$protocolo','$corpo','$cpf')";


if(mysqli_query($conexao,$sql)){
    echo "Sucesso!";
}

mysqli_close($conexao);


?>