<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="root"; // Mysql password
$db_name="scotchbox"; // Database name
$tbl_name="notes"; // Table name

// Connect to server and select database.
mysqli_connect('localhost', 'root', 'root', 'scotchbox') or die(
  "connection failed"
);

// mysql_connect("$host", "$username", "$password") or die("connection failed");

// mysql_select_db("$db_name") or die("cannot select DB");

$result = mysqli_query("INSERT INTO notes ( note ) VALUES ( '$note' )");

if ($result) {
  mysqli_close();
  header("/");
} else {
  mysqli_close();
  echo "ERROR";
}

?>
