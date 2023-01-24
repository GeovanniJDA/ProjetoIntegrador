<?php

$cpf = $_POST['cpf'];
$novo_nome = $_POST['novo_nome'];
$novo_registro = $_POST['novo_registro'];
$nova_data_nascimento = $_POST['nova_data_de_nascimento'];
$novo_endereco1 = $_POST['novo_endereco'];

$host = "localhost";
$database = "projeto";
$username = "root";
$password = "";

$conexao = mysqli_connect($host, $username, $password, $database);
if(!$conexao){
    die("Conexão Falhou!");
}

$sql = "UPDATE usuario SET nome = '$novo_nome' , registro = $novo_registro , data_nascimento = '$nova_data_nascimento' , endereco = '$novo_endereco1' WHERE cpf = $cpf";

if(mysqli_query($conexao,$sql)){
    echo "Atualizado!";
}
mysqli_close($conexao);
header('Location:index.html');
?>