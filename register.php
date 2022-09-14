<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Register</title>
</head>

<style>
      body {
        background-color: #7ee8fa;
background-image: url('imgs/register.jpg');
background-repeat: no-repeat;
  background-size: cover;
    }
 
</style>
<body>

   <section class="main-sec">
    <div class="container-fluid">
        <div class="row justify-content-center" style="margin-top: 50px">
            <div class="col-md-6">
                <div class="card shadow p-3 mb-5 bg-body rounded justify-content-center">
                    <div class="card-head">
                        <div class="text-center">
                        <h4 class="text-black"><strong>Create Account</strong></h4>
                        </div>
                    </div>
                    <div class="card-body">
                    <form class="form form1" method="Post" action="Backend/signup.php">
                    <?php 
                        if (isset($_SESSION['message']) && isset($_SESSION['msg_type'])){

                        echo '<div class="alert alert-'.$_SESSION['msg_type'].'" role="alert">
                            '.$_SESSION['message'].'
                        </div>';
                        }
                        unset($_SESSION['message']);
                        unset($_SESSION['msg_type']);
                    ?>
                        <div class="input-group mb-4">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                            <input type="text" name="first_name" id="fname" class="form-control" placeholder="First Name" aria-label="First Name" aria-describedby="basic-addon1" required>
                        </div>

                        <div class="input-group mb-4">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                            <input type="text" name="last_name" id="lname" class="form-control" placeholder="Last Name" aria-label="Last Name" aria-describedby="basic-addon1" required>
                        </div>

                        
                        <div class="input-group mb-4">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                            <input type="text" name="email" id="Email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" required>
                        </div>

                        <div class="input-group mb-4">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-location-dot"></i></span>
                            <input type="text" name="address" id="Address" class="form-control" placeholder="Address" aria-label="Address" aria-describedby="basic-addon1" required>
                        </div>

                        <div class="input-group mb-4">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
                            <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="Phone" aria-label="Phone" aria-describedby="basic-addon1" required>
                        </div>

                        <div class="input-group mb-4">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required>
                        </div>

                        <div class="input-group mb-4">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"></i></span>
                            <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="confirm password" aria-label="confirm passowrd" aria-describedby="basic-addon1" required>
                        </div>
                        <div class="row">
                            <div class="col-md-11">
                        <div class="progress mb-4">
                            <div class="progress-bar bg-success" id="strength" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="text-danger" id="recommend"></p>
                    </div>
                    <div class="col-md-1 text-center" style="margin-top: -3px;"><input class="form-checkbox" type="checkbox" id="showPass"  />
</div>
                    </div>

                        <div class="row mb-2">
                            <div class="col-md-2">
                        <label class="form-label">Captcha: </label>
                    </div>
                    <div class="col-md-4">
                        <img src="Backend/captcha.php" alt="PHP Captcha"> <br>
                    </div>
                    </div>
                    <div class="row mb-2">
                    <input type="text" class="form-control" placeholder="Enter Captcha" name="captcha" required/><br>
                </div>

                        </div>

                        <div class="row mb-4">
                        <p><input class="form-checkbox" type="checkbox" name="terms" id="terms"  />
                           I have read and accepted the Terms of use and Privacy Policy</p>
                        </div>


                        <div class="row justify-content-center">
                        <div class="col-md-9">
                        <button class="btn btn-dark form-control" type="submit" id="submit" disabled="true" >Register</button>
                    </div>
                    </div>
                    </form>
                    <br>
                    
                    <div class="row d-inline text-center px-2 mx-1">
                        <h6> Or Continue With </h6>
                    <a class="text-dark" href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a class="text-dark" href="#"><i class="fa-brands fa-google"></i></a>
                    <a class="text-dark" href="#"><i class="fa-brands fa-linkedin"></i></a>
                    </div>

                    <div class="row text-center">
                    <h6>Already have an account?<a href="index.php"> <p class="text-dark">Sign In! </p></a> </h6>
                    
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $('#terms').click(function(){
            if ($(this).is(':checked')){
                $('#submit').attr('disabled', false);
            }else{
                $('#submit').attr('disabled', true);
            }
        });

        $('#showPass').click(function(){
            if ($(this).is(':checked')){
                $('#password').attr('type', 'text');
                $('#confirm_password').attr('type', 'text');
            }else{
                $('#password').attr('type', 'password');
                $('#confirm_password').attr('type', 'password');
            }
        });
    });

    $('#password').keyup(function(){
        var pass = $(this).val();
        checkPassword(pass);
    })

    function checkPassword(password) {
    let strengthBar = document.querySelector('#strength');
    let recommend = document.querySelector('#recommend');
    console.log(strengthBar);
    let strength = 0;
    
    if (password.match(/[a-z][a-zA]+/)){
        strength += 1
    }
    if (password.match(/[0-9]+/)){
        strength += 1
    }
    if (password.match(/[~<>?]+/)) {
        strength += 1
    }
    if (password.match(/[!@€$%^*()+]+/)){
        strength +=1
    }
    if (password.length > 8){
        strength += 1
    }
    
    switch (strength) {
        case 0:
            strengthBar.style.width = "0%";
            break;
        case 1:
            strengthBar.style.width = "20%";
            strengthBar.className = "progress-bar bg-danger";
            recommend.innerHTML = "Password is short and must contain more alphabate";
            strengthBar.innerText = "Weak";
            break;
        case 2:
            strengthBar.style.width = "40%";
            strengthBar.className = "progress-bar bg-warning";
            recommend.innerHTML = "Password should contain numeric value";
            strengthBar.innerText = "Not Sufficient";
            break;
        case 3:
            strengthBar.style.width = "60%";
            strengthBar.className = "progress-bar bg-info";
            recommend.innerHTML = "Password should contain symbol";
            strengthBar.innerText = "Ok";
            break;
        case 4:
            strengthBar.style.width = "80%";
            strengthBar.className = "progress-bar";
            recommend.innerHTML = "Password is acceptable";
            strengthBar.innerText = "Good";
            break;
        case 5:
            strengthBar.style.width = "100%";
            strengthBar.className = "progress-bar bg-success";
            recommend.innerHTML = "Password is excellent";
            strengthBar.innerText = "Strong";
            break;
    }
}

function onSubmit(value) {
    let submittedPassword = document.querySelector('#submittedPassword');
    submittedPassword.innerText = value;
}

</script>
</body>
</html>

