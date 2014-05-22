<?php


  function randomPosts($n) {
    $posts = "";
    $text = "Some text written by the author on some topic";
    for($i = 0; $i < 4; $i++)
      $text .= $text;
    for($i = 0; $i < $n; $i++) {
      $posts .= "<div class='post'><h2>Post Name</h2><u><p>$text</p></u><p><i>--Author<i></p></div><br><hr><br>";
    }
    echo $posts;
  }

  function postsBy($email) {
    randomPosts(5);
  }

  function login($email, $pass) {
    if($email === "aneesh") {
      if($pass === "general") {
        session_start();
        $_SESSION['logged_in_status'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['user'] = getUser($email);
        header("Location: home.php");
      }
      else {
        echo "<script>alert('Incorrect Password!');</script>";
      }
    }
    else {
      echo "<script>alert('Not registered!');</script>";
    }
  }

  function getUser($email) {
    return "User A";
  }

  function is_logged_in() {
    session_start();
    return $_SESSION['logged_in_status'];
  }

  function addPost($title, $text) {
    session_start();
    $user = $_SESSION['user'];
    return "<div class='post'><h2>$title</h2><u><p>$text</p></u><p><i>-$user<i></p></div><br><hr><br>";
  }
















