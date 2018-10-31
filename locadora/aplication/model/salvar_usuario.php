<?php   

$idPerfilUsuario = "2";
$cpf = "00655294309";
$nome = "Ton Marcelino";
$email = "ton@ton.com";
$senha = "monalisa";
$endereco = "rua de casa";
$data = "2018-10-30 00:00:00";
$status = "1";
/*
$idPerfilUsuario = $_POST["idPerfilUsuario"];
$cpf = $_POST["cpf"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$endereco = $_POST["endereco"];
$dt_cadastro = $_POST["dt_cadastro"];
$status = $_POST["status"];*/



//acima recebe dados do formulario de cadastro
include 'conexao.php';
  
$conn = getConexao();

$sql = "INSERT INTO `tbl_usuario` (`idUsuario`, `idPerfilUsuario`, `cpf`, `nome`, `email`, `senha`, `endereco`, `dt_cadastro`, `status`) 
        VALUES (NULL, 
        '$idPerfilUsuario', 
        '$cpf', 
        '$nome', 
        '$email', 
        '$senha', 
        '$endereco', 
        '$data', '$status')";

$stmt = $conn->prepare($sql);
$stmt->execute();
      
    
  ?>