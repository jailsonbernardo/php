<?php

session_id('it94p2riff8g8u3a3epr0pr3d2');

require_once("./config.php");

//gera um novo id para a sessão
echo session_regenerate_id();

echo session_id();

echo "<br>";

var_dump($_SESSION);


