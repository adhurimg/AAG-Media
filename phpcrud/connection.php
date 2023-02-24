<?php
$host = "localhost";
$port = 5432;
$db_name = "crud";
$user = "kk";
$password = '';
$connection_string = "host={$host} port={$port} dbname={$db_name} user={$user} password={$password}";

$db_conn = pg_connect($connection_string);

?>