<?php
require 'config.php';
$user_id = $_SESSION['user_id'];

$query = "SELECT name FROM users WHERE id = '$user_id'"; // Assuming user_id 1 for demonstration

$result = mysqli_query($conn, $query);

// Check if the query was successful and there are rows
if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $userName = $row['name'];
} else {
    // Handle the error if the query fails or no rows are found
    $userName = "Guest"; // Default name for guests
}

// Close the database connection
mysqli_close($conn);

// Output the user's name as a JavaScript variable
echo '<script>var userName = "' . $userName . '";</script>';
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&display=swap"
        rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">


    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
    <style>
      .bg-body-secondary {
        --bs-bg-opacity: 1;
        background-color: rgba(var(--bs-secondary-bg-rgb),var(--bs-bg-opacity))!important;
        margin-top: 80px;
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
  </style>
</head>

<body>

    <!-- Navigation -->
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
        <div class="container">

            <!-- Image Logo -->
            <a class="navbar-brand logo-text" href="home.php">Aagami</a>

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
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
                        <a class="nav-link" href="home.php#invitation">Locate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="detail.html">Details</a>
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
            </div>
            <!-- end of navbar-collapse -->
        </div>
        <!-- end of container -->
    </nav>
    <!-- end of navbar -->
    <!-- end of navigation -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="soon.png" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
    <div class="card text-center">
        <div class="card-header">
          Featured
        </div>
        <div class="card-body">
          <h5 class="card-title">Get in touch with <?php echo $userName; ?></h5>
          <p class="card-text"></p>
         <!-- Update your Get in touch button -->
<a href="mailto:xyz14710@gmail.com" class="btn btn-warning" id="getInTouchBtn">Start Enquiry</a>

        </div>
    
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      
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
  </body>
</html>