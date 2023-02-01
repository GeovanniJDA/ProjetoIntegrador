<?php
include('conexao.php');

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];


$sql= "INSERT INTO agente_publico VALUES ('$cpf','$nome','$cargo','$email','$telefone')";
$sql= "INSERT INTO endereco_agente_publico VALUES ('$rua','$numero','$bairro','$cep','$estado','$cidade')";

if(mysqli_query($conexao,$sql)){
    header('Location:pagina_secundaria.html');
}else{

    echo  "<script>alert('Ops! Algo deu errado');</script>";
    header('Location:index.html');
}

mysqli_close($conexao);


?>

