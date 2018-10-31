
<?php
  include '../model/header.php';
  include '../model/listar_usuario.php';

?>

<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <a href="cadastra_usuario.php" class="btn btn-primary">Novo Usuario</a>
  </div>
</div>

<div class="container">
    <div class="col-lg-12">
   
        <table class="table table-striped" style="width:80%">  
<tr>
    <th>Nome</th>
    <th>Endereço</th>
    <th>Cpf</th>
    <th>Email</th>
    <th>Status</th>
</tr>
<?php

foreach ($resultado as $users) {
?>
<tr>

    <td><?php echo $users['nome'] ?></td>
    <td><?php echo $users['endereco'] ?></td>
    <td><?php echo $users['cpf'] ?></td>
    <td><?php echo $users['email'] ?></td>
    <td><?php echo $users['status'] ?></td>
</tr>
<?php
};
?>
</table>
        </div>
    </div>
     




<?php
  include '../model/rodape.php'
?>

