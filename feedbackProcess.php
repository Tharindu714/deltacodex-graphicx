<?php

session_start();

require "connection.php";

if (isset($_SESSION["user"])) {

    $name = $_POST["feedname"];
    $designation = $_POST["designation"];
    $feedbackpro = $_POST["feedbackpro"];

    if (empty($name)) {
        echo ("Please Enter Customer name");
    } else if (empty($designation)) {
        echo ("Please Enter customer job title");
    } else if (empty($feedbackpro)) {
        echo ("Leave your feedback before submit");
    } else {
        Database::insUpdelete("INSERT INTO `feedback`(`customer_name`,`content`,`designation`)
      VALUES ('" . $name . "','" . $feedbackpro . "','" . $designation . "')");

        echo ("Successfully");
    }

} else {
    echo ("Please Log in first");
}
