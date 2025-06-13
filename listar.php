<?php
include("conexion.php");
$db = conexion();

$result = pg_query($db, "SELECT * FROM persona");

echo "<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>Listado de Personas</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #999; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
        tr:hover { background-color: #f9f9f9; }
        h2 { color: #333; }
        .nav { margin-bottom: 20px; }
        .nav a {
            margin-right: 10px;
            text-decoration: none;
            background: #4CAF50;
            color: white;
            padding: 6px 12px;
            border-radius: 5px;
        }
        .nav a:hover {
            background-color: #45a049;
        }
        .btn {
            padding: 5px 10px;
            margin: 2px;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
        }
        .edit-btn { background-color: #007BFF; }
        .delete-btn { background-color: #dc3545; }
    </style>
</head>
<body>

<h2>Listado de personas registradas</h2>

<div class='nav'>
    <a href='index.php'>➕ Registrar nueva persona</a>
    <a href='index.php'>🏠 Volver al inicio</a>
</div>

<table>
    <tr>
        <th>ID</th>
        <th>Documento</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Dirección</th>
        <th>Celular</th>
        <th>Acciones</th>
    </tr>";
    
while ($row = pg_fetch_assoc($result)) {
    echo "<tr>
            <td>" . htmlspecialchars($row['idpersona']) . "</td>
            <td>" . htmlspecialchars($row['documento']) . "</td>
            <td>" . htmlspecialchars($row['nombre']) . "</td>
            <td>" . htmlspecialchars($row['apellido']) . "</td>
            <td>" . htmlspecialchars($row['direccion']) . "</td>
            <td>" . htmlspecialchars($row['celular']) . "</td>
            <td>
                <a href='editar.php?id=" . $row['idpersona'] . "' class='btn edit-btn'>📝 Editar</a>
                <a href='delete-persona.php?id=" . $row['idpersona'] . "' class='btn delete-btn' onclick=\"return confirm('¿Estás seguro de eliminar este registro?')\">🗑️ Eliminar</a>
            </td>
          </tr>";
}

echo "</table>
</body>
</html>";
?>
