<?php

session_start();

require "connection.php";

if (isset($_SESSION["user"])) {

  $lang = $_POST["lang"];
  $percentage = $_POST["percentage"];



  if (empty($lang)) {
    echo ("Please Enter the programming language");
  } else if (empty($percentage)) {
    echo ("Please Enter valid percentage");
  } else {

    Database::insUpdelete("INSERT INTO `skills`(`skills`,`percentage`)
  VALUES ('" . $lang . "' ,'" . $percentage . "')");

    echo ("Submitted Successfully");
  }
} else {
  echo ("Please Log in first");
}
