<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinhando a senha</title>
</head>
<body>
<?php
    print_r($_POST);
    

if(isset($_POST['senha']))//
{
    $senha = $_POST['senha'];

   // echo '<br><br>';
    //echo 'senha: '.$senha;
  if($senha == '123') 
  {
   echo " Parabéns, você sabe a senha";   
  }else
  {
       echo "Você errou";  

       $arquivo = "senhas_enviadas.txt";

       if(!file_exists($arquivo)){
        $file = fopen($arquivo, "w");
    } else {
        $file = fopen($arquivo, "a");
    }
    
    fwrite($file, $senha."\n");
    fflush($file);
    fclose($file);



  }
}
?>
</body>
</html>