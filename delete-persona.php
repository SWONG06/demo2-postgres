<?php
include("conexion.php");
$db = conexion();

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "DELETE FROM persona WHERE idpersona = $id";
    pg_query($db, $query);
}

header("Location: listar.php");
exit;
?>
