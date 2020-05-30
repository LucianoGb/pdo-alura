<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$dbDirectory = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $dbDirectory);

$student = new Student(null, 'Luciano Gouveia', new \DateTimeImmutable('1989-07-13'));

$sqlInsert = "INSERT INTO studantes (name, birth_date) VALUES ('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}');";

var_dump($pdo->exec($sqlInsert));

$select = "SELECT * FROM studantes";
echo $select;

