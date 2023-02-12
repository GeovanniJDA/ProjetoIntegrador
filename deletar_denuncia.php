<?php
include('conexao.php');

session_start();

$protocolo = $_POST['protocolo'];

$sql = "DELETE FROM `denuncia` WHERE protocolo = $protocolo";

if(mysqli_query($conexao,$sql)){
    header("Location:index_denunciante.php");
}

mysqli_close($conexao);

?>