<?php
$host = "nozomi.proxy.rlwy.net";
$port = "42445";
$dbname = "railway";
$user = "postgres";
$password = "DxyIjPxsJLXcrurXRozNmMSSCxzkXTsO";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

return $conn;
?>
