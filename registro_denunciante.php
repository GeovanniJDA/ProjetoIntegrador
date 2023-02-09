<?php
include('conexao.php');

session_start();

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$data_de_nascimento = $_POST['data_de_nascimento'];
$sexo = $_POST['sexo'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];


$sql= "INSERT INTO denunciante VALUES ('$cpf','$nome','$data_de_nascimento','$sexo','$email','$telefone','$senha')";


if(mysqli_query($conexao,$sql)){
    $_SESSION['cpf'] = $_POST['cpf'];
    header('Location:pagina_endereco_denunciante.php');
}else{
    header('Location:index.html');
}

mysqli_close($conexao);


?>

