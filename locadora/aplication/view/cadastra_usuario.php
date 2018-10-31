<?php
  include '../model/header.php';
  include '../model/conexao.php';
?>

<form class="form-horizontal" action="../model/salvar_usuario.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>Cadastrar Usuario</legend>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Tipo de Usuario</label>
  <div class="col-md-4">
    <select id="idPerfilUsuario" name="idPerfilUsuario" class="form-control">
      <option value="1">Administrador</option>
      <option value="2">Funcionario</option>
      <option value="3">Usuario</option>
    </select>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="nome">Data</label>  
  <div class="col-md-2">
  <input  id="dt_cadastro" 
          name="dt_cadastro" 
          Input type = "Date"
          placeholder="Digite Nome" 
          class="form-control input-md" 
          required="">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome">Nome</label>  
  <div class="col-md-6">
  <input  id="nome" 
          name="nome" 
          type="text" 
          placeholder="Digite Nome" 
          class="form-control input-md" 
          required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome">Endereço</label>  
  <div class="col-md-6">
  <input  id="endereco" 
          name="endereco" 
          type="text" 
          class="form-control input-md" 
          required="">
     </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome">CPF</label>  
  <div class="col-md-4">
  <input  id="cpf" 
          name="cpf" 
          type="text" 
          class="form-control input-md" 
          required="">
     </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome">Email</label>  
  <div class="col-md-4">
  <input  id="email" 
          name="email" 
          type="text" 
          class="form-control input-md" 
          required="">
     </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="senha">Senha</label>
  <div class="col-md-4">
    <input  id="senha" 
            name="senha" 
            type="password" 
            placeholder="senha" 
            class="form-control input-md" 
            required="">
    
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Status</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radios-0">
      <input type="radio" name="status" id="radios-1" value="1" checked="checked">
      Ativo
    </label>
	</div>
  <div class="radio">
    <label for="radios-1">
      <input type="radio" name="status" id="radios-0" value="0">
      Inativo
    </label>
	</div>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <input type="submit" class="btn btn-primary" value="Salvar">
    <a href="lista_usuarios.php" class="btn btn-danger">Voltar</a>
  </div>
</div>


</fieldset>
</form>


<?php
  include '../model/rodape.php'
?>