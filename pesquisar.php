<?php
    include('conexao.php');

    if(empty($_POST['pesquisar'])){
        header('Location: listandoUsuario.php');
        exit();
    }

    $pesquisar = $_POST['pesquisar'];

    $lComp = $PDO->prepare("SELECT `nomeUsuario` FROM `usuario` WHERE `nomeUsuario` = :look");

    $lComp->bindparam(":look", $pesquisar);
    $lComp->execute();

    if($lComp->rowCount() == 0){
        echo "Usuário não encontrado.";
    }else{
        $resultado = $lComp->fetch(PDO::FETCH_ASSOC);
        echo "Usuário: ";
        foreach ($resultado as $key => $value) {
            echo $key.": ".$value."<br>";
        }
        
    }
    
    ?>
        <button><a href="listandoUsuario.php">Voltar</a></button>
    <?php
?>