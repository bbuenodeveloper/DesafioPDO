<?php
$dsn = "mysql:host=localhost; dbname=captura; port=3307";
$user = "root";
$pass = "";

$conexao = new PDO($dsn, $user, $pass);

$query = $conexao->prepare('INSERT INTO pessoa (email)
VALUES("'.$_POST['emailUsuario'].'")');
$resultado = $query->execute();

if($resultado){
    echo "Deu tudo certo";
}else{
    echo "Deu errado";
}


?>

