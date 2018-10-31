<?php
include_once('Model.php');

$sql = "SELECT * FROM veiculo";
$res = $db->query($sql);
var_dump($res);
exit;
?>