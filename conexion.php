<?php

	function conexion(){

	$host = "host=meticulous-empathy.railway.internal";
	$port = "port=5432";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=zGRVNQWBKscmTYgOEVyvNOxtvrLOpZOV";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>