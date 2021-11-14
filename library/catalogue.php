<?php
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
            <h3><a href="index.html">College</a></h3>
        </div>
        <ul>
            <li><a href="#">Catalogue</a></li>
            <li class="login"><a href="login.php">Log In</a></li>
        </ul>
    </nav>
        <div class="grid-container">
          <?php
          $statement = $conn->query("SELECT * FROM books ORDER BY name");
          while ($row = $statement->fetch_assoc()) {
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
