<?php
include("conexion.php");
$con = conexion();

$id = $_POST["id"];

$sql = "DELETE FROM persona WHERE idpersona = $1";
pg_query_params($con, $sql, array($id));

header("Location: list-personas.php");
?>