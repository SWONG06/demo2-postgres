<?php
function conexion() {
    $host = "nozomi.proxy.rlwy.net";
    $port = "42445";
    $dbname = "railway";
    $user = "postgres";
    $password = "DxyIjPxsJLXcrurXRozNmMSSCxzkXTsO";

    $db = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

    return $db;
}
?>
