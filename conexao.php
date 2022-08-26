<?php
$host = "localhost";
$database = "projeto";
$username = "root";
$password = "";

$conexao = mysqli_connect($host,$username,$password,$database);

if(!$conexao){
    die("Conexão Falhou!");
}

?>