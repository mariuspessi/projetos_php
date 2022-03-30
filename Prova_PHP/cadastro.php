<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{text-align: left; font: 15px sans-serif ;color:white; }
        .container{width: 500px; background-color:#008080; }
        
    </style>
</head>
<body>
    <br><br>
    <!--Bloco com os campos Nome, Sobrenome e RA para cadasto em um banco .txt-->
    <div class="container">
        <h2>Cadastro</h2>
        <p>Cadastro de aluno.</p>
        <form action="processamento.php" method="post">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="Nome" class="form-control" value="">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Sobrenome</label>
                <input type="text" name="Sobrenome" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>RA</label>
                <input type="text" name="RA" class="form-control" value="">
                <span class="help-block"></span>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Gravar">       
            </div>
            
        </form>
    </div>    
</body>
</html>