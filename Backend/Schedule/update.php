<?php 
session_start();
include('../config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $time = $_POST['time'];

    $sql = "UPDATE game_schedule SET game_title='$title', game_time='$time' WHERE id=$id";


    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "Schedule Updated Successfully";
        $_SESSION['msg_type'] = "success";
        header('Location: ../../schedule.php');
    } else {
        $_SESSION['message'] = "Error updating record: " . $conn->error;
        $_SESSION['msg_type'] = "danger";
        header('Location: ../../scheule.php');
    }
    $conn->close();

}

?>