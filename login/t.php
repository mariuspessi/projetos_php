<?php

$filename = "banquinho.txt";
if(!file_exists("banquinho.txt")){
    $handle = fopen("banquinho.txt", "w");
} else {
    $handle = fopen("banquinho.txt", "a");
}

fwrite($handle, $_POST['nome']);
fwrite($handle, $_POST['cpf']);
fflush($handle);
fclose($handle);

$handle = fopen( "banquinho.txt", "r");
while (!feof($handle)) {
        $line = fgets($handle);
        echo $line ."<br>";
    }
fclose($handle);
header("location: WELCOME.php");
    exit;
?>