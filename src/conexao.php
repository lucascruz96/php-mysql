<?php

$servidor="db";
$usuario="root";
$senha="root";
$database="teste";

$mysqli = new mysqli($servidor, $usuario, $senha, $database);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
