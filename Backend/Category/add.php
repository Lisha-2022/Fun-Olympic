<?php 
session_start();
include('../config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];


    if ($title == '' || $title == null) {
        $_SESSION['message'] = "Title Cannot be Empty";
        $_SESSION['msg_type'] = "danger";
        header('Location: ../../add_category.php');
        exit;
    }

    $ok = "SELECT * from categories where title = '$title'";
    $result = $conn->query($ok);
    if (!empty($result) && $result->num_rows >= 1) {
        $_SESSION['message'] = "Category is Already Taken !!!";
        $_SESSION['msg_type'] = "danger";
        header('Location: ../../add_category.php');
        exit;
    }

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