<?php 
session_start();
include('../config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password == $confirm_password){
    $password = sha1($password);
    $sql = "UPDATE users SET password='$password' WHERE(id=$id and role='user')";
        if ($conn->query($sql) === TRUE) {
            $_SESSION['message'] = "Password Updated Successfully";
            $_SESSION['msg_type'] = "success";
            header('Location: ../../users.php');
        } else {
            $_SESSION['message'] = "Error updating record: " . $conn->error;
            $_SESSION['msg_type'] = "danger";
            header('Location: ../../reset_password.php?id='.$id);
        }
        $conn->close();
    }
    else{
        $_SESSION['message'] = "Password Mismatch";
        $_SESSION['msg_type'] = "danger";
        header('Location: ../../reset_password.php?id='.$id);
    }

}

?>