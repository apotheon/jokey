<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="root"; // Mysql password
$db_name="scotchbox"; // Database name
$tbl_name="notes"; // Table name

// Connect to server and select database.
// $db = mysqli_connect('localhost', 'root', 'root', 'scotchbox');

mysql_connect("$host", "$username", "$password") or die("connection failed");

mysql_select_db("$db_name") or die("cannot select DB");

$result = mysql_query("INSERT INTO notes ( note ) VALUES ( '$note' )");

if ($result) {
  mysql_close();
  header("/");
} else {
  mysql_close();
  echo "ERROR";
}

?>
