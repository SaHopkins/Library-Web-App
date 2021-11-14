<?php
var_dump($_POST);
session_start();
if (isset($_POST['submit'])) {
  require_once("logininit.php");

  //$username = $_POST['username'];
  // $password = $_POST['password'];

  if (empty($_POST['username']) || empty($_POST['password'])) {
    header("Location: ../login.php?error=emptyfields");
    exit();
  } else {
      // prevent SQL Injection by preparing
      if ($stmt = $conn->prepare('SELECT username, password FROM users WHERE username = ?')) {
        $stmt ->bind_param('s', $_POST['username']);
        $stmt ->execute();
        $stmt->store_result();

        //check the account exists
        if ($stmt->num_rows > 0) {
          $stmt->bind_result($userid, $password);
          $stmt->fetch();
          if ($password === $_POST['password']){
            //echo (password_hash($password, PASSWORD_DEFAULT));
          }
          echo $password;
          //verify $password
          if(password_verify($password, $_POST['password'])){
            //Successful verification, generate session
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
		        $_SESSION['name'] = $_POST['username'];
		        $_SESSION['id'] = $userid;
            echo "welcome ". $_SESSION['name'];
          } else {
            echo "incorrect username/password 1";
          }

      } else {
        echo "incorrect username/password 2";
      } $stmt->close();
    }}}

?>
