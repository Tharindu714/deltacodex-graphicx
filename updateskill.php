<?php

session_start();

require "connection.php";

if (isset($_SESSION["user"])) {

    $upercentage = $_POST["upercentage"];
    $ulang = $_POST["ulang"];

    if (!empty($upercentage)) {
        Database::insUpdelete("UPDATE `skills` SET `percentage` = '" . $upercentage . "' WHERE `skills` = '" . $ulang . "';");
    }

    echo ("success");
} else {
    echo ("Please Log in first");
}
