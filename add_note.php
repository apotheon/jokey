<?php

$db = mysqli_connect('localhost', 'root', 'root', 'scotchbox') or die(
  'connection failed'
);

$note = mysqli_real_escape_string($db, $_POST['note']);

$result = mysqli_query(
  $db, "INSERT INTO notes (note) VALUES ('$note')"
);

echo $result;

if ($result) {
  header('Location: ' . '/index.php');
} else {
  echo 'ERROR: ' . mysqli_error($db);
}

mysqli_close($db);

?>
