<?php 
session_start();
include('../config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $category_id = $_POST['category_id'];
    $game_time = $_POST['game_time'];
    $description= $_POST['description'];

    if (($_FILES['video']['name']!="")){
        // Where the file is going to be stored
            $target_dir1 = "../../games/videos/";
            $file1 = $_FILES['video']['name'];
            $path1 = pathinfo($file1);
            $filename1 = $path1['filename'];
            $ext1 = $path1['extension'];
            $temp_name1 = $_FILES['video']['tmp_name'];
            $path_filename_ext1 = $target_dir1.$filename1.".".$ext1;

        // Check if file already exists
         $video= $filename1.'.'.$ext1;     
         if (file_exists($path_filename_ext1)) {
        }else{
        move_uploaded_file($temp_name1,$path_filename_ext1);
        }
         $sql = "UPDATE games SET title='$title', `description`='$description', game_time = '$game_time', category_id = '$category_id', video_path = '$video' WHERE id=$id";
    }
    else if (($_FILES['image']['name']!="")){
         // Where the file is going to be stored
         $target_dir2 = "../../games/thumbnails/";
         $file2 = $_FILES['image']['name'];
         $path2 = pathinfo($file2);
         $filename2 = $path2['filename'];
         $ext2 = $path2['extension'];
         $temp_name2 = $_FILES['image']['tmp_name'];

         $path_filename_ext2 = $target_dir2.$filename2.".".$ext2;
      
        // Check if file already exists
        
        $thumbnail= $filename2.'.'.$ext2;
        
        if (file_exists($path_filename_ext2)) {
        }else{
        move_uploaded_file($temp_name2,$path_filename_ext2);
        }

        $sql = "UPDATE games SET title='$title', `description`='$description', game_time = '$game_time', category_id = '$category_id', thumbnail = '$thumbnail' WHERE id=$id";
    }
    else{
        $sql = "UPDATE games SET title='$title', description='$description', game_time = '$game_time', category_id = '$category_id' WHERE id=$id";
    }

    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "Games Updated Successfully";
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