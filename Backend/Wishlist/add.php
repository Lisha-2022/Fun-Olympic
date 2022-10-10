<?php 
session_start();
include('../config.php');
    $user_id = $_SESSION['id'];
    $game_id = $_GET['id'];

    $sqlll = "INSERT into wishlist (`game_id`, `user_id`) values ('$game_id', '$user_id')";

    if ($conn->query($sqlll) === TRUE) {
        header('Location: ../../video-player.php?id='.$game_id);
    } else {
        echo $conn->error;
        exit;
        header('Location: ../../video-player.php?id='.$game_id);
    }
    $conn->close();

?>