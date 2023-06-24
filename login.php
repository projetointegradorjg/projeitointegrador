<?php

include('config.php')
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Integrador</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="logo">
                    <img class="img logo" src="logo/logo3.png">
                    <div class="controle">
                      Controle de animais dependentes 
                    </div>
                </div>
                </div>
                <div class="col-md-6">
    <div class="container text-center">
            <div class="nome">
            Projeto integrador                
             </div>
             
        </div>
        <div class="container text-center">
  <div class="row">
    <div class="col">
      <div class="col">

</div>
</div>
</div>
</header>
</br> </br> </br> </br> </br> 
<div class="login-page">
  <div class="form">
    <?php
    $loginInvalido = false; // Variável para controlar se ocorreu uma tentativa de login inválida

    if(isset($_POST['email']) && isset($_POST['senha'])){
      $email = $_POST['email'];
      $senha = $_POST['senha'];
      include "config.php";
      $ver_login = $conn->prepare('SELECT * FROM `login` WHERE `email_login` = :pemail and `senha_login` =md5(:psenha);');
      $ver_login->bindValue(':pemail', $email);
      $ver_login->bindValue(':psenha', $senha);
      $ver_login->execute();
      if($ver_login->rowCount() == 0){
        $loginInvalido = true; 
      }
    }
    ?>
      <form class="login-form" method="post" action="login.php">
        <?php if($loginInvalido): ?>
        <p class="error-message"><U>Login ou senha inválido!</U></p>
        <?php endif; ?>
        <input type="email" placeholder="Email" name="email"/>  
        <input type="password" name="senha" placeholder="Senha"/>
        <div class="botaologin">
        <button type="submit" class="btn btn-success">Login</button>
        </div>
        <p class="message">Não tem uma conta? <a href="criar conta.php">Criar conta</a></p>
      </form>
  </div>
</div>
<?php
if(isset($_POST['email']) && isset($_POST['senha'])){
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  include "config.php";
  $ver_usuario = $conn->prepare('SELECT * FROM `usuario` WHERE `email_user` = :pemail and `senha_user` = md5(:psenha);');
  $ver_usuario->bindValue(':pemail', $email);
  $ver_usuario->bindValue(':psenha', $senha);
  $ver_usuario->execute();
  if($ver_usuario->rowCount() == 0){
    echo "Não há registro";
  }else{
    session_start();
    $row = $ver_usuario->fetch();
    $id_usuario = $row['idusuario'];
    $_SESSION['login'] = $id_usuario;
    echo $_SESSION['login'];
    header('location:index.php');
  }
}
?>
