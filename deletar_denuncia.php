<?php
include('conexao.php');

session_start();

$cpf = $_SESSION['cpf'];


$usuario = "SELECT * FROM denuncia where cpf = '$cpf'";
$consulta = $conexao->query($usuario) or die ($mysqli->error);

while ($dados = $consulta->fetch_array())
$protocolo = $dados["protocolo"];

$sql = "DELETE FROM `denuncia` WHERE protocolo = $protocolo";

if(mysqli_query($conexao,$sql)){
    echo "Removido com Sucesso!";
    header('Location:index_denunciante.php');
}

mysqli_close($conexao);

?>