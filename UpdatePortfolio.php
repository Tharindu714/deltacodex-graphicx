<?php

session_start();

require "connection.php";

if (isset($_SESSION["user"])) {

    $customers = $_POST["cus"];
    $totalexp = $_POST["totalexp"];
    $uiexp = $_POST["uiexp"];
    $uicount = $_POST["uicount"];
    $graphicworks = $_POST["graphicworks"];


    if (empty($totalexp)) {
        echo ("Please Enter Number Of Years");
    } else if ($totalexp == "0" | $totalexp < 0) {
        echo ("Invalid Year Count");
    } else if (!is_numeric($totalexp)) {
        echo ("Please input for Correct Year Count");
    } else {
        Database::insUpdelete("UPDATE `company_details` SET `totalexp` = '" . $totalexp . "' WHERE `id` = '1';");
    }


    if (empty($uiexp)) {
        echo ("Please Enter Number Of Years");
    } else if ($uiexp == "0" | $uiexp < 0) {
        echo ("Invalid Year Count");
    } else if (!is_numeric($uiexp)) {
        echo ("Please input for Correct Year Count");
    } else {
        Database::insUpdelete("UPDATE `company_details` SET `uiexp` = '" . $uiexp . "' WHERE `id` = '1';");
    }


    if (empty($customers)) {
        echo ("Please Enter Customer Count");
    } else if (!is_numeric($customers)) {
        echo ("Please input valid count of Customer");
    } else {
        Database::insUpdelete("UPDATE `company_details` SET `happyclients` = '" . $customers . "' WHERE `id` = '1';");
    }

    if (empty($uicount)) {
        echo ("Please Enter Finished UI/UX count");
    } else if (!is_numeric($uicount)) {
        echo ("Please input valid UI/UX count");
    } else {
        Database::insUpdelete("UPDATE `company_details` SET `uicount` = '" . $uicount . "' WHERE `id` = '1';");
    }

    if (empty($graphicworks)) {
        echo ("Please Enter Finished graphic Design count");
    } else if (!is_numeric($graphicworks)) {
        echo ("Please input valid graphic Design count");
    } else {
        Database::insUpdelete("UPDATE `company_details` SET `graphicworks` = '" . $graphicworks . "' WHERE `id` = '1';");
    }
} else {
    echo ("Please Log in first");
}
