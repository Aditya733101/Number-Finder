<?php
session_start();
    if (!isset($_SESSION['first_name'])) {
        echo "<script>
            alert('Please Signin First');
            window.location.href='signin.php';
            </script>";
    }          
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Number Finder</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php">Number Finder</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          
          <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                    <li><a class="dropdown-item" href="#">Account</a></li>
                    <li><a class="dropdown-item" href="logout.php">Log out</a></li>
                </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

</main>           
        
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-12">
                <div class="card text-bg-secondary pb-5">
                <div class="card-header text-center h4">My Profile</div>
                <div class="card-body">
                    <br>
                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" class="mx-auto img-fluid img-circle d-block" style="border-radius:100%; border:10px solid #DAEAF1; width:15%;"alt="avatar">
                    <p class="card-text">
                    <h5 class="mb-3 text-center"><?php echo $_SESSION['first_name']."&nbsp"; echo $_SESSION['last_name']."<br>"; ?></h5>
                    <div class="row h-100 d-flex align-items-center justify-content-center">
                        <div class="col-md-6">
                            <br>
                            <h6>Email</h6>
                            <p>
                               <?php echo $_SESSION['email']."<br>"; ?>
                            </p>
                            <h6>Phone Number</h6>
                            <p>
                                <?php echo $_SESSION['phone']."<br>"; ?>
                            </p>
                            <h6>Country</h6>
                            <p>
                                <?php echo $_SESSION['country']."<br>"; ?>
                            </p>
                            <h6>State</h6>
                            <p>
                                <?php echo $_SESSION['state']."<br>"; ?>
                            </p>
                        
                </div>
                
            </div>
            
        </div>
            
            <div class="card-footer text-muted"></div>
        </div>
        
        <!-- Footer-->
        <?php require '_footer.php' ?>