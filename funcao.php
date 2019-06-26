<?php

include_once "conexao.php";

try{

    $query = $conexao->prepare('INSERT INTO pessoa (email) VALUES(?)');
    $resultado = $query->execute([$_POST['emailUsuario']]);

    if($resultado){
    echo "<h1>Seu cadastro foi concluido com sucesso!</h1>";
    }else{
    echo "<h1>Erro ao cadastrar!</h1>";
    }

}catch(PDOException $ex){
    echo "<h1>Serviço indisponivel!</h1>";
}



?>

