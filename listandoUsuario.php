<?php
    include('conexao.php');

    ?>
        <form method="POST" name="form" action="pesquisar.php">
            
            <label for="pesquisar"><input type="text" name="pesquisar" placeholder="Pesquise um usuario"></label>
            
            
            <button type="submit" value="Send">Pesquisar</button>
            
        </form>
    <?php

    echo 'Usuários cadastrados:';
    

    $sql = $PDO->prepare("SELECT `nome` FROM `usuario`");
    $sql->execute();
    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

    for ($i=0; $i < count($resultado); $i++) { 
        echo "Usuário: ".($i+1)."<br>";
        foreach ($resultado[$i] as $key => $value) {
            echo $key.": ".$value."<br>";
        }
        
    }
?>
