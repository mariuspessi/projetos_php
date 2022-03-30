<?php
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['username'] == 'marius' and $_POST['password'] == '123456'){
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["username"] = 'Marius Pessi';
         header("location: welcome.php");
    } else {
        $_SESSION['loggedin'] = FALSE;
    }
}
?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{width:500px; font: 14px sans-serif;text-align:left; color: white; }
        .container{width:400px; background-color: #008080;}
        
    </style>
</head>
<body>
<br><br>
    <!--//bloco de acesso com usuário e senha fixos .-->
        <div class="container">
            <h2>Acessar</h2>
            <p>Favor inserir login e senha.</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="marius">
                    <span class="help-block"></span>
                </div>    
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" value="123456">
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Acessar">
                </div>
            </form>
        </div> 
      
</body>
</html>