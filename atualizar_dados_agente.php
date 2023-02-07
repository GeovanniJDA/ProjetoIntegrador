<?php
include('conexao.php');

$cpf = $_POST['cpf'];
$novo_nome = $_POST['name'];
$nova_cargo = $_POST['cargo'];
$novo_email = $_POST['email'];
$novo_telefone = $_POST['telefone'];
$nova_senha = $_POST['senha'];

$sql = "UPDATE agente_publico SET nome = '$novo_nome' , cargo = '$novo_cargo' , email = '$novo_email' , telefone = '$novo_telefone' , senha = '$nova_senha' WHERE cpf = $cpf";

if(mysqli_query($conexao,$sql)){
    echo "Atualizado!";
}
mysqli_close($conexao);
?>