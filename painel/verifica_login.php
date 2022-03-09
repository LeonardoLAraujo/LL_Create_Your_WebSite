<?php

    $user = $_POST['txt_user'];
    $password = $_POST['txt_senha'];

    if(empty($user) || empty($password)){
        $_SESSION['login_empty'] = true;
        header('Location: painel.html');
        exit();
    }

    if($user == "ll_website" && $password == "Leonardo1635."){
        $_SESSION['login_pass'] = true;
        header('Location: painel.html');
        exit();
    }else{
        $_SESSION['login_error'] = true;
        header('Location: login.php');
        exit();
    }

?>