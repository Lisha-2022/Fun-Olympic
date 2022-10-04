<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap layout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type='text/css' href="css/index.css">
    
    
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 	
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 	
</head>

<body>
     <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="images/logo2.png" alt="..." width="100" height="50"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Categories</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Sports</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Watch</a>
                            </li>
                           
                            <li class="nav-item">
                                <a class="nav-link">About</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search"  style="width:500px;" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                        <a class="btn btn-outline-primary ms-2" href="login.php">Login</a>
                        <a class="btn btn-outline-primary ms-2" href="register.php">Register</a>
                    </div>
                </div>
            </nav>
        </header>

<!-- start of block -->

<div class="bs_create_account_layout4 position-relative">
        <div class="container-fluid px-0">
            <div class="row align-items-stretch m-auto flex-column flex-row-reverse">
                <div class="col-lg-8">
                    <div class="bs_signup_form_container p-5 position-relative">
                        <div class="mx-auto d-flex justify-center flex-column align-items-center">
                            <h2 class="display-6 pb-3"><strong>Fun Olympic Game</strong></h2>
                            <p class="text-secondary h6 bs_fw-300">SignIn</p>
                            <form class="py-3 p-lg-3 pt-lg-5 w-100 md-mx-w-550 mx-auto" method="POST" action="Backend/login.php">
                                <?php 
                            if (isset($_SESSION['message']) && isset($_SESSION['msg_type'])){

                                echo '<div class="alert alert-'.$_SESSION['msg_type'].'" role="alert">
                                    '.$_SESSION['message'].'
                                </div>';
                                }
                                unset($_SESSION['message']);
                                unset($_SESSION['msg_type']);
                            ?>
                                    <div class="mb-4">
                                        <label for="signup-4-firstname" class="ms-5 form-label text-secondary fw-normal">E-mail</label>
                                    <div class="input-group">
                                        <i class="p-md-3 fa fa-user"></i><input type="text" name="email" class="form-control" id="signup-4-firstname"
                                            aria-describedby="infotext" required>
                                        <!-- <div id="signup-4-infotext" class="form-text py-2 text-danger">Please enter valid
                                            input</div> -->
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="signup-4-Password" class="ms-5 form-label text-secondary fw-normal">Password</label>
                                    <div class="input-group">
                                        <i class="p-md-3 fa fa-lock"></i><input type="text" name="password" class="form-control" id="signup-4-Password"
                                            aria-describedby="infotext" required>
                                    </div>
                                </div>

                                <div class="mb-4 form-check">
                                    <div class="row">
                                    <div class="col-md-6">
                                        <input type="checkbox" class="ms-4 form-check-input" id="signup-4-Checkbox">
                                        <label class="form-check-label ms-3" for="signup-4-Checkbox">Remember Me</label>
                                    </div>

                                        <div class="col-md-6">
                                            <div class="input-group text-end">
                                                <input type="checkbox" class="form-check-input" id="signup-4-Checkbox">
                                                <label class="form-check-label ms-3" for="signup-4-Checkbox">Show Password</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div>
                                <button type="submit" class="ms-5 btn btn-primary" style="width: 96.5%">Login</button>
                                <p class="text-secondary pt-3 small">Dont have an account? <a href="register.php"
                                        class="text-decoration-none">Register</a></p>
                                       
                                </div>

                                <div class="row d-inline text-center px-2 mx-1">
                                <h6> Or <br> Continue With </h6>
                                <a class="text-dark" href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a class="text-dark" href="#"><i class="fa-brands fa-google"></i></a>
                                <a class="text-dark" href="#"><i class="fa-brands fa-linkedin"></i></a>
                            </div>
                            <div class="row text-center">
                                <h6>Already have an account?<a href="login.php"> <p class="text-dark">Sign In! </p></a> </h6>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 px-0 d-none d-lg-block">
                    <div class="bs_carousal_container d-none d-lg-block">
                        <div id="bs_create_account_carousel" class="carousel slide autoplay carousel-fade "
                            data-bs-ride="carousel">
                            <div class="carousel-inner ">
                                <div class="carousel-item  active">
                                    <img src="https://s3.amazonaws.com/assets.mockflow.com/app/wireframepro/blockui/M261ec5fd9139384cf97b40f2c8293cf61643376699423/assets/M5aa49b1707b47e2436b2d50c4aa5e6d01643376759044/signup-layout4-img.jpg" class="d-block w-100 " alt="...">
                                    <div class="carousel-caption d-none d-md-block text-start">
                                        <div class="h2">
                                            <i class="bi bi-quote text-center text-white"></i>
                                        </div>
                                        <p class="testimonial">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Corrupti atque et dolore. Voluptate, fugit.</p>
                                        <p class="overview text-end">
                                            <b>RDJ</b><br />
                                            <span class="text-secondary">Managing Director</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <img src="https://s3.amazonaws.com/assets.mockflow.com/app/wireframepro/blockui/M261ec5fd9139384cf97b40f2c8293cf61643376699423/assets/Mda441a1baa603356b06e27edc5e149e71643376756715/signup-layout4-img2.jpg" class="d-block w-100 " alt="...">
                                    <div class="carousel-caption d-none d-md-block text-start">
                                        <div class="h2">
                                            <i class="bi bi-quote text-center text-white"></i>
                                        </div>
                                        <p class="testimonial">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Corrupti atque et dolore. Voluptate, fugit.</p>
                                        <p class="overview text-end">
                                            <b>Chris Evans</b><br />
                                            <span class="text-secondary">Team Lead</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <img src="https://s3.amazonaws.com/assets.mockflow.com/app/wireframepro/blockui/M261ec5fd9139384cf97b40f2c8293cf61643376699423/assets/Mede7f105ddd2cce7d84f18f47c17940f1643376755261/signup-layout4-img3.jpg" class="d-block w-100 " alt="...">
                                    <div class="carousel-caption d-none d-md-block text-start">
                                        <div class="h2">
                                            <i class="bi bi-quote text-center text-white"></i>
                                        </div>
                                        <p class="testimonial">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Corrupti atque et dolore. Voluptate, fugit.</p>
                                        <p class="overview text-end">
                                            <b>JD</b><br />
                                            <span class="text-secondary">Founder</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#bs_create_account_carousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#bs_create_account_carousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

<!-- end of block -->

</body>

</html>