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

    <?php $result = mysqli_query($db, "select * from notes"); ?>

    <table>
      <?php
        while ($row = mysqli_fetch_array($result)) {
          echo <<EOL
          <tr>
            <td style="padding: 1em;"> $row['created'] </td>
            <td style="border: thin solid black; padding: 1em;"> $row['note'] </td>
          </tr>
          EOL;
        }
      ?>
    </table>
  </body>
</html>
