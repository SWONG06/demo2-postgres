<?php
$host = "switchback.proxy.rlwy.net";
$port = "29708";
$dbname = "railway";
$user = "postgres";
$password = "FVQUdwjdylMFuwbHLzNhTBTCmOSeChAh";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("Error al conectar con la base de datos.");
}
?>
