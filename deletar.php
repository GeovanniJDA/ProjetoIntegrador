<?php
include('conexao.php');

$endereco_1 = $_POST['endereco_1'];
$denuncia = $_POST['denuncia'];

$sql = "DELETE FROM endereco WHERE endereco_1 = $endereco_1";
$sql = "DELETE FROM denuncia WHERE denuncia = $denuncia";

if(mysqli_query($conexao,$sql)){
    echo "Removido com Sucesso!";
}

mysqli_close($conexao);
header('Location:pagina_principal.html');

?>