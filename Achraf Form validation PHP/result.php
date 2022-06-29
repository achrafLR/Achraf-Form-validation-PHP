<?php
    $nameErr = $emailErr = $phoneErr = "";
    $name = $email = $phone = $comment = $website = "";
    $color = "color: #F1F1F1;";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
        }
        
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
        }

        if (empty($_POST["phone"])) {
            $phoneErr = "phone is required";
        } else {
            $phone = test_input($_POST["phone"]);
        }
            
        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if (empty($phoneErr) && empty($emailErr) && empty($nameErr)) {
        include "suc.php";
    } else {
        include "index.php";
    }
?>
