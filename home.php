<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agami</title>
    <style>
       
        .button-box {
            text-align: center; 
            margin-top: 20px; 
        }
        .section {
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 10px;
            padding: 10px;
            width: 200px;
        }
        .section h2 {
            font-size: 18px;
            margin-bottom: 10px;
            cursor: pointer;
        }
        .section ul {
            list-style-type: none;
            padding: 0;
            display: none;
        }
        .section.active ul {
            display: block;
        }
        .section li {
            margin-bottom: 5px;
        }
        .section a {
            color: #333;
            text-decoration: none;
        }
        .section a:hover {
            color: #007bff;
        }
        .btn-group>.btn {
    position: relative;
    border-radius: 50px;
    display: inline-block;
    padding: 1rem 1.5rem 1rem 1.5rem;
    border: 1px solid #f25c05;
    border-radius: 30px;
    background-color: transparent;
    color: #f25c05;
    font-weight: 600;
    font-size: 1rem;
    line-height: 0;
    text-decoration: none;
    transition: all 0.2s;
}
.btn-secondary {
    --bs-btn-color: #fff;
    --bs-btn-bg: #6c757d;
    --bs-btn-border-color: #ec7137;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #f16010;
    --bs-btn-hover-border-color: #565e64;
    --bs-btn-focus-shadow-rgb: 130,138,145;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #565e64;
    --bs-btn-active-border-color: #51585e;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #6c757d;
    --bs-btn-disabled-border-color: #6c757d;
}
.navbar .dropdown-menu {
    margin-top: 0.25rem;
    margin-bottom: 0.25rem;
    border: none;
    background-color: #f6f3f3;
}
    </style>
</head>
<body>
   
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

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
    <!--
            3
            . image link, make sure it's jpg -->
    <meta property="og:url" content="" />
    <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image">
    <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>home</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&display=swap"
        rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>

<body data-bs-spy="scroll" data-bs-target="#navbarExample">

    <!-- Navigation -->
    <div class="nss">
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
        <div class="container">

            <!-- Image Logo 
            <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.svg" alt="alternative"></a>-->

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <a class="navbar-brand logo-text" href="index.php">Agami.</a>

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home.php#features">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="home.php#invitation">Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sell.php">Sell</a>
                    </li>
                </ul>
                <span class="nav-item">
                    <a class="btn-outline-sm" href="logout.php">Log out</a>
                    <div class="btn-group dropend">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          Account
                        </button>
                        <ul class="dropdown-menu"><ul>
                          <!-- Dropdown menu links -->
                          <li><a href="account.php">Personal Details</a></li>
                          <li><a href="logout.php">Sign Out</a></li></ul>
                        </ul>
                      </div>
                </span>
                
                    
                
                <br>
            </div><!-- Default dropend button -->
            
            
            <!-- Split dropend button -->
            
            <!-- end of navbar-collapse -->
        <!-- end of container -->
        
    </nav>
    
</div>
    <!-- end of navbar -->
    <!-- end of navigation -->


    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>

        </div>
        <div class="carousel-inner">
          <div class="carousel-item c1 active">
            
            <div class="carousel-caption d-none d-md-block">
              <h5>Revolutionize Your</h5>
            <h5>Business Development</h5>
                <h5> Negotiation Engine.</h5>
                <br>
              <p>We provide ethical and effective solutions to help you achieve your business goals. Harness the power of data and get helpful decisions.</p>
              <div class="button-box">
                <button class="btn btn-primary"><a href="descrpition.php">Here we go</a></button>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            
            <div class="carousel-caption d-none d-md-block">
              <h5>We Will Help you  </h5>
              <h5>toward's Negotiation </h5>
              <h5>Journey</h5>
              <p>Unlock Infinite Potential with Us.</p>
            </div>
          </div>
          <div class="carousel-item c3">
            
            <div class="carousel-caption d-none d-md-block">
              <h5>Good Reliablity</h5>
              <p>Our Software Solutions are Reliable.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>



    <!-- Features -->
    <div id="features" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Aagami provide's you with   <span>awesome features</span></h2>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon">
                            <span class="fas fa-headphones-alt"></span>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Eazy Access</h4>
                            <p>It is user friendly user can easily use our website and get the desired results in short spn of time/p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon green">
                            <span class="far fa-clipboard"></span>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Available Slots Tracking</h4>
                            <p>It help us to check which product Availability</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon blue">
                            <span class="far fa-comments"></span>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Easy Negotiation</h4>
                            <p>It help us to easly Negotiate the price and other details</p>
                        </div>
                    </div>
                    <!-- end of card -->

                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of cards-1 -->
    <!-- end of services -->



    <!-- Invitation -->
    <div class="basic-3" id="invitation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>At Negotiation Engine, we are committed to helping you achieve your business development goals. Contact us today to learn more about how we can help you succeed.
                    </h4>
                    <a class="btn-outline-lg page-scroll" href="account.php">Get strarted with us</a>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of basic-3 -->
    <!-- end of invitation -->


    <br>
    <div class="nee">
    <div class="container-fluid">
        <div class="container-fluid">
            <h2 class="testhead text-center" style="color: rgb(211, 149, 5);"><b>How to use</b></h2>
            <hr style="width:30%;height: 2px;display: block;margin: auto;color: rgb(147, 118, 5);">
            <br>
            <div class="container" style="width:65%">
                <p class="text-center">Negotiation Engine is a powerful tool that uses data to provide you with the insights you need to succeed. Our team of experts will help you make sense of your data and turn it into actionable strategies that drive results.</p>
            </div>
        </div>
    </div>

        <!-- Carousel -->
        
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
</body>

</html>