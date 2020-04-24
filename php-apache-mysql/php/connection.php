<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=teste;charset=utf8", "root", "root");
} catch (PDOException $err) {
    $msg = $err->getMessage();
    echo "Erro ao conectar ao banco de dados: $msg";
}
