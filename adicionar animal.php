<?php
session_start();
if(!isset($_SESSION['login'])){
    header('location:login.php');

}
include('config.php')

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar animal</title>
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
                          Controle de animais dependentes </br>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
        <div class="container text-center">
                <div class="nome">
                Adicionar animal                
                 </div>
            </div>
            
    </div>
    </div>
    </div>
    </header>
    <br> <br> <br>  
            <<div class="container">
  <div class="row">
    <div class="col-md-6">
      <form action="adicionar animal.php" method="POST" enctype="multipart/form-data">
        <div class="form-floating">
          Nome
          <label for="floatingInput"></label>
          <input type="text" name="nome" class="form-control" id="floatingInput" placeholder="">
        </div>
        <br>
        <div class="form-floating">
          Sexo
          <select class="form-select" aria-label="Sexo" name="sexo">
            <option selected>-</option>
            <option value="1">Macho</option>
            <option value="2">Fêmea</option>
            <option value="3">Não declarar</option>
          </select>
        </div>
        <br>
        Especie
        <select class="form-select" name="especie" aria-label="Default select example" aria-placeholder="Especie">
          <option selected>-</option>
          <option value="1">Canino </option>
          <option value="2">Felino</option>
          <option value="3">Equino</option>
          <option value="4">Bovino</option>
          <option value="5">Psitacídeo</option>
        </select>
        <br>
        Peso
        <br>
        <div class="form-floating">
          <label for="floatingInput"></label>
          <input type="number" name="peso" class="form-control"  id="floatingInput" placeholder="">
        </div>
        <br>
        Idade
        <br>
        <div class="form-floating">
          <label for="floatingInput"></label>
          <input type="number" name="peso" class="form-control" id="floatingInput" placeholder="">
        </div>
        <br>
        Alimentação
        <select class="form-select" name="alimentacao" aria-label="Default select example" aria-placeholder="Alimentação">
          <option selected>-</option>
          <option value="1">Uma vez por dia</option>
          <option value="2">Duas vezes por dia</option>
          <option value="3">Uma vez a cada dois dias</option>
          <option value="4">Uma vez a cada uma semana</option>
          <option value="5">Uma vez a cada duas semanas</option>
          <option value="6">Uma vez a cada três semanas</option>
          <option value="7">Uma vez por mês</option>
        </select>
        <br>
        Higiene
        <select class="form-select" name="higiene"  aria-label="Default select example">
          <option selected>-</option>
          <option value="1">Uma vez por dia</option>
          <option value="2">Uma vez por semana</option>
          <option value="3">Uma vez a cada duas semanas</option>
          <option value="4">Uma vez por mês</option>
        </select>
        <br>
        
        <br><br>
      </form>
    </div>
    <div class="col-md-6">
      <div class="container text-center">
        <div class="form-floating">
          Adicionar uma foto
          <label for="floatingInput"></label>
          <input type="file" name ="foto" class="form-control" id="floatingInput" placeholder="">
        </div>
      </div>
      <br><br>
      Verificar carteirinha de vacinação
      <select class="form-select"  name="ver_cart" aria-label="Default select example">
        <option selected>-</option>
        <option value="1">A cada seis meses</option>
        <option value="2">A cada um ano</option>
        <option value="3">Não verificar</option>
      </select>
</br></br>
     <div class="container text-center">
     <input type="submit" value="Adicionar animal" name="grava" class="btn btn-success">
        </div>
      <br><br>
    </div>
  </div>
</div>
<?php
if(isset($_POST['grava'])) {
  $nome = $_POST['nome'];
  $sexo = $_POST['sexo'];
  $especie = $_POST['especie'];
  $peso = $_POST['peso'];
  $idade = $_POST['idade'];
  $alimentacao = $_POST['alimentacao'];
  $higiene = $_POST['higiene'];
  $ver_cart = $_POST['ver_cart']; 
  }
?>