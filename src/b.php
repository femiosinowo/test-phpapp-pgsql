<?php

$conn = new PDO("pgsql:host=127.0.0.1;dbname=phptest;user=myuser;password=mypassword;");

$sql = 'SELECT datname FROM pg_database WHERE datistemplate = false;';

$q = $conn->query($sql);

while ($row = $q->fetch()){
  print_r($row);
}

?>
