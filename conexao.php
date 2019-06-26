<?php
    $dsn = "mysql:host=localhost; dbname=captura; port=3307";
    $user = "root";
    $pass = "";

try{
    $conexao = new PDO($dsn, $user, $pass);
}catch(PDOException $ex){
    echo "<h1>Falha na conexão!</h1>";
    exit;
}
    

?>