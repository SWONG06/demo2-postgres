<?php
include("conexion.php");
$con = conexion();

$id = $_POST["idpersona"];

$sql = "DELETE FROM persona WHERE id = $1";
pg_query_params($con, $sql, array($id));

header("Location: list-personas.php");
?>