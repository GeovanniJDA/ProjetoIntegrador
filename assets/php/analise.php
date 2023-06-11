<?php
include('conexao.php');

session_start();

$protocolo = $_POST['protocolo'];
$cpf_A = $_SESSION['cpf'];
$despacho = $_POST['parecer'];

$sql= "INSERT INTO analise VALUES ('$despacho','Finalizado','$cpf_A','$protocolo')";

if(mysqli_query($conexao,$sql)){
    header('Location:index_agente.php');
}

mysqli_close($conexao);

?>

