<?php 
session_start();
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $name= $_POST['f_name'] . ' ' . $_POST['l_name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $confirmpassword = $_POST['confirm_password'];
    $captcha = $_POST['captcha'];

    if ($captcha !== $_SESSION['CAPTCHA_CODE']){
      $_SESSION['message'] = "Catpcha Mismatch !!!";
      $_SESSION['msg_type'] = "danger";
      header('Location: ../register.php');
      exit;
    }

    if ($password !== $confirmpassword){
      $_SESSION['message'] = "Password and Confirm Password Mismatched !!!";
      $_SESSION['msg_type'] = "danger";
      header('Location: ../register.php');
      exit;
    }

    $password = sha1($password);
    
    $checkSql = "SELECT * FROM users where email = '".$email."'";
    $result = mysqli_query($conn, $checkSql);

if (mysqli_num_rows($result) >= 1) {
  $_SESSION['message'] = "This email is already taken !!!";
  $_SESSION['msg_type'] = "danger";
  header('Location: ../register.php');
  exit;
}


    $sql="INSERT INTO users (name,email,password,address,phone,role,has_paid) VALUES
    ('".$name."','".$email."','".$password."','".$address."','".$phone."','user',0)" ;
   
if (mysqli_query($conn,$sql)) {
  $_SESSION['message'] = "Account Registered Successfully !!!";
  $_SESSION['msg_type'] = "success";
  header('Location: ../register.php');
} else {
  echo "Error: ".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);

}

?>