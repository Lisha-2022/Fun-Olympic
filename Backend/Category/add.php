<?php 
session_start();
include('../config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];

    $sql = "INSERT into categories (title) values ('$title')";


    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "Category Added Successfully";
        $_SESSION['msg_type'] = "success";
        header('Location: ../../category.php');
    } else {
        $_SESSION['message'] = "Error adding record: " . $conn->error;
        $_SESSION['msg_type'] = "danger";
        header('Location: ../../category.php');
    }
    $conn->close();

}

?>