<?php include('Backend/user-session.php'); ?>
<?php include('Backend/config.php'); ?>
<?php $role = $_SESSION['role']; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Fun Olympics</title>
</head>
<body>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.101.0">
        <title>Fun Olympic</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
        <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
        <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
        <meta name="theme-color" content="#712cf9">

        <!-- Custom styles for this template -->
        <link href="carousel.css" rel="stylesheet">
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <div class="container-fluid">
                <a class="navbar-brand" href="admin_dashboard.php"><img src="images/logo2.png" alt="..." width="100" height="50"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?php echo ($role == 'admin' ? 'admin_dashboard.php' : 'user_dashboard_php')?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="category.php">Categories</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="games.php">Sports</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="top_videos.php">Watch</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="payment.php">Live Streaming</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="user_dashboard.php" >About</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search"  style="width:500px;" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="images/adminpic.png" alt="user" class="rounded-circle" width="31">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="Backend/logout.php"><i class="ti-user m-r-5 m-l-5"></i>Logout</a>
                            </ul>
                        </li>
                      
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <div class="container-fluid">
                <br>
                <Br>
                <Br>
                <Br>

                <?php 
                    $sql = "SELECT * from games";
                    $result = $conn->query($sql); 
                    while($row = $result->fetch_assoc()) {
                        echo '<a style="text-decoration:none; color: inherit" href="video-player.php?id='.$row['id'].'">
                        <div class="row"><div class="col-md-2">
                        <img style="width:200px; height: 150px" src="games/thumbnails/'.$row['thumbnail'].'" alt="ok">
                    </div>
                    <div class="col-md-10">
                        <h4>'.$row['title'].'</h4>
                        <p>'.$row['description'].'</p>
                    </div>
                    </div>
                    </a>
                    <hr>';
                    }
                ?>
            </div>
                <!-- FOOTER -->
                <footer class="footer fixed-bottom d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                    <div class="col-md-4 d-flex align-items-center">
                    <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
                    </a>
                    <span class="text-muted">Copyright © 2022 Beijing Organising Committee for the 2022 Fun Olympic Game</span>
                    </div>

                    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                        <li class="ms-3"><a class="text-muted" href="#"><i class='bx bx-sm bxl-instagram'></i></a></li>
                        <li class="ms-3"><a class="text-muted" href="#"><i class='bx bx-sm bxl-youtube'></i></a></li>
                        <li class="ms-3"><a class="text-muted" href="#"><i class='bx bx-sm bxl-facebook-circle'></i></a></li>
                    </ul>
                </footer>
        </main>


    </body>
    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</html>