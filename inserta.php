<?php
session_start();
require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $precio = $_POST['precio'];

    $id = mysqli_real_escape_string($conn, $id);
    $nombre = mysqli_real_escape_string($conn, $nombre);

    $inserta = "INSERT INTO productos (id, nombre, categoria, precio) VALUES ('$id','$nombre','$categoria', '$precio')";

    if ($conn->query($inserta) === TRUE) {
        echo "<script language='javascript'> alert ('PRODUCTO REGISTRADO CON EXITO ')</script>";
        echo "<style> body { background-color: #c0d8f7; } </style>";
        header ("refresh:1;url=inserta.php");
        mysqli_close($conn);  
  } else {
      echo "<script language='javascript'> alert ('NO SE HA ENVIADO INFORMACION')</script>";
      echo "<style> body { background-color: #c0d8f7; } </style>";
        header ("refresh:1;url=inserta.php");
  }
}
?>
