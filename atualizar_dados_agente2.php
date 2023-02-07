<?php
include('conexao.php');

$cpf = $_POST['cpf'];
$nova_rua = $_POST['rua'];
$novo_numero = $_POST['numero'];
$novo_bairro = $_POST['bairro'];
$novo_cep = $_POST['cep'];
$novo_estado = $_POST['estado'];
$nova_cidade = $_POST['cidade'];

$sql = "UPDATE endereco_agente_publico SET rua = '$nova_rua' , numero = '$novo_numero' , bairro = '$novo_bairro' , cep = '$novo_cep' , estado = '$novo_estado' , cidade = '$nova_cidade' WHERE cpf = $cpf";

if(mysqli_query($conexao,$sql)){
    echo "Atualizado!";
}
mysqli_close($conexao);
?>