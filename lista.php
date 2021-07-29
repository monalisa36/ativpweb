<?php
    include('conexao.php');

    ?>
        <form method="POST" name="Formulário" action="busca.php">
            <br>
            <label for="busca">Busca por usuário: </label>
            <input type="text" name="busca">
            <br>
            <button type="submit" value="Send">Busca</button>
            <br>
        </form>
    <?php

    $stmt = $conexao->prepare("SELECT `nomeCompleto` FROM `usuario`");
    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

    for ($i=0; $i < count($resultado); $i++) { 
        echo "Usuário: ".($i+1)."<br>";
        foreach ($resultado[$i] as $key => $value) {
            echo $key.": ".$value."<br>";
        }
        echo "<br>";
    }
?>
