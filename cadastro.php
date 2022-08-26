<?php
include('conexao.php');

$endereco_1 = $_POST['endereco_1'];
$endereco_2 = $_POST['endereco_2'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$f_proximo = $_POST['f_proximo'];

$sql= "INSERT INTO endereco VALUES ('$endereco_1','$endereco_2','$complemento','$cidade','$estado','$f_proximo')";

if(mysqli_query($conexao,$sql)){
    header('Location:index.html');
}

mysqli_close($conexao);




?>