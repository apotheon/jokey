<?php

$note = mysqli_real_escape_string($_POST['note']);

$db = mysqli_connect('localhost', 'root', 'root', 'scotchbox') or die(
  'connection failed'
);

$result = mysqli_query(
  $db, "INSERT INTO notes (note) VALUES ('$note')"
);

echo $result;

if ($result) {
  echo $note;
  // header('Location: ' . '/index.php');
} else {
  echo 'ERROR: ' . mysqli_error($db);
}

mysqli_close($db);

?>
