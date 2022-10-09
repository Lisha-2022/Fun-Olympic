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

    $sql = "UPDATE medal SET country='$country', gold='$gold', silver='$silver', bronze='$bronze', total='$total' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "Medal Updated Successfully";
        $_SESSION['msg_type'] = "success";
        header('Location: ../../medal.php');
    } else {
        $_SESSION['message'] = "Error updating record: " . $conn->error;
        $_SESSION['msg_type'] = "danger";
        header('Location: ../../medal.php');
    }
    $conn->close();

}

?>