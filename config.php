<?php

    $dbHost = 'Localhost';
    $dbUsername = 'aluno';
    $dbPassword = 'admin';
    $dbName = 'formulario_miguel';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // if($conexao->connect_errno)
    // {
    //     echo "Erro";
    // }
    // else
    // {
    //     echo "Conexão efetuada com sucesso";
    // }

?>