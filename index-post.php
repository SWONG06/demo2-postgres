<?php
include("conexion.php");
$conn = conexion();

$doc = $_POST["doc"];
$nom = $_POST["nom"];
$ape = $_POST["ape"];
$dir = $_POST["dir"];
$cel = $_POST["cel"];

$sql = "insert into persona values(default,'$doc','$nom','$ape','$dir','$cel')";
pg_query($con, $sql);

session_start();
$_SESSION['message'] = 'Persona registrada correctamente...';

header("location:index.php");
?>