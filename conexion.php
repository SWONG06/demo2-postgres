<?php

	function conexion(){

	$host = "host=autorack.proxy.rlwy.net";
	$port = "port=47797";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=zGRVNQWBKscmTYgOEVyvNOxtvrLOpZOV";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>