<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios  WHERE idusuario = :ID");

$id = 2;

$stmt->bindParam(":ID", $id);

$stmt->execute();

//$conn->rollBack();
$conn->commit();


echo 'DELETE Ok!!';