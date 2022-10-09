<?php 
session_start();
include('../config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    if (($_FILES['thumbnail']['name']!="")){
        // Where the file is going to be stored
            $target_dir = "uploads/";
            $file = $_FILES['thumbnail']['name'];
            $path = pathinfo($file);
            $filename = $path['filename'];
            $ext = $path['extension'];
            $temp_name = $_FILES['thumbnail']['tmp_name'];
            $path_filename_ext = $target_dir.$filename.".".$ext;
         
        // Check if file already exists
        if (file_exists($path_filename_ext)) {
         }else{
         move_uploaded_file($temp_name,$path_filename_ext);
         }
        }

    $sql = "UPDATE news SET title='$title', descrption='$description', thumbnail='$path_filename_ext' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "News Updated Successfully";
        $_SESSION['msg_type'] = "success";
        header('Location: ../../news.php');
    } else {
        $_SESSION['message'] = "Error updating record: " . $conn->error;
        $_SESSION['msg_type'] = "danger";
        header('Location: ../../news.php');
    }
    $conn->close();

}

?>