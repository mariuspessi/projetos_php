<?php
  // Include database file
  include 'baseDados.php';
  $DBMagico = new BancoDados;
  // Insert Record in customer table
  if(isset($_POST['cadastrar'])) {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $curso = $_POST['curso'];
    $RA = $_POST['RA'];
    $DBMagico->adicionar_Aluno($nome, $sobrenome, $curso, $RA);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastro Alunos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>
<div class="card text-center" style="padding:15px;">
  <h4>Cadastro</h4>
</div><br> 
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h4>Insira os dados</h4>
                </div>
                <div class="card-body bg-light">
                  <form action="cadastro.php" method="POST">
                    <div class="form-group">
                      <label for="nome">Nome:</label>
                      <input type="text" class="form-control" name="nome" placeholder="Entre com o nome" required="">
                    </div>
                    <div class="form-group">
                      <label for="sobrenome">Sobrenome</label>
                      <input type="text" class="form-control" name="sobrenome" placeholder="Entre com o sobrenome" required="">
                    </div>
                    <div class="form-group">
                      <label for="curso">Curso:</label>
                      <input type="text" class="form-control" name="curso" placeholder="Entre com o curso" required="">
                    </div>
                    <div class="form-group">
                      <label for="RA">Curso:</label>
                      <input type="text" class="form-control" name="RA" placeholder="Entre com o RA" required="">
                    </div>
                    <input type="submit" name="cadastrar" class="btn btn-primary"style="float:right;" value="Cadastrar">
                  </form>
                </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>