<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-bre">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LL - Fale Conosco</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" type="imagex/png" href="./img/l.jpg" class="icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous" defer></script>
</head>
<body>
    
    <!-- MENU -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="img/L.jpg" alt="" width="40" height="40">
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contratar.php">Contratar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Fale Conosco</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <!-- Notificação de Cadastro -->
    <?php
        if(isset($_SESSION['cadastro'])):
    ?> 
    <div class="alert alert-success" role="alert">
        Formulário Enviado com Sucesso, Entraremos em Contato o quanto Antes!!!
    </div>
    <?php
        endif;
        unset($_SESSION['cadastro']);
    ?>

    <!-- Notificação de Usuário já Cadastrado -->
    <?php
        if(isset($_SESSION['nao_cadastro'])):
    ?> 
    <div class="alert alert-danger" role="alert">
        Formulário Já Respondido!!!
    </div>
    <?php
        endif;
        unset($_SESSION['nao_cadastro']);
    ?>  

    <div class="container-fluid" id="container-fale">
        <div class="row align-items-center col-md-12">
            <div class="col-md-12" id="title">
                <h1>Fale Conosco</h1>
                <p>Para entrar em contato com a gente, preencha os campos e envie sua mensagem, que logo responderemos você!</p>
            </div>

            <form name="frm_faleconosco" method="POST">
                <div id="nameEmail">
                    <div class="col-6">
                        <div class="mb-3 form-floating" id="input-name">
                            <input type="text" class="form-control" name="txt_nome" placeholder="Digite seu nome" required>
                            <label for="form-label">Digite seu nome</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3 form-floating">
                            <input type="email" class="form-control" name="txt_email" placeholder="Digite seu email" required>
                            <label for="form-label">Digite seu e-mail</label>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <textarea name="txt_comentario" class="form-control" id="comentario" cols="10" rows="10" placeholder="Digite sua Mensagem" required></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3" id="termos">
                        <input type="checkbox" class="form-check-input" value="" id="newsletter" name="newsletter" required>
                        <label for="newsletter" class="form-check-label" id="aceita">Aceitar os <a href="#">termos e condições</a>.</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary" onClick="document.frm_faleconosco.action='faleConoscoEntrada.php'">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- RODAPE -->
    <footer class="container-fluid" id="rodape-faleConosco">
            <p>Nos encontre nas redes sociais:</p>
            <div class="row justify-content-center" id="rodape social-icons-container">
                <div class="col-1">
                    <a href="https://github.com/LeonardoLAraujo" target="_blank"><i class="bi bi-github"></i></a>
                </div>
                <div class="col-1">
                    <a href="https://www.linkedin.com/in/leonardo-leal-araújo-2653b91b9/" target="_blank"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <p>LL &copy; 2022</p>
    </footer>

</body>
</html>