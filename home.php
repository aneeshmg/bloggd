<?php
require "functions.php";

if(!is_logged_in()) {
  echo "<script>alert('You need to login first');</script>";
  header("Location: index.php");
}

?>

<html>

  <head>
    <title>Home | <? echo $_SESSION['user']; ?></title>
    <link type="text/css" rel="stylesheet" href="css/main.css" />
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
  </head>

  <body>

    <div class="nav-bar">
      <ul>
        <li id="logo"><a href="index.php">Bloggd</a></li>
        <li><a href="viewall.php">View posts</a></li>
        <li style="float:right;padding-right:10px;padding-top:7px;">
          <form action="logout.php" method="post">
            <input type="submit" value="Logout" class="btn">
          </form>
        </li>
      </ul>

    </div>

    <div class="container">
      <div class="header"><h1>Welcome <? echo $_SESSION['user']; ?></h1></div><br>

      <input type="text" id="post-title" placeholder="Post Title" required="required"><br><br>
      <textarea cols="130" rows="15" id="new-post" placeholder="Write new post..." wrap="soft"></textarea><br><br>
      <center><button class="btn wide" id="save-post">Post!</button></center>

      <h2 style="font-family:monospace;color:#ead3a8;">Your posts:</h2><br>

      <div id="view-space"><? postsBy($_SESSION['email']); ?></div>

    </div>

  </body>
</html>
