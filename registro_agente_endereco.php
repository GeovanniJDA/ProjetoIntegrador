<?php
include('conexao.php');

$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];

$sql= "INSERT INTO endereco_agente_publico VALUES ('$rua','$numero','$bairro','$cep')";

if(mysqli_query($conexao,$sql)){
    header('Location:pagina_agente.html');
}else{

    echo  "<script>alert('Ops! Algo deu errado');</script>";
    header('Location:index.html');
}

mysqli_close($conexao);


?>

