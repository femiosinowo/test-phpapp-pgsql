<?php

// Example use of getenv()
//$ip = getenv('REMOTE_ADDR');

// Or simply use a Superglobal ($_SERVER or $_ENV)
//$ip = $_SERVER['REMOTE_ADDR'];

// Connect to the database
//$dbconn = pg_connect("host=database dbname=admin user=admin password=4LyM7F39w97n");
$host = $_SERVER['DB_HOST']; 
$port = $_SERVER['DB_PORT'];
$dbname = $_SERVER['DB_NAME'];
$dbuser = $_SERVER['DB_USER'];
$dbpassword = $_SERVER['DB_PASSWORD'];

//$connStr = "host=$host port=5432 dbname=postgres user=postgres options='--application_name=$appName'";

$conn_string = "host=$host port=$port dbname=$dbname user=$dbuser password=$dbpassword";
$dbconn = pg_connect($conn_string);

// Show the client and server versions
print_r(pg_version($dbconn));

?>
