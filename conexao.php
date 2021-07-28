<?php
  try {
    $username = "root";
    $password = "root";
  
    $conexao = new PDO('mysql:host=localhost;dbname=ativpweb', $username, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
  } catch(PDOException $e) {
    echo 'conexão não realizada. Erro: ' . $e->getMessage();
  }
?>
