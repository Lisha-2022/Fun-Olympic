<?php 
session_start();
include('../config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $category_id = $_POST['category_id'];
    $game_time = $_POST['game_time'];
    $description= $_POST['description'];

    if (($_FILES['video']['name']!="") && ($_FILES['image']['name']!="")){
        
        // Where the file is going to be stored
            $target_dir1 = "../../games/videos/";
            $target_dir2 = "../../games/thumbnails/";
            $file1 = $_FILES['video']['name'];
            $file2 = $_FILES['image']['name'];
            $path1 = pathinfo($file1);
            $path2 = pathinfo($file2);
            $filename1 = $path1['filename'];
            $filename2 = $path2['filename'];
            $ext1 = $path1['extension'];
            $ext2 = $path2['extension'];
            $temp_name1 = $_FILES['video']['tmp_name'];
            $temp_name2 = $_FILES['image']['tmp_name'];

            $path_filename_ext1 = $target_dir1.$filename1.".".$ext1;
            $path_filename_ext2 = $target_dir2.$filename2.".".$ext2;
         
        // Check if file already exists
        
         $video= $filename1.'.'.$ext1;
         $thumbnail= $filename2.'.'.$ext2;
         
         move_uploaded_file($temp_name1,$path_filename_ext1);
         move_uploaded_file($temp_name2,$path_filename_ext2);
        }

    $sql = "INSERT into games (title, category_id, game_time, video_path, thumbnail, `description`) values ('$title', '$category_id','$game_time','$video','$thumbnail', '$description')";

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