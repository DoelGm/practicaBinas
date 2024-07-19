<?php
session_start();
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Consulta de Producto</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-image: url('img/la.webp'); 
        background-size: cover;
        background-position: center;
    }
    .navbar {
        display: flex;
        background-color: rgba(0, 0, 0, 0.5);
        overflow: hidden;
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 1000;
    }
    .navbar a {
        flex: 1;
        padding: 14px 20px;
        display: block;
        color: white;
        text-align: center;
        text-decoration: none;
    }
    .navbar a:hover {
        background-color: #575757;
    }
    .container {
        padding: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .resultado {
        color: white;
        background-color: rgba(0, 0, 0, 0.5);
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        text-align: center;
    }
</style>
</head>
<body>
<div class="navbar">
    <a href="inserta.html">Insertar</a>
    <a href="elimina.html">Eliminar</a>
    <a href="actualizar.html">Actualizar</a>
    <a href="consultar.php">Consultar</a>
</div>

<div class="container">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $sql = "SELECT * FROM productos WHERE id='$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<div class='resultado'>";
        echo "<h2>Resultado de la Consulta</h2>";
        echo "<p>ID: " . $row["id"] . "</p>";
        echo "<p>Nombre: " . $row["nombre"] . "</p>";
        echo "<p>Categoría: " . $row["categoria"] . "</p>";
        echo "<p>Precio: $" . $row["precio"] . "</p>";
        echo "</div>";
    } else {
        echo "<div class='resultado'>";
        echo "<h2>Producto no encontrado</h2>";
        echo "<p>No se encontró ningún producto con el ID proporcionado.</p>";
        echo "</div>";
    }
}
$conn->close();
?>
</div>
</body>
</html>