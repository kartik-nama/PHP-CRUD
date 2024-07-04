<?php

// Connection To DB
$servername = "localhost";
$username = "root";
$password = "";
$database = "message";


// Create A Connection
$conn = mysqli_connect($servername, $username, $password, $database);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `message-table` WHERE `message-table`.`sno` = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location:view.php');
    }


}

?>