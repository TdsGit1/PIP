<?php

    $dbhost = "172.16.102.121";
    $dblogin = "furtado";
    $dbpassword = "Furtado@21"
    $dbname = "pip";
    
    $conexao = new mysqli($dbhost,$dblogin,$dbpassword,$dbname);

    if($conexao->connect-errno)
    {
        echo "erro";
    }else{
        echo "conexao efetuada com sucesso!"
    }
?>