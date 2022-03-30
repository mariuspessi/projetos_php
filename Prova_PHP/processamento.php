<?php

//criar o arquivo txt
$filename = "cadastros.txt";
if(!file_exists("cadastros.txt")){             //caso nao exista criar
    $handle = fopen("cadastros.txt", "w");     //criar cadastro com opção de escrita
} else {
    $handle = fopen("cadastros.txt", "a");     //criar cadastro com opção de escrita se nao existir criar
}

fwrite($handle, $_POST['Nome']."\r");              //inserir o arquivo nome
fwrite($handle, $_POST['Sobrenome']."\r");         //inserir o arquivo sobrenome
fwrite($handle, $_POST['RA']."\r\n");              //inserir o arquivo RA
fflush($handle);                                   //insere os dados no arquivo
fclose($handle);                                   //Fecha o arquivo depois da inserção

$handle = fopen( "cadastros.txt", "r");  //abre o arquivo somente leitura
while (!feof($handle)) {
        $line = fgets($handle);
        echo $line ."<br>";
    }
fclose($handle);
header("location: welcome.php");                 //retorna para a pagina welcome
    exit;

    ?>