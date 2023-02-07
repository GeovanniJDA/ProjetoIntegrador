<?php
include('conexao.php');

$cpf = $_POST['cpf'];

$sql = "DELETE * FROM denuncia WHERE cpf = $cpf";

if(mysqli_query($conexao,$sql)){
    echo "Removido com Sucesso!";
}

mysqli_close($conexao);

?>