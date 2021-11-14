<?php
require_once("pdoconfig.php");
require_once("init.php");

/*  Debug
$statement = $conn->query("SELECT name FROM books");

while ($row = $statement->fetch()) {
  echo $row['name'] . "</br>";
}
*/
?>
  <head>
    <link rel="stylesheet" type="text/css" href="css.css">
  </head>
  <body>
    <nav>
        <div id="logo">
            <h3>College</h3>
        </div>
        <ul>
            <li>Catalogue</li>
            <li class="login">Log in</li>
        </ul>
    </nav>
        <div class="grid-container">
          <?php
          $statement = $conn->query("SELECT * FROM books");
          while ($row = $statement->fetch()) {
            ?>
            <div class="selected">
              <?php echo $row['name'] . "</br>"; ?>
            </div>
            <div class ="contents">
              <?php echo $row['author'] . "</br>" .
              $row['genre'] . "</br>" .
              $row['isbn'] . "</br>".
              $row['description']?>
            </div>
          <?php }
          ?>
        </div>
  </body>

<?php
?>
