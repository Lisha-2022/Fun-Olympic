<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
</head>
<style>
    body {
        background-color: #7ee8fa;
background-image: url('imgs/login.jpg');
background-repeat: no-repeat;
  background-size: cover;
    }
   

</style>
<body>

<section class="main-sec">
    <div class="container-fluid">
        <div class="row justify-content-center" style="margin-top: 200px">
            <div class="col-md-6">
                <div class="card shadow p-3 mb-5 bg-body rounded justify-content-center">
                    <div class="card-head">
                        <div class="text-center">
                        <h4 class="text-dark"><strong>Welcome to Fun Olympic</strong></h4>
                        </div>
                    </div>
                    <div class="card-body">
                    <form class="form" method="Post" action="Backend/login.php">
                    <?php 
                        if (isset($_SESSION['message']) && isset($_SESSION['msg_type'])){

                        echo '<div class="alert alert-'.$_SESSION['msg_type'].'" role="alert">
                            '.$_SESSION['message'].'
                        </div>';
                        }
                        unset($_SESSION['message']);
                        unset($_SESSION['msg_type']);
                        ?>
                        <!-- <div class="row">
                            <label for="email">Email:</label><br>
                            <input class="form-control" type="email" id="Email" name="email" required>
                        </div> -->

                        <div class="input-group mb-4">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                            <input type="text" name="email" id="Email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" required>
                        </div>
                        
                        <!-- <div class="row">
                            <label for="password">Password:</label><br>
                            <input class="form-control" type="password" id="password" name="password" required> <br> <br>
                        </div> -->

                        <div class="input-group mb-4">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6">
                            <h6><input class="form-checkbox" type="checkbox" id="remember" />
                         Remember me </h6>
                            
                            </div>
                     
                         <div class="col-md-6 text-end">
                         <h6><input class="form-checkbox" type="checkbox" id="show" />
                         Show Password </h6>
                         </div>
                        

                      
                        </div>


                        </div>
                        <div class="row justify-content-center">
                        <div class="col-md-9">
                        <button class="btn btn-dark form-control" type="submit" id="submit">Login</button>

                    </div>
                    </div>
                    </form>
                
                    <br>
                    <div class="row text-center">
                    <h6>Forgot Password?</h6>
                    <h6> Dont have account?<a href="register.php"> <p class="text-dark">Sign up! </p></a> </h6>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
        $('#show').click(function(){
            if ($(this).is(':checked')){
                $('#password').attr('type', 'text');
            }
            else{
                $('#password').attr('type', 'password');
            }
        })
    })
</script>
</html>