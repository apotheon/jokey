<?php

$note = $_POST['note'];

$db = mysqli_connect('localhost', 'root', 'root', 'scotchbox') or echo 'connection failed';

$result = mysqli_query(
  $db, "INSERT INTO notes (note) VALUES ('$note')"
);

if ($result) {
  mysqli_close($db);
  header('Location: ' . '/index.php');
} else {
  mysqli_close($db);
  echo 'ERROR';
}

?>
