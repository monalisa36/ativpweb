<?php
    include('conexao.php');
    include('usuario.php');
    
    if(empty($_POST['nomeUsuario']) || empty($_POST['senha'])){
        header('Location: login.html');
        exit();
    }

    $nomeusuario = $_POST['nomeUsuario'];
    $senha = $_POST['senha'];

    $stmt = $con->prepare("SELECT `nomeUsuario`, `senha` FROM `usuario` WHERE `nomeUsuario` = :nomeUsuario and `senha` = :senha");

    $stmt->bindparam(":nomeUsuario", $nomeUsuario);
    $stmt->bindValue(":senha", md5($senha));
    $stmt->execute();

    if($stmt->rowCount() == 0){
        echo "Usuário ou senha incorretos.";
        ?>
            <button><a href="login.html">Voltar</a></button>
        <?php
    }else{
        header("Location: lista.php");
    }
?>
