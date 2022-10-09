<?php 
session_start();
include('../config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description= $_POST['description'];

    if (($_FILES['thumbnail']['name']!="")){
        
        // Where the file is going to be stored
            $target_dir = "../../uploads/";
            $file = $_FILES['thumbnail']['name'];
            $path = pathinfo($file);
            $filename = $path['filename'];
            $ext = $path['extension'];
            $temp_name = $_FILES['thumbnail']['tmp_name'];
            $path_filename_ext = $target_dir.$filename.".".$ext;
         
        // Check if file already exists
        
         $thumbnail= $filename.'.'.$ext;
         
         move_uploaded_file($temp_name,$path_filename_ext);
        
        }

    $sql = "INSERT into games (gametitle, category, datetime) values ('$title', '$category','$datetime')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "Games Added Successfully";
        $_SESSION['msg_type'] = "success";
        header('Location: ../../games.php');
    } else {
        $_SESSION['message'] = "Error updating record: " . $conn->error;
        $_SESSION['msg_type'] = "danger";
        header('Location: ../../games.php');
    }
    $conn->close();

}

?>