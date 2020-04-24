<?php

function fnListarUsuarios()
{
    include 'connection.php';
    $sql = "SELECT * FROM usuario";
    $query = $pdo->prepare($sql);
    $query->execute();
    foreach ($query as $r) {
        $id = $r['id'];
        $nome = $r['nome'];
        $email = $r['email'];
        $senha = $r['senha'];
        echo "<p>$id - $nome - $email - $senha</p>";
    }
}
