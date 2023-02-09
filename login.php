<?php  
 include('conexao.php'); 
 #Obter as informações do form e redicionar 
 #para a página principal da aplicação 
 #echo "funcionou"; 
  
 $cpf = $_POST['cpf']; 
 $nome = $_POST['senha']; 
  
 if(isset($_POST['cpf']) || isset($_POST['senha'])){ 
  
     $cpf = $conexao->real_escape_string($_POST['cpf']); 
     $senha = $conexao->real_escape_string($_POST['senha']); 
  
     $query = "select * from denunciante where cpf = '$cpf' and senha = '$senha'"; 
     $sql_query = $conexao-> query($query) or die ("falha na execução do código SQL: ".$conexao->error); 
  
     $quantidade = $sql_query->num_rows; 
  
     if($quantidade == 1){ 
  
         $usuario = $sql_query->fetch_assoc(); 
  
         if(!isset($_SESSION)){ 
             session_start(); 
         } 
         $_SESSION['user'] = $usuario['cpf']; 
         $_SESSION['user'] = $usuario['senha']; 
  
         header('Location:index_denunciante.php'); 
     }else { 
  
         header('Location:index.html'); 
     } 
      
 } 
  
 elseif(isset($_POST['cpf']) || isset($_POST['senha'])){ 
  
     $cpf = $conexao->real_escape_string($_POST['cpf']); 
     $senha = $conexao->real_escape_string($_POST['senha']); 
  
     $query = "select * from agente_publico where cpf = '$cpf' and senha = '$senha'"; 
     $sql_query = $conexao-> query($query) or die ("falha na execução do código SQL: ".$conexao->error); 
  
     $quantidade = $sql_query->num_rows; 
  
     if($quantidade == 1){ 
  
         $usuario = $sql_query->fetch_assoc(); 
  
         if(!isset($_SESSION)){ 
             session_start(); 
         } 
         $_SESSION['user'] = $usuario['cpf']; 
         $_SESSION['user'] = $usuario['senha']; 
  
         header('Location:index_agente.php'); 
     }else { 
  
         header('Location:index.html'); 
     } 
 }else { 
     header('Location:index.html'); 
 } 
  
  
 mysqli_close($conexao); 
  
 ?>