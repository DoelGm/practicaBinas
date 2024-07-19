<?php
session_start();
include 'conexion.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $sql = "DELETE FROM productos WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Producto eliminado correctamente');</script>";
        echo "<style> body { background-color: #c0d8f7; } </style>";
        header("refresh:1;url=elimina.html"); 
    } else {
        echo "<script>alert('Error al eliminar el producto');</script>";
        echo "<style> body { background-color: #c0d8f7; } </style>";
        header("refresh:1;url=elimina.html"); 
    }

    mysqli_close($conn); 
}
?>