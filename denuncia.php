<?php
include('conexao.php');

$protocolo = $_POST['protocolo'];
$denuncia = $_POST['denuncia'];
$cpf = $_POST['cpf'];

$sql= "INSERT INTO denuncia VALUES ('$protocolo','$denuncia','$cpf')";


if(mysqli_query($conexao,$sql)){
    echo "Deletado!";
}

mysqli_close($conexao);


?>