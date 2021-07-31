<?php
  try {
    $nomeUsuario = "root";
    $senha = "";
  
    $PDO = new PDO('mysql:host=localhost;dbname=avaliacao2', $nomeUsuario, $senha);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
  } catch(PDOException $e) {
    echo 'Erro de conexão: ' . $e->getMessage();
  }
?>