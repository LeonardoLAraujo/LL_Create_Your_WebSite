<?php

    session_start();
    include 'conexao.php';

    if(empty($_POST['txt_email']) || empty($_POST['txt_nome']) || empty($_POST['txt_comentario'])){
        header('Location: contratar.php');
        exit();
    }

    $email = $_POST['txt_email'];
    $nome = $_POST['txt_nome'];
    $msg = $_POST['txt_comentario'];

    $sql = mysqli_query($conecta, "select * from contratar where nome = '$nome'"); //O $conecta é a variável do conexao.php
    $sql2 = $sql->num_rows; //o $sql->num_rows é para ler todas as linha de cadastro do tb_cadastrar, para ver se tem algum dado igual, caso tenha não cadastrará
    
    if($sql2 > 0){ //Caso tenha um cadastro já cadastrado
        $_SESSION['nao_cadastro'] = true;
        header('Location: contratar.php');
        exit();
    }else{ //Caso não tenha esse cadastro
        $sql = mysqli_query($conecta, "insert into contratar (nome, email, msg)values('$nome','$email','$msg')"); //O $conecta é a variável do conexao.php

        $_SESSION['cadastro'] = true;
        header('Location: contratar.php');
        exit();
    }
    
?>