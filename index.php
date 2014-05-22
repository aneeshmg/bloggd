<?php
require "functions.php";

  if(is_logged_in()) {
    header("Location: home.php");
  }
?>

<html>

  <head>
    <title>Bloggd</title>
    <link type="text/css" rel="stylesheet" href="css/main.css" />
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
  </head>

  <body>

    <div class="nav-bar">
      <ul>
        <li id="logo"><a href="index.php">Bloggd</a></li>
        <li><a href="home.php">Home</a></li>
        <li><a href="viewall.php">View Posts</a></li>
        <li><a href="#">About</a></li>
        <li style="float:right;padding-right:10px;padding-top:7px;">
          <form action="login.php" method="post">
            <input type="text" placeholder="Enter email" name="email">
            <input type="password" placeholder="Enter password" name="pass">
            <input type="submit" value="Login" class="btn">
          </form>
        </li>
      </ul>

    </div>

    <div class="container">
      <? randomPosts(20); ?>
    </div>

  </body>
</html>
