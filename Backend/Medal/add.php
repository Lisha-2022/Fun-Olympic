<?php 
session_start();
include('../config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $country = $_POST['country'];
    $gold= $_POST['gold'];
    $silver = $_POST['silver'];
    $bronze = $_POST['bronze'];
    $total = $_POST['total'];

    $sql = "INSERT into medal_standing (country,gold,silver,bronze,total) values ('$country','$gold','$silver','$bronze','$total')";


    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "Medal Added Successfully";
        $_SESSION['msg_type'] = "success";
        header('Location: ../../medal.php');
    } else {
        $_SESSION['message'] = "Error adding record: " . $conn->error;
        $_SESSION['msg_type'] = "danger";
        header('Location: ../../medal.php');
    }
    $conn->close();

}

?>