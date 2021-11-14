<?php
require_once("init.php");


$search = $_POST['searchQuery'];
/*  *Debug*
var_dump($_POST);
echo ($search);

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
            <li><a href="catalogue.php">Catalogue</a></li>
            <li class="login"><a href="login.php">Log In</a></li>
        </ul>
    </nav>
        <div class="grid-container">
          <?php
          $query = ("SELECT * FROM books WHERE name LIKE '%$search%' ORDER BY name");
            /* *Debug* if (false===$query){
              echo($mysqli->error);
            } else {
              echo('query success');
            } */
            $result = $conn->query($query);
            $count = mysqli_num_rows($result);
            if(!empty($search)){
              if ($count>=1){
                while ($row = $result->fetch_assoc()) {
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
              }else{
                  echo("0 results found");}
            }else{
              echo("0 results found");} ?>
        </div>
  </body>

<?php
?>
