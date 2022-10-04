<?php 
session_start();
include('../config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $name= $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $sql = "UPDATE users SET name='$name', email='$email', phone='$phone', address='$address' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "User Updated Successfully";
        $_SESSION['msg_type'] = "success";
        header('Location: ../../users.php');
    } else {
        $_SESSION['message'] = "Error updating record: " . $conn->error;
        $_SESSION['msg_type'] = "danger";
        header('Location: ../../users.php');
    }
    $conn->close();

}

?>