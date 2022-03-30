<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 30px sans-serif; text-align: center; }
        .btn {background-color:#008080; padding-bottom:25px; padding-left:50px; padding-right:50px; padding-top:25px; width: 300px; }
        
    </style>
</head>
<body>
    <!--Opções para cadastro, ver cadastro e logout da aplicação-->
    <div class="page-header">
        <h1>Olá, <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
        <br>
        </b>Bem vindo !!! </h1>
    </div>
    <p>
        
        <a href="cadastro.php" class="btn btn-primary">Cadastro Pessoas</a>
        <br><br>
       
        <a href="cadastros.txt" class="btn btn-danger">Visualizar Cadastros</a>
        <br><br>

        <a href="logout.php" class="btn btn-danger">Sair da conta</a>

       
    </p>
</body>
</html>