<?php
include 'connection.php';
include 'list.php';
$timezones = array(
    'SP' => 'America/Sao_Paulo',
    'BA' => 'America/Bahia'
);

date_default_timezone_set($timezones['SP']);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & Apache</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <h1>Hello World</h1>
        <h2>Data de hoje: <?= date('d/m/Y H:i:s') ?></h2>
        <?= fnListarUsuarios() ?>
    </div>
</body>

</html>