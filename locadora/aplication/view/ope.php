<?php 
// session_start inicia a sessão
session_start();
// as variáveis email e senha recebem os dados digitados na página anterior
$email = $_POST['email'];
$senha = $_POST['senha'];
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
/*
$con = mysql_connect("localhost", "root", "AGzzcso1$", "db_locadora") or die
 ("Sem conexão com o servidor");
$select = mysql_select_db("server") or die("Sem acesso ao DB");
*/ 

$hostName = "127.0.0.1";
$dataBase = "db_locadora"; //nome do banco de dados
$user = "root"; //usuario que realiza acesso ao banco de dados
$pass = "AGzzcso1$"; //senha do usuario que realiza acesso ao banco de dados

$conn = mysqli_connect($hostName,$user,$pass,$dataBase) or die(mysql_error()); 

mysqli_set_charset( $conn, 'utf8' );

// Validar conexão
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
    echo "Conectado com sucesso.";   

    $result = mysql_query("SELECT * FROM `tbl_usuario` WHERE `email` = '$email' AND `senha`= '$senha'");

if(mysql_num_rows ($result) > 0 )
{
$_SESSION['email'] = $email;
$_SESSION['senha'] = $senha;
header('location:site.php');
}
else{
  unset ($_SESSION['email']);
  unset ($_SESSION['senha']);
  header('location:index.php');
   
  }
}

// A variavel $result pega as varias $email e $senha, faz uma 
//pesquisa na tabela de usuarios

?>