<?php

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin;");

$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($result);

