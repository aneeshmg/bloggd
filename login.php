<?php
require "functions.php";

if(isset($_POST['email']) && isset($_POST['pass'])) {
  login($_POST['email'], $_POST['pass']);
}

