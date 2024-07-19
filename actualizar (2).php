<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Actualizar Producto</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-image: url('img/la.webp'); 
        background-size: cover; 
        background-position: relative; 
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
        margin-top: 60px; 
        padding: 20px;
    }
    .registro-form {
        background-color: rgba(0, 0, 0, 0.351); 
        color: white; 
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        margin: 0 auto;
    }
    .registro-form h2 {
        text-align: center;
    }
    .form-group {
        margin-bottom: 15px;
    }
    .form-group label {
        display: block;
        margin-bottom: 8px;
    }
    .form-group input {
        width: calc(100% - 16px);
        padding: 8px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .form-group input[type="number"] {
        width: auto;
    }
    .form-group button {
        background-color: #d2a153;
        color: white;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-top: 10px;
        cursor: pointer;
        border-radius: 4px;
    }
</style>
</head>
<body>

    <div class="navbar">
        <a href="inserta.html">Insertar</a>
        <a href="elimina.html">Eliminar</a>
        <a href="actualizar.html">Actualizar</a>
        <a href="index.html">Consultar</a>
    </div>

    <div class="container">
        <div class="registro-form">
            <form action="actualizar.php" method="post">
                <h2>Actualizar Producto</h2>
                <div class="form-group">
                    <label for="id">ID del Producto a Actualizar:</label>
                    <input type="text" id="id" name="id" required>
                </div>
                <div class="form-group">
                    <label for="nombre">Nuevo Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="categoria">Nueva Categoría:</label>
                    <input type="text" id="categoria" name="categoria" required>
                </div>
                <div class="form-group">
                    <label for="precio">Nuevo Precio:</label>
                    <input type="number" id="precio" name="precio" step="0.01" required>
                </div>
                <div class="form-group">
                    <button type="submit">Actualizar Producto</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>