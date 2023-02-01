<?php
include('conexao.php');

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];

<<<<<<< HEAD

$sql= "INSERT INTO agente_publico VALUES ('$cpf','$nome','$cargo','$email','$telefone','$senha')";
=======
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];


$sql= "INSERT INTO agente_publico VALUES ('$cpf','$nome','$cargo','$email','$telefone')";
$sql= "INSERT INTO endereco_agente_publico VALUES ('$rua','$numero','$bairro','$cep','$estado','$cidade')";
>>>>>>> 78424efd32538118725205cd5f39aeabe2fd16b6

if(mysqli_query($conexao,$sql)){
    header('Location:pagina_agente.html');
}else{  
    echo  "<script>alert('Ops! Algo deu errado');</script>";
    header('Location:index.html');
}

mysqli_close($conexao);

?>

