<?php 
session_start();

if (!isset($_SESSION['role'])){
header("Location: login.php");
}
else {
    $username = $_SESSION['name'];
}
?>