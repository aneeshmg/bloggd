<?php
require "functions.php";

?>

<html>

  <head>
    <title>Bloggd | View Posts</title>
    <link type="text/css" rel="stylesheet" href="css/main.css" />
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
    <style>
      body {
        background: #000;
      }
    </style>
  </head>

  <body>

    <div class="nav-bar">
      <ul>
        <li id="logo"><a href="index.php">Bloggd</a></li>
        <li><a href="home.php">Home</a></li>
        <li><a href="#">About</a></li>
      </ul>

    </div>

    <div class="container">
      <? randomPosts(20); ?>
    </div>

  </body>
</html>
