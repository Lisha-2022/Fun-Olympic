<?php 
session_start();

if (!isset($_SESSION['name'])){
header("Location: index.php");
}
else {
    $username = $_SESSION['name'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register</title>
</head>
<style>
      body {
        background-image: url('imgs/dashboardnew.jpg');
background-repeat: no-repeat;
background-size:1550px 900px;
    }
   
</style>
<body>
<header>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid ">
    <a class="navbar-brand text-dark" href="#"><strong>SiLiSa Enterprises</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-dark active" aria-current="page" href="#"><strong>Home</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#"><strong>Features</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#"><strong>Pricing</strong></a>
        </li>
      </ul>
    </div>
    <div>
     <a class="btn btn-dark form-control" href="Backend/logout.php">Log Out </a>
    </div>
  </div>
</nav>
</header>


   <section class="main-sec">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card shadow mb-5 bg-body rounded justify-content-center">
                    <div class="card-head">
                        <div class="text-center">
                        <h4 class="text-dark"><strong>Welcome <?php echo $username; ?></strong></h4>
                        </div>
                    </div>
</div>
</div>
</div>
</div>

    
</body>
</html>