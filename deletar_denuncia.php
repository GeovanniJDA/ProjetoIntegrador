<?php
include('conexao.php');

session_start();

$cpf = $_SESSION['cpf'];

$sql = "DELETE * FROM denuncia WHERE cpf = $cpf";

if(mysqli_query($conexao,$sql)){
    echo "Removido com Sucesso!";
}

mysqli_close($conexao);

?>