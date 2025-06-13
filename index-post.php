<?php
include("conexion.php");
$db = conexion();

$doc = $_POST["doc"];
$nom = $_POST["nom"];
$ape = $_POST["ape"];
$dir = $_POST["dir"];
$cel = $_POST["cel"];

$sql = "INSERT INTO persona VALUES (DEFAULT, '$doc', '$nom', '$ape', '$dir', '$cel')";
pg_query($conn, $sql); // ← usamos $conn aquí

session_start();
$_SESSION['message'] = 'Persona registrada correctamente...';

header("Location: index.php");
exit;
?>
