<?php 
session_start();
include('../config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $time = $_POST['time'];

    $sql = "INSERT into game_schedule (game_title, game_time) values ('$title', '$time')";


    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "Schedule Added Successfully";
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