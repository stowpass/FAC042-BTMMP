<?php

$dataBase = "db_locadora"; //nome do banco de dados
$user = "root"; //usuario que realiza acesso ao banco de dados
$pass = "AGzzcso1$"; //senha do usuario que realiza acesso ao banco de dados
$servidor = "localhost"; //servidor que armazena o bando dados

try{
	$db = new PDO("mysql:host=$servidor;dbname=$dataBase", $user, $pass); //conexao está nessa linha
	$sql = "SELECT * FROM tbl_formapagamento"; //consulta em uma tabela forma de pagamento
	$res = $db->query($sql); //resultado da consulta
	while ($linha = $res->fetch()){ //enquanto tiver linha de retorno na consulta, o programa irá continuar
		$idForma = $linha["idFormaPagamento"];
		$descricao = $linha["descricao"];
		$status = $linha["status"];
		echo "$idForma - $descricao - $status<br>";
		echo "Conectado com sucesso.";
	}
	$db=null;
	
}
catch(PDOException $e) { //tratamento de exceçao
  echo $e->getMessage();
}
?>