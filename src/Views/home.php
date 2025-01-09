<?php $this->layout('master') ?>

<?php if(!($this->e($logado))) {?>
  <p class="text-danger"><?=$this->e($alert)?></p>
  <h1>Login</h1>
  <br>
  <form action="/user/login" method="POST" role="form">
    <div class="form-group">
      <label>Nome: </label>
      <input type="text" class="form-control" name="username" required>
    </div>
    <div class="form-group">
      <label>Password: </label>
      <input type="password" class="form-control" name="password" required>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Logar</button>
    <a href="/user/create_form" class="btn btn-success">Cadastrar<a/>
  </form> 
<?php }else{?>

  <h1>Logado</h1>
  <p>Bem vindo: <?=$this->e($user)?></p>
  <a href="/user/logout" class="btn btn-danger">Logout<a/>

<?php }?>