<?php

    if(session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    $fname = "";
    $lname = "";
    $email = "";
    $subject = "";
    $message = ""; 

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
                $fname = test_input($_POST['fname']);      
                $lname = test_input($_POST['lname']);
                $email = test_input($_POST['email']);
                $subject = test_input($_POST['subject']);
                $message = test_input($_POST['message']);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $err = 2;
                $_SESSION["fname"] = $name;
                $_SESSION["lname"] = $company;
                $_SESSION["email"] = $email;
                $_SESSION["subject"] = $telephone;
                $_SESSION["message"] = $message;
                $_SESSION["error"] = $err;

                return header("Location: /portfolio-rework/inc/pages/contact.php");
            } else {
                
                session_unset();
                
                $err = 0;
                $_SESSION["error"] = $err;
                include 'functions.php';
                add_enquiry($fname, $lname, $email, $subject, $message);

                return header("Location: /portfolio-rework/inc/pages/contact.php");
            }
        } else {
            $err = 1; 
            $_SESSION["error"] = $err;
            return header("Location: /portfolio-rework/inc/pages/contact.php");
        }
    }


?>