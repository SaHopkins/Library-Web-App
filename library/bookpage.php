<?php
/*

  UNUSED - PAGE IN DEVELOPMENT?


*/
require_once("init.php");
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
          <li class="login">Log in</li>
      </ul>
  </nav>
      <div class="grid-container">
        <?php



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
      </div>
</body>

<?php
?>
