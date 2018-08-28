<?php
$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root");

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha)VALUES(:LOGIN, :PASSWORD)");
$login = "Jailson";
$senha = "12345";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $senha);

$stmt->execute();

echo 'Inserido Ok!!';