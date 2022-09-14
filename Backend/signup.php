<?php 
session_start();
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $firstname= $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $phone = $_POST['phone_number'];
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


    $sql="INSERT INTO users (f_name,l_name,password,address,phone,email) VALUES
    ('".$firstname."','".$lastname."','".$password."','".$address."','".$phone."','".$email."')" ;
   
if (mysqli_query($conn,$sql)) {
  $_SESSION['message'] = "Account Registered Successfully !!!";
  $_SESSION['msg_type'] = "success";
  header('Location: ../index.php');
} else {
  echo "Error: ".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);

}

?>