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
    <title>Notificações</title>
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
                      Controle de animais dependentes </br>
                    </div>
                </div>
                </div>
                <div class="col-md-6">
    <div class="container text-center">
            <div class="nome">
            Notificações             
        </div>
        </div>
        
</div>
</div>
</div>
</header>
            </br>   </br>
            <DIV CLASS="notificacoes">
            <div class="container">
            <div class=row> 
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Dar banho em Gudanzinho
                </label>
              </div>
              <br>   </br>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                <label class="form-check-label" for="flexCheckChecked">
                    Verificar Carterinha de vacinaça de Blant
                </label>
              </div>
              <br>   </br>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Exemplo
                </label>
              </div>
              <br>   </br>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                <label class="form-check-label" for="flexCheckChecked">
                    Exemplo
                </label>
              </div>
              <br>   </br>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                <label class="form-check-label" for="flexCheckChecked">
                    Exemplo
                </label>
              </div>
              
           </div>
           </div>
           </DIV>
            </br> 
            <<footer class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <a href="adicionar animal.php" class="btn btn-primary">Adicionar um animal</a>
                </div>
            </div>
            <div class="col">
                <div class="text-center">
                    <a href="meu perfil.php" class="btn btn-success">Meu perfil</a>
                </div>
            </div>
            <div class="col">
    <div class="text-center">
        <a href='index.php' name="logout" class="btn btn-danger">
    <?php
    if(isset($_GET['logout'])){
        session_unset();
        session_destroy(); 
        header('location: login.php');
        exit; 
    }
    ?>
            </div>
        </div>
    </div>
</footer>
</body>
</div>
</div>
</div>
<?php
