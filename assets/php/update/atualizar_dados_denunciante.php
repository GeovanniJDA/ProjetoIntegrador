<?php
include('conexao.php');

session_start();

$cpf = $_SESSION['cpf'];
$novo_nome = $_POST['name'];
$nova_data_de_nascimento = $_POST['data_de_nascimento'];
$novo_sexo = $_POST['sexo'];
$novo_email = $_POST['email'];
$novo_telefone = $_POST['telefone'];
$nova_senha = $_POST['senha'];

$sql = "UPDATE denunciante SET nome = '$novo_nome' , data_de_nascimento = '$nova_data_de_nascimento' , sexo = '$novo_sexo' , email = '$novo_email' , telefone = '$novo_telefone' , senha = '$nova_senha' WHERE cpf = $cpf";

if(mysqli_query($conexao,$sql)){
    echo "Atualizado!";
}
mysqli_close($conexao);
?>