<?php

require 'config.php';

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $hashed_password = $row['password'];

            // Verify the entered password with the hashed password in the database
            if (password_verify($password, $hashed_password)) {
                // Password is correct, set session variables
                $_SESSION['user_id'] = $row['id'];  // Assuming you have a column named 'id' in your user table
                $_SESSION['user_email'] = $email;

                // Redirect to the index page after login
                header("Location: home.php");
                exit();
            } else {
                echo "<script>alert('Invalid password');</script>";
            }
        } else {
            echo "<script>alert('Email not found');</script>";
        }
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" />
    <!-- website name -->
    <meta property="og:site" content="" />
    <!-- website link -->
    <meta property="og:title" content="" />
    <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" />
    <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" />
    <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" />
    <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image">
    <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Log In - Ioniq</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>

<body>

    <!-- Navigation -->
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
        <div class="container">

            <!-- Image Logo -->
            <a class="navbar-brand logo-text" href="index.php">Agami</a>

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
                        <a class="nav-link" href="index.php#invitation">details</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="sell.html">Sell</a>
                    </li> -->
                </ul>
                <span class="nav-item">
                        <a class="btn-outline-sm" href="sign-up.php">Register/Log In</a>
                    </span>
            </div>
            <!-- end of navbar-collapse -->
        </div>
        <!-- end of container -->
    </nav>
    <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1 class="text-center">Log In</h1>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </header>
    <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Basic -->
    <div class="ex-form-1 pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3">
                    <div class="text-box mt-5 mb-5">
                        
                        <!-- Log In Form -->
                        <form id="loginform" method="POST" action="" >                            
                            <div class="mb-4 form-floating">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required >
                                <label for="floatingInput">Email address</label>
                                <p class="text-danger" id="floatingInput_error"></p>
                            </div>
                            <div class="mb-4 form-floating">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required >
                                <label for="floatingPassword">Password</label>
                                <p class="text-danger" id="floatingPassword_error"></p>
                            </div>
                            <br>
                            <div class="mb-4 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" required >
                                <label class="form-check-label" for="exampleCheck1">I agree with the site's stated <a href="privacy.html">Privacy Policy</a> and <a href="terms.html">Terms & Conditions</a></label>                               
                            </div>
                            <p class="text-danger" id="exampleCheck1_error"></p>
                            
                            <p class="mb-4">You don't have a password? Then please <a class="blue" href="sign-up.php">Sign Up</a></p>
                        
                               
                                
                                    <br>
                                  
                            <button type="submit" class="form-control-submit-button" name="submit" >Log in</button>
                            
                        </form>
                        <!-- end of log in form -->

                    </div>
                    <!-- end of text-box -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of ex-basic-1 -->
    <!-- end of asic -->


    <!-- Footer -->
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


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © <a href="#your-link">Your name</a></p>
                </div>
                <!-- end of col -->
            </div>
            <!-- enf of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
            <img src="images/up-arrow.png" alt="alternative">
        </button>
    <!-- end of back to top button -->

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