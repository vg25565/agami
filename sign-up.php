<?php
require 'config.php'; // database configuration file here
require 'email_code.php';

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    // Check if the email already exists in the database
    $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    if (mysqli_num_rows($duplicate) > 0) {
        echo "<script>alert('Email has already been taken');</script>";
    } else {
        if ($password === $cpassword) {
            // Hash the password before inserting it into the database
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $query = "INSERT INTO users (name, email,  password) VALUES ('$name',  '$email',  '$hashed_password')";
            
            if (mysqli_query($conn, $query)) {
                echo "<script>alert('Registration is successful');</script>";
                
                // Redirect to index.php
                header("Location: home.php");
                exit();
            } else {
                echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
            }
          
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">
    <meta property="og:site_name" content="" />
    <meta property="og:site" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta name="twitter:card" content="summary_large_image">
 
    <title>Sign Up - Ioniq</title>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <link rel="icon" href="images/favicon.png">
</head>

<body>
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
        <div class="container">
            <a class="navbar-brand logo-text" href="index.php">Agami.</a>

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#features">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="detail.html">Details</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="sell.html">Sell</a>
                    </li> -->
                </ul>
                <span class="nav-item">
                        <a class="btn-outline-sm" href="login.php">Regsiter / Log In</a>
                    </span>
            </div>
        </div>
    </nav>
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1 class="text-center">Sign Up</h1>
                </div>
            </div>
        </div>
    </header>
    <div class="ex-form-1 pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3">
                    <div class="text-box mt-5 mb-5">
                        

                        <!-- Sign Up Form -->
                        <form id="signupForm" method="post" action="">
                            <div class="mb-4 form-floating">
                                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="name" required >
                                <label for="floatingInput" >Your name</label>
                                <p class="text-danger" id="floatingInput_error"></p>

                            </div>
                            <div class="mb-4 form-floating">
                                <input type="email" class="form-control" id="floatingInput2" placeholder="Your name" name="email" required >
                                <label for="floatingInput">Email address</label>
                                <p class="text-danger" id="floatingInput2_error"></p>

                            </div>
                            <div class="mb-4 form-floating">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required >
                                <label for="floatingPassword">Password</label>
                                <p class="text-danger" id="floatingPassword_error"></p>

                            </div>
                            <div class="mb-4 form-floating">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="cpassword" required >
                                <label for="floatingPassword">Re-enter Password</label>
                                <p class="text-danger" id="floatingPassword_error"></p>

                            </div>
                            <div class="mb-4 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" required >
                                <label class="form-check-label" for="exampleCheck1">I agree with the site's stated <a href="privacy.html">Privacy Policy</a> and <a href="terms.html">Terms & Conditions</a></label>
                            </div>
                            <p class="text-danger" id="exampleCheck1_error"></p>
                            <br>
                            
                            
                            <button class="form-control-submit-button" name="submit" >  Sign-up</button>
                        </form>
                        <!-- end of sign up form -->
                        
                    </div>
                    <!-- end of text-box -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>

    <!-- Footer -->
        <!-- Footer -->
        <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-col first">
                        <h6>About Website</h6>
                        <p class="p-small">Agami provides a better soloution negotiation for all B2B deals and B2C deals</p>
                    </div>
                    <!-- end of footer-col -->
                    <div class="footer-col second">
                        <h6>Links</h6>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li>Menu: <a href="#header">Home</a></li>
                            <li> <a href="#features">Services</a></li>
                            <li><a href="detail.html">Details</a></li>
                        </ul>
                    </div>
                    <!-- end of footer-col -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of footer -->
    <!-- end of footer -->

    <!-- Scripts -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Bootstrap framework -->
    <script src="js/swiper.min.js"></script>
    <!-- Swiper for image and text sliders -->
    <script src="js/purecounter.min.js"></script>
    <!-- Purecounter counter for statistics numbers -->
    <script src="js/replaceme.min.js"></script>
    <!-- ReplaceMe for rotating text -->
    <script src="js/scripts.js"></script>
    <!-- Custom scripts -->
    <script src="js/validate.js"></script>
    <!-- validate form script -->
</body>

</html>
