<?php

// caminho absoluto para o banco
$dbDirectory = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $dbDirectory);

echo "Conectado";

$pdo->exec('CREATE TABLE students (id INTEGER PRIMARY KEY , name TEXT, birth_date TEXT)');