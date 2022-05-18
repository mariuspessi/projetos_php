<?php
  
  
  include 'baseDados.php';
  $DBMagico = new BancoDados;
  // Editar registro
  if(isset($_GET['editId']) && !empty($_GET['editId'])) {
    $editId = $_GET['editId'];
    $Aluno = $DBMagico->selecionar_Registro($editId);
  }
  // Atualizar registro
  if(isset($_POST['update'])) {
    $DBMagico->atualizar_Alunos($_POST);
  }  
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Alunos Fatec</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>
<div class="card text-center" style="padding:15px;">
  <h4>Cadastro de Alunos</h4>
</div><br> 
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="text-white">Atualizar Registros</h4>
                </div>
                <div class="card-body bg-light">
                  <form action="update.php" method="POST">
                    <div class="form-group">
                      <label for="nome">Nome:</label>
                      <input type="text" class="form-control" name="unome" value="<?php echo $Aluno['nome']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="sobrenome">Sobrenome</label>
                      <input type="sobrenome" class="form-control" name="usobrenome" value="<?php echo $Aluno['sobrenome']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="curso">Curso:</label>
                      <input type="text" class="form-control" name="ucurso" value="<?php echo $Aluno['curso']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <label for="RA">RA:</label>
                      <input type="text" class="form-control" name="uRA" value="<?php echo $Aluno['RA']; ?>" required="">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="id" value="<?php echo $Aluno['id']; ?>">
                      <input type="submit" name="update" class="btn btn-primary" style="float:right;" value="Atualizar">
                    </div>
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