<?php
    include('conexao.php');
    include('usuario.php');
    
    if(empty($_POST['nomeCompleto']) || empty($_POST['nomeUsuario']) || empty($_POST['email']) || empty($_POST['senha'])){
        header('Location: cadastro.html');
        exit();
    }

    $s = md5($_POST["senha"]);
	$usuario = new Usuario($_POST['nomeCompleto'], $_POST["nomeUsuario"], $_POST["email"], $s);
    
    $nomeCompleto = $usuario->getNome();
    $nomeUsuario = $usuario->getUsuario();
    $email = $usuario->getEmail();
    $senha = $usuario->getSenha();
    $i = 0;

    $stmt = $conexao->prepare("INSERT INTO `usuario`(`nomeCompleto`, `nomeUsuario`, `email`, `senha`) 
    VALUES (:nomeCompleto, :nomeUsuario, :email, :senha)");

    $fetch = "SELECT `nomeCompleto`, `nomeUsuario` FROM `usuario`";
    $resultado = $con->query($fetch);

    while($row = $resultado->fetch()) {
        if($row['nomeUsuario'] == $nomeUsuario || $row['email'] == $email){
            $i++;
        }
    }

    if($i>0){
        echo "Usuário já existente.";
    }else{
        $stmt->execute(array(':nomeCompleto' => $nomeCompleto, ':nomeUsuario' => $nomeUsuario, ':email' => $email, ':senha'=> $senha));

        echo "Cadastro realizado.";
        header("Location: login.html");
    }
?>
