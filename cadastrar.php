<?php
    include('conexao.php');
    include('usuario.php');
    
    if(empty($_POST['nome']) || empty($_POST['nomeUsuario']) || empty($_POST['email']) || empty($_POST['senha'])){
        header('Location: cadastrar.html');
        exit();
    }

    $senha = md5($_POST['senha']);
	$usuario = new Usuario($_POST['nome'], $_POST["nomeUsuario"], $_POST["email"], $senha);
    
    $nome = $usuario->getNome();
    $nomeUsuario = $usuario->getUsuario();
    $email = $usuario->getEmail();
    $senha = $usuario->getSenha();
    $i = 0;
    
    $lComp = $PDO->prepare("INSERT INTO `usuario`(`nome`, `nomeUsuario`, `email`, `senha`) VALUES (:nome, :nomeUsuario, :email, :senha)");

    $search = "SELECT `nomeUsuario`,`email` FROM `usuario`";
    $resultado = $PDO->query($search);
    while($row = $resultado->fetch()) {
        if($row['nomeUsuario'] == $nomeUsuario || $row['email'] == $email){
            $i++;
        }
    }

    if($i>0){
        echo "Usuário já cadastrado.";
    }else{
        $lComp->execute(array(':nome' => $nome, ':nomeUsuario' => $nomeUsuario, ':email' => $email, ':senha'=> $senha));

        echo "Usuario cadastrado.";
        header("Location: login.html");
    }
?>