<?php 
session_start();

if (!isset($_SESSION['has_paid']) || $_SESSION['has_paid'] == 0){
    header("Location: payment.php");
}
?>