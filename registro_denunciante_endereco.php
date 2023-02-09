<?php
include('conexao.php');

session_start();

$cpf = $_SESSION['cpf'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];

$sql= "INSERT INTO endereco VALUES ('$cpf','$rua','$numero','$bairro','$cep','$estado','$cidade')";

if(mysqli_query($conexao,$sql)){
    header('Location:index_denunciante.php');
}else{

    header('Location:pagina_endereco_denunciante.php');
}

mysqli_close($conexao);


?>

