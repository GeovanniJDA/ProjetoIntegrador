<?php
include('conexao.php');

$cpf = $_POST['cpf'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];

$sql= "INSERT INTO endereco_agente_publico VALUES ('$cpf','$rua','$numero','$bairro','$cep','$estado','$cidade')";

if(mysqli_query($conexao,$sql)){
    header('Location:index_agente.html');
}else{

    header('Location:pagina_endereco_agente.html');
}

mysqli_close($conexao);


?>

