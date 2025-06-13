<?php
include("conexion.php");
$db = conexion();

$id = intval($_POST['id']);
$doc = $_POST['doc'];
$nom = $_POST['nom'];
$ape = $_POST['ape'];
$dir = $_POST['dir'];
$cel = $_POST['cel'];

$query = "UPDATE persona SET 
            documento = '$doc',
            nombre = '$nom',
            apellido = '$ape',
            direccion = '$dir',
            celular = '$cel'
          WHERE idpersona = $id";

pg_query($db, $query);

header("Location: listar.php");
exit;
?>
