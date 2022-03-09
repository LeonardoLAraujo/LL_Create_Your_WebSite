<?php

    $servidor = "localhost";
    $user = "root";
    $senha = "";
    $banco = "LL";

    $conecta = mysqli_connect($servidor, $user, $senha, $banco) or die("Erro ao tentar Conectar com o servidor!!"); //Criando a variável para colocar no mysqli_query, para não dar erro

?>