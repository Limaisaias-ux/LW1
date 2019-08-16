<?php

$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

// Conectano ao Banco
try
{
  $pdo = new PDO($dsn, $dbuser, $dbpass);
    echo "Conexão estabelecida com sucesso!";
}
catch(PDOExcption $e)
{
    echo "Falhou: ".$e->getMessage();
}

