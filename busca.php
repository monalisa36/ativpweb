<?php
    include('conexao.php');

    if(empty($_POST['busca'])){
        header('Location: lista.php');
        exit();
    }

    $buscar = $_POST['busca'];

    $stmt = $conexao->prepare("SELECT `nomeCompleto` FROM `usuario` WHERE `nomeCompleto` = :busca");

    $stmt->bindparam(":busca", $busca);
    $stmt->execute();

    if($stmt->rowCount() == 0){
        echo "Usuário não encontrado.<br>";
    }else{
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "Usuário: <br>";
        foreach ($resultado as $key => $value) {
            echo $key.": ".$value."<br>";
        }
        echo "<br>";
    }
    
    ?>
        <button><a href="lista.php">Voltar</a></button>
    <?php
?>
