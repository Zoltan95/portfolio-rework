<?php

function add_enquiry($fname, $lname, $email, $subject, $message) {
    include 'connection.php';
        $sql = 'INSERT INTO enquiry(first_name, last_name, email, subject, message)
        VALUES(?, ?, ?, ?, ?)';
    try {
        $results = $db->prepare($sql);
        $results -> bindValue(1, $fname, PDO::PARAM_STR);
        $results -> bindValue(2, $lname, PDO::PARAM_STR);
        $results -> bindValue(3, $email, PDO::PARAM_STR);
        $results -> bindValue(4, $subject, PDO::PARAM_STR);
        $results -> bindValue(5, $message, PDO::PARAM_STR);
        $results -> execute();
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "<br>";
        return false;
    }
    return true;
}

?>