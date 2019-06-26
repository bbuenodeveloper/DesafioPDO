<?php
$dsn = "mysql:host=localhost; dbname=captura; port=3307";
$user = "root";
$pass = "";

$conexao = new PDO($dsn, $user, $pass);

$query = $conexao->prepare('INSERT INTO pessoa (email)
VALUES("'.$_POST['emailUsuario'].'")');
$resultado = $query->execute();

if($resultado){
    echo "<h1>Seu cadastro foi concluido com sucesso!</h1>";
}else{
    echo "<h1>Erro ao cadastrar!</h1>";
}


?>

