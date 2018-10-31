<?php

$tipo_banco = "mysql";
$servidor_host = "localhost";
$usuario = "root";
$senha = "";
$base_dados = "locadora";

 try {              
    $conn = new PDO("$tipo_banco:host=$servidor_host;dbname=$base_dados", $usuario, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Conectou";
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }


?>  
