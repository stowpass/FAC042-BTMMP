<?php
    include '../model/conexao.php';
  
$conn = getConexao();

$sql = "SELECT * FROM tbl_usuario";
$stmt = $conn->prepare($sql);
$stmt->execute();
$resultado = $stmt->fetchAll();

foreach ($resultado as $users) {

    echo "Nomes de Usuario: ".$users['nome'];
    echo "</br>";
    echo "Email: ".$users['email'];
    echo "</br>";
    echo "Cpf: ".$users['cpf'];
    echo "</br>";
    
    # code...
}











    
  ?>