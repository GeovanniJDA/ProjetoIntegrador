<?php
include('conexao.php');

$protocolo = $_POST['protocolo'];
$corpo = $_POST['corpo'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$cpf = $_POST['cpf'];

$sql= "INSERT INTO denuncia VALUES ('$protocolo','$corpo','$data','$hora','$cpf')";


if(mysqli_query($conexao,$sql)){
    echo "Deletado!";
}

mysqli_close($conexao);


?>