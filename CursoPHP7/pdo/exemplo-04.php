<?php
$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");
$login = "Jailson";
$senha = "12345";
$id = 3;
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $senha);
$stmt->bindParam(":ID", $id);
$stmt->execute();

echo 'Atualizado Ok!!';