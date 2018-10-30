<?php 
session_start();
$login = $_POST['email'];
$senha = $_POST['senha'];

$dsn = "mysql:host=localhost;dbname=db_locadora";
$username = "root";
$password = "AGzzcso1$";
$options = array(
PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try{
	$db = new PDO($dsn,$username,$password,$options);
	$sql = "SELECT * FROM `tbl_usuario` WHERE `email` = '$login' AND `senha`= '$senha'";
	$result = $db->query($sql);
	
	if($result->fetch()) > 0 )
	{
	$_SESSION['email'] = $login;
	$_SESSION['senha'] = $senha;
	header('location:site.php');
	}
	else{
	unset ($_SESSION['email']);
	unset ($_SESSION['senha']);
	header('location:site.php');
	
	}
} catch (PDOException $e){
	echo "Error!".$e->getMessage();
}

?>