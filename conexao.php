<?php 

$usuario = 'root';
$senha = 'root';
$database = 'fotogelo';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);
if ($mysqli->connect_error) {
    echo 'Falha ao conectar ao banco de dados: ' . $mysqli->connect_error;
    exit();
}