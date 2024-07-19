<?php
session_start();
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $precio = $_POST['precio'];

    $id = mysqli_real_escape_string($conn, $id);
    $nombre = mysqli_real_escape_string($conn, $nombre);

    $actualizar = "UPDATE productos SET nombre='$nombre', categoria='$categoria', precio='$precio' WHERE id='$id'";

    if ($conn->query($actualizar) === TRUE) {
        echo "<script language='javascript'> alert ('PRODUCTO ACTUALIZADO CON EXITO ')</script>";
        echo "<style> body { background-color: #c0d8f7; } </style>";
        header ("refresh:1;url=actualizar.html");
        mysqli_close($conn);  
  } else {
      echo "<script language='javascript'> alert ('NO SE HA ACTUALIZADO LA INFORMACION')</script>";
      echo "<style> body { background-color: #c0d8f7; } </style>";
        header ("refresh:1;url=actualizar.html");
  }
}
?>

