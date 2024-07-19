<?php
$host = '127.0.0.1';
$usuario = 'root';
$password = '';
$nombre_base_de_datos = 'proyecto';
$puerto = '3306';


$conn = new mysqli($host, $usuario, $password, $nombre_base_de_datos, $puerto);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
