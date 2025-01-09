<?php $this->layout('master', ['title' => $title]) ?>

<h1>Criar usuário</h1>

<br>
<form action="/user/create" method="POST" role="form">
  <div class="form-group">
    <label>Username: </label>
    <input type="text" class="form-control" name="username">
  </div>
  <div class="form-group">
    <label>Password: </label>
    <input type="password" class="form-control" name="password">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form> 