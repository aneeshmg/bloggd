<?php
require "functions.php";

if(isset($_POST['func'])) {
  switch($_POST['func']) {
    case "addPost"      :   echo addPost($_POST['title'], $_POST['text']);
      break;
  }
}
