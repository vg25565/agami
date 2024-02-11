<?php

require 'config.php';


// Directory path to store uploads
$uploadDirectory = 'uploads/';

// Check if the directory exists, and if not, create it
if (!file_exists($uploadDirectory)) {
    mkdir($uploadDirectory, 0777, true);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the required form fields are set
    if (isset($_POST['category']) && isset($_POST['title']) && isset($_POST['description'])) {
        $category = $_POST['category'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        // Check if the file input is set and not empty
        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            // Assuming you've uploaded the image and stored it in a folder
            $imagePath = $uploadDirectory . $_FILES['image']['name'];

            // Move the uploaded file to the uploads directory
            if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
                // Insert data into the Ads table
                $sql = "INSERT INTO descriptions (category, title, description, image_path) VALUES (?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);

                // Check if the prepare statement was successful
                if ($stmt) {
                    $stmt->bind_param("ssss", $category, $title, $description, $imagePath);

                    // Execute the prepared statement to insert data
                    if ($stmt->execute()) {
                      header("Location: descrpition.php");
                      exit();
                    } else {
                        echo "Error inserting data: " . $stmt->error;
                    }

                    $stmt->close();
                } else {
                    echo "Error preparing statement: " . $conn->error;
                }
            } else {
                echo "Error moving uploaded file";
            }
        } else {
            echo "Error uploading image";
        }
    } else {
        echo "Missing required form fields";
    }
} 

// Close the database connection
$conn->close();
?>







<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description" />
    <meta name="author" content="Your name" />

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
    <meta name="twitter:card" content="summary_large_image" />
    <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Log In - Ioniq</title>

    <!-- Styles -->
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&display=swap"
      rel="stylesheet"
    />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/fontawesome-all.min.css" rel="stylesheet" />
    <link href="css/swiper.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png" />
  </head>

  <body>
    <!-- Navigation -->
    <nav
      id="navbarExample"
      class="navbar navbar-expand-lg fixed-top navbar-light"
      aria-label="Main navigation"
    >
      <div class="container">
        <!-- Image Logo -->
        <a class="navbar-brand logo-text" href="home.php">Agami.</a>

        <button
          class="navbar-toggler p-0 border-0"
          type="button"
          id="navbarSideCollapse"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div
          class="navbar-collapse offcanvas-collapse"
          id="navbarsExampleDefault"
        >
          <ul class="navbar-nav ms-auto navbar-nav-scroll">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="home.php#features">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="detail.html">Details</a>
            </li>
            
          </ul>
          <span class="nav-item">
                    <a class="btn-outline-sm" href="logout.php">Log out</a>
                    <div class="btn-group dropend">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          Account
                        </button>
                        <ul class="dropdown-menu"><ul>
                           Dropdown menu links
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

    <!-- Header -->
    <header class="ex-header">
      <div class="container">
        <div class="row">
          <div class="col-xl-10 offset-xl-1">
            <h1 class="text-center">Post your Ads</h1>
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
             <!-- Log In Form -->
<form id="loginform" method="POST" class="" enctype="multipart/form-data"  >

<label for="category">Category</label>
<br />
<select id="category" name="category" required class="form-control">
    <option value="">Select a category</option>
    <option value="cars">Cars</option>
    <option value="properties">A Properties</option>
    <option value="mobiles">Mobiles</option>
    <option value="jobs">Jobs</option>
    <option value="bikes">Bikes</option>
    <option value="electronics">Electronics & Appliances</option>
    <option value="commercial">Commercial Vehicles & Spares</option>
    <option value="furniture">Furniture</option>
    <option value="fashion">Fashion</option>
    <option value="books">Books, Sports & Hobbies</option>
</select>
<br />
<div class="mb-4 form-floating">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Title">
    <p class="text-danger" id="floatingPassword_error"></p>
</div>
<label for="description">Description:</label>
<textarea class="form-control" id="description" name="description" required></textarea>
<br>
<label for="image" class="">Image:</label>
<input type="file" id="image" name="image" accept="image/*" class="form-control">
<br>
<p class="text-danger" id="exampleCheck1_error"></p>
<p class="mb-4">Not signed up? Then just <a class="blue" href="sign-up.html">sign-up</a></p>
<button type="submit" class="form-control-submit-button">Post</button>
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
    <!-- end of basic -->

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
