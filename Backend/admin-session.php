<?php 
session_start();

if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){
    $username = $_SESSION['name'];
}
else {
    header("Location: login.php");
}
?>