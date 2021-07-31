<?php
    include('conexao.php');
    include('usuario.php');
    
    if(empty($_POST['nomeUsuario']) || empty($_POST['senha'])){
        header('Location: login.html');
        exit();
    }

    $nomeUsuario = $_POST['nomeUsuario'];
    $senha = $_POST['senha'];

    $lComp = $PDO->prepare("SELECT `nomeUsuario`, `senha` FROM usuario WHERE `nomeUsuario` = :nomeUsuario and `senha` = :senha");

    $lComp->bindparam(":nomeUsuario", $nomeUsuario);
    $lComp->bindValue(":senha", md5($senha));
    $lComp->execute();
    
    if($lComp->rowCount() == 0){
        echo "Usuário ou senha incorretas.";
        ?>
            <button><a href="login.html">Voltar</a></button>
        <?php
    }else{
        header("Location: listandoUsuario.php");
    }
?>