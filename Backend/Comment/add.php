<?php 
session_start();
include('../config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gameId = $_POST['game_id'];
    $userId = $_SESSION['id'];
    $comment = $_POST['comment'];

    if ($comment == '' || $comment == null) {
        $_SESSION['message'] = "Comment Cannot be Empty";
        $_SESSION['msg_type'] = "danger";
        header('Location: ../../video-player.php?id='.$gameId);
        exit;
    }

    $sql = "INSERT into comments (`user_id`, game_id, comment) values ('$userId', '$gameId', '$comment')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "Comment Posted Successfully";
        $_SESSION['msg_type'] = "success";
        header('Location: ../../video-player.php?id='.$gameId);
    } else {
        $_SESSION['message'] = "Error posting comment: " . $conn->error;
        $_SESSION['msg_type'] = "danger";
        header('Location: ../../video-player.php?id='.$gameId);
    }
    $conn->close();

}

?>