<html>

<body>

<h1> Dados Cadastrados </h1>

<?php
include('conexao.php');
$cpf = ['1234'];
#Estabelecer a Conexão com Banco de Dados
$sql = "select * from agente_publico where cpf = '$cpf' ";

#Resultado armazena os dados que estão na tebala de BD
$resultado = mysqli_query($conexao,$sql);
#Serve para saber o numero de linhas que existem no retorno da informação
$numero_de_linhas = mysqli_num_rows($resultado);

for ($i = 0;$i < $numero_de_linhas;$i++){
     $linha = mysqli_fetch_row($resultado);

     echo "linha[$i]: CPF:  ".$linha[0]." - Nome:   ".$linha[1]." - Cargo:  ".$linha[2]." - Email:  ".$linha[3]." - Telefone:  ".$linha[4]." - Senha:   ".$linha[5]."<br/>";
}

#Estabelecer a Conexão com Banco de Dados
$sql = "select * from endereco_agente_publico where cpf = '$cpf' ";

#Resultado armazena os dados que estão na tebala de BD
$resultado = mysqli_query($conexao,$sql);
#Serve para saber o numero de linhas que existem no retorno da informação
$numero_de_linhas = mysqli_num_rows($resultado);

for ($i = 0;$i < $numero_de_linhas;$i++){
     $linha = mysqli_fetch_row($resultado);

     echo "linha[$i]: Rua:   ".$linha[1]." - Numero:  ".$linha[2]." - Bairro:  ".$linha[3]." - CEP:   ".$linha[4]." - Estado:  ".$linha[4]." - Cidade:  ".$linha[5]."<br/>";

}

mysqli_close($conexao);

?>
<a href = "index.html"> Voltar para a Pagina Inicial </a>

</body>

</html>