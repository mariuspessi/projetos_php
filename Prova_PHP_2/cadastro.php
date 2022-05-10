<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
</head>
<body>
    <div class="wrapper">
        <h2>Cadastro de Alunos</h2>
        <p>Alunos Fatec</p>
        <form action="cadastro2.php" method="POST">
                <label>Nome</label>
                <input type="text" name="nome" value="">
                <br><br>
                <label>sobrenome</label>
                <input type="text" name="sobrenome" value="">
                <br><br>
                <label>curso</label>
                <input type="text" name="curso" value="">
                <br><br>
                <label>RA</label>
                <input type="text" name="RA" value="">
                <br><br>
                <input type="submit" class="btn btn-primary" value="Cadastrar">
                <br><br>
                <input type="submit" class="btn btn-primary" value="ler">
                <br><br>
                <input type="submit" class="btn btn-primary" value="Atualizar">
                <br><br>
                <input type="submit" class="btn btn-primary" value="Excluir">
        </form>
    </div>    
</body>
</html>
