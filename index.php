<html>
  <head>
    <title>Jokey Title</title>
  </head>

  <body>
    <h1>Jokey Heading</h1>
    <?php $db = mysqli_connect('localhost', 'root', 'root', 'scotchbox'); ?>

    <form method="post" action="add_note.php">
      <textarea name="note" type="text" cols="40" rows="4"></textarea>
      <br />
      <input type="submit" name="save" value="save" />
    </form>
  </body>
</html>
