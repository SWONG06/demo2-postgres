<?php
include("conexion.php");
$db = conexion();

// Verificar si llega el ID
if (!isset($_GET['id'])) {
    header("Location: listar.php");
    exit;
}

$id = intval($_GET['id']);
$query = "SELECT * FROM persona WHERE idpersona = $id";
$result = pg_query($db, $query);
$persona = pg_fetch_assoc($result);

// Si no existe el registro
if (!$persona) {
    echo "Registro no encontrado.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Persona</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        label { display: block; margin-top: 10px; }
        input[type='text'] { width: 300px; padding: 5px; }
        input[type='submit'] { margin-top: 15px; padding: 6px 12px; }
    </style>
</head>
<body>
    <h2>Editar Persona</h2>
    <form method="POST" action="editar-post.php">
        <input type="hidden" name="id" value="<?= $persona['idpersona'] ?>">

        <label>Documento:</label>
        <input type="text" name="doc" value="<?= $persona['documento'] ?>">

        <label>Nombre:</label>
        <input type="text" name="nom" value="<?= $persona['nombre'] ?>">

        <label>Apellido:</label>
        <input type="text" name="ape" value="<?= $persona['apellido'] ?>">

        <label>Dirección:</label>
        <input type="text" name="dir" value="<?= $persona['direccion'] ?>">

        <label>Celular:</label>
        <input type="text" name="cel" value="<?= $persona['celular'] ?>">

        <input type="submit" value="Guardar cambios">
    </form>
    <br>
    <a href="listar.php">⬅ Volver a la lista</a>
</body>
</html>
