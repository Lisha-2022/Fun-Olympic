<?php 
session_start();
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $password = sha1($password);

    $sql="SELECT * FROM users where (email='".$email."' and password='".$password."')";
    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $_SESSION['name'] = $row['f_name'] .' '. $row['l_name'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['address'] = $row['address'];
    $_SESSION['phone'] = $row['phone'];
  }
  header('Location: ../welcome.php');
} else {
    $_SESSION['message'] = "Your email or password is mismatched";
    $_SESSION['msg_type'] = "danger";
    header('Location: ../index.php');
}
mysqli_close($conn);

}

?>