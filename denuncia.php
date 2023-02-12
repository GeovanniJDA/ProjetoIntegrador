<?php
include('conexao.php');

session_start();

$denuncia = $_POST['denuncia'];
$cpf = $_SESSION['cpf'];
$gera = rand(1,100000);
$gera2 = rand(1,100000)+$gera;
$protocolo = $gera2;

$sql= "INSERT INTO denuncia VALUES ('$protocolo','$denuncia','$cpf')";

$denuncias = $conexao->query($sql) or die ($conexao);

?>