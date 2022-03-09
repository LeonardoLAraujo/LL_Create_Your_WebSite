<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LL - Login Painel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous" defer></script>
    <link rel="shortcut icon" type="imagex/png" href="./img/l.jpg" class="icon">
</head>
<body>
    
    <!-- MENU -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.html">
                <img src="../img/L.jpg" alt="" width="40" height="40">
            </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../index.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../contratar.php">Contratar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../faleconosco.php">Fale Conosco</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>

     <!-- Login feito com Sucesso -->
     <?php
        if(isset($_SESSION['login_pass'])):
    ?> 
    <div class="alert alert-success" role="alert">
        Bem-Vindo Administrador!!!
    </div>
    <?php
        endif;
        unset($_SESSION['login_pass']);
    ?>

    <!-- Login Mal Sucedido -->
     <?php
        if(isset($_SESSION['login_error'])):
    ?> 
    <div class="alert alert-danger" role="alert">
        Login ou Senha Incorreto!!!
    </div>
    <?php
        endif;
        unset($_SESSION['login_error']);
    ?>

    <!-- Login Empty -->
    <?php
        if(isset($_SESSION['login_empty'])):
    ?> 
    <div class="alert alert-danger" role="alert">
        Preencha Todos os Campos!!!
    </div>
    <?php
        endif;
        unset($_SESSION['login_empty']);
    ?>

    <div class="container">
        <div class="row align-items-center" id="painel-login">
            <form name="frm_painel_login" method="POST">
                <div class="col-12">
                <h1 class="display-3">Logar no Sistema</h1>
                </div>
                <div class="col-12">
                    <div class="mb-2 form-floating">
                        <input type="text" id="user" name="txt_user" class="form-control" placeholder="Usuário" required>
                        <label for="user" class="form-label">Usuário</label>
                    </div>  
                </div>
                <div class="col-12">
                    <div class="mb-4 form-floating">
                        <input type="password" id="senha" name="txt_senha" class="form-control" placeholder="Usuário" required>
                        <label for="senha" class="form-label">Senha</label>
                    </div>  
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" onClick="document.frm_painel_login.action='verifica_login.php'">Entrar</button>
                </div>
            </form>
        </div>
        <img src="../img/pngwing.com.png" alt="Painel Login" class="img-fluid" id="img-painel" title="LL - Imagem do Painel de Login">
    </div>

    

</body>
</html>