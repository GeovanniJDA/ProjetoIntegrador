<?php
include('conexao.php');

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];


$sql= "INSERT INTO agente_publico VALUES ('$cpf','$nome','$cargo','$email','$telefone','$senha')";


if(mysqli_query($conexao,$sql)){
    header('Location:pagina_endereco_agente.html');
}else{  
    header('Location:index.html');
}

mysqli_close($conexao);

?>

