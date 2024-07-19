<?php
$host = 'sql104.infinityfree.com';
$usuario = 'if0_36932245';
$password = 'OFHwzKY3eBZM';
$nombre_base_de_datos = 'if0_36932245_proyecto';
$puerto = '3306';


$conn = new mysqli($host, $usuario, $password, $nombre_base_de_datos, $puerto);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
