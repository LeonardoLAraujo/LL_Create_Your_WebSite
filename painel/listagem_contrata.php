<?php
    session_start();
    include '../conexao.php';

    if(isset($_POST['txt_busca_usuario']) != ''){
        $sql = mysqli_query($conecta,"select * from contratar where nome like '{$_POST['txt_busca_usuario']}%' order by nome asc ");
    }else{
        $sql = mysqli_query($conecta,"select * from contratar order by nome asc");
    }

    if(isset($_GET['apagar'])){
        $sql = mysqli_query($conecta,"delete from contratar where nome=" .$_GET['apagar']);

        $_SESSION['apagado'] = true;
        header('Location: listagem_contrata.php');

        return false;
} 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Contratos</title>
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

    <div class="nome_listagem">
        <h3 class="display-4 nome_listagem">LISTAGEM DE USUÁRIOS</h3>
    </div>

    <form name="frm_listagem" method="POST">
        <div class="busca">
            <h4>DIGITE O NOME DO USUÁRIO:</h4>
            <div class="col-6 form-floating">
                <input type="text" class="form-control" name="txt_busca_usuario" id="text" placeholder="Informe o Nome do Contratante">
                <label for="text" class="form-label">Informe o Nome do Contratante</label>
            </div>
            
            <button class="btn btn-primary" type="submit">FILTRAR</button>
            <button class="btn btn-primary" type="submit" onClick="document.frm_listagem.action='painel.html'" >VOLTAR</button>
        </div>  
    </form>
    
    <?php
        if(isset($_SESSION['apagado'])):
    ?>
    <div class="notification">
        <p>Usuário Apagado com Sucesso</p>
    </div>
    <?php
        endif;
        unset($_SESSION['apagado']);
    ?>

    <div class="tab">
    <table class="tabela" border="1" align="center">
        <tr>
            <th colspan="3"><h2>LISTAGEM DE USUÁRIOS</h2></th>
        </tr>

        <tr>
            <th>Usuário</th>
            <th>E-mail</th>
            <th>Mensagem</th>
            <th>APAGAR</th>
        </tr>

        <tr>
            <?php
                if($sql === FALSE) { 
                    die(mysqli_error());
                 }

                while($linha = mysqli_fetch_assoc($sql)){
            ?>

            <td><?php echo  $linha['nome']; ?></td>
            <td><?php echo $linha['email']; ?></td>
            <td><?php echo  $linha['msg']; ?></td>
            <td><a href="listagem_contrata.php?apagar='<?php echo $linha['nome']; ?>'"><i class="bi bi-x"></i></a></td>
        </tr>

        <?php } 
            
        ?>
    </table>
    </div>

</body>
</html>