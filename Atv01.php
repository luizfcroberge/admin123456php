<?php
    $usuario = $_POST['Usuário'];
    $senha = $_POST['Senha'];


    if( $usuario == 'admin' && $senha == '1234'){
    echo "Logado com sucesso! Seja bem-vindo!" ;
    }
    else {
        echo"Erro! Usuário ou senha inválidos.";
    }

?>