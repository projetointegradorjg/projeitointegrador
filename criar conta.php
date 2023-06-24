<?php
include('config.php')

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar conta</title>
    <link rel="stylesheet" href="style.css" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
            Crie sua conta                
             </div>
        </div>
        
</div>
</div>
</div>
</header>
</br> </br>
<div class="container">
  <div class="form-floating mb-3">
    <form action="criar conta.php" method="post">
     
    Email<input name="email" type="email" class="form-control" id="floatingInput" maxlength="30" placeholder="exemplo@exemplo.com">
  </div>

  
  DDD<input type="tel" name="DDD"  class="form-control" maxlength="2" id="floatingInput" placeholder="(00)">

<br>
  Telefone<input type="tel" name="phone"  class="form-control"  maxlength="9" id="floatingInput" placeholder="00000-0000">
<br>
  Data de nascimento<input type="date" name="dt_nasc"  class="form-control" id="floatingInput">
  <br>
  <div class="form-floating mb-3">
    CPF<input type="number" name="cpf"  class="form-control" id="floatingInput" placeholder="CPF/CNPJ">
    
  </div>

  <div class="form-floating">
    Senha<input type="password" name ="senha"  class="form-control" id="floatingPassword" placeholder="Password">
  </div>

  </br>
 

  <input type="submit" value="Criar conta" name="grava" class="btn btn-success">
</div>
</form>


<?php

if(isset($_POST['grava'])) {
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $ddd = $_POST['DDD'];
  $cpf = $_POST['cpf'];
  $senha = $_POST['senha'];
  $dt_nasc = $_POST['dt_nasc'];
  $grava = $conn->prepare('INSERT INTO usuario (idusuario, email_user, phone_user, ddd_user, cpf_user, senha_user, dt_nasc_user) VALUES (NULL, :pemail, :pphone, :pddd, :pcpf, md5(:psenha), :pdt_nasc)');
  
  $grava->bindValue(':pemail', $email);
  $grava->bindValue(':pphone', $phone);
  $grava->bindValue(':pddd', $ddd);
  $grava->bindValue(':pcpf', $cpf);
  $grava->bindValue(':psenha', $senha);
  $grava->bindValue(':pdt_nasc', date('d-m-Y', strtotime($dt_nasc))); 
  
  $grava->execute();
  
 header('location:login.php');
}
?>
</body>
</html>
