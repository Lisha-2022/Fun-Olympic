<?php 
session_start();
include('../config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];

    $sql = "UPDATE categories SET title='$title' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "Category Updated Successfully";
        $_SESSION['msg_type'] = "success";
        header('Location: ../../category.php');
    } else {
        $_SESSION['message'] = "Error updating record: " . $conn->error;
        $_SESSION['msg_type'] = "danger";
        header('Location: ../../category.php');
    }
    $conn->close();

}

?>