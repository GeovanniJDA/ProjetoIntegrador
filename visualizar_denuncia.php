<html>

<body>

<h1> Dados Cadastrados </h1>

<?php
include('conexao.php');
$cpf = $_POST['cpf'];
#Estabelecer a Conexão com Banco de Dados
$sql = "select * from denuncia where cpf = '$cpf' ";

#Resultado armazena os dados que estão na tebala de BD
$resultado = mysqli_query($conexao,$sql);
#Serve para saber o numero de linhas que existem no retorno da informação
$numero_de_linhas = mysqli_num_rows($resultado);

for ($i = 0;$i < $numero_de_linhas;$i++){
     $linha = mysqli_fetch_row($resultado);

     echo "linha[$i]: Protocolo:  ".$linha[0]." - Corpo:   ".$linha[1]." - Data de Nascimento:  ".$linha[2]." - Hora:  ".$linha[3]." - CPF:   ".$linha[4]."<br/>";

}

mysqli_close($conexao);

?>
<a href = "index.html"> Voltar para a Pagina Inicial </a>

</body>

</html>