<!--  <?php

require 'config.php';

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Fetch user details from the database
$query = "SELECT * FROM users WHERE id = '$user_id'";
$result = mysqli_query($conn, $query);

if ($result) {
    $user = mysqli_fetch_assoc($result);
} else {
    echo "Error: " . mysqli_error($conn);
}

// Update user details if the form is submitted
if (isset($_POST['save'])) {
    $newName = $_POST['newName'];
    $newAge = $_POST['newAge'];
    $newMobile = $_POST['newMobile'];

    // Validate age and phone number
    if ($newAge < 18 || $newAge > 90 || strlen($newMobile) < 10) {
        echo '<script>alert("Invalid Age or Phone Number");</script>';
    } else {
        // Update user details in the database
        $updateQuery = "UPDATE users SET name = '$newName', age = '$newAge', mobile = '$newMobile' WHERE id = '$user_id'";
        if (mysqli_query($conn, $updateQuery)) {
            // Display success message
            echo '<script>alert("Changes have been saved!");</script>';
            // Refresh the page to reflect the changes
            header("Location: account.php");
            exit();
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
}
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account - Agami</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f8f9fa;
            color: #495057;
        }

        .account-section {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 40px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 70%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .btn-save {
            background-color: #f25c05;
            color: #fff;
            cursor: pointer;
        }
       

        .btn-save:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbarExample">

    <!-- Navigation -->
    <div class="nss">
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
        <div class="container">

            
            <a class="navbar-brand logo-image" href="index.php"><img src="logo.png" alt="alternative"></a>

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <a class="navbar-brand logo-text" href="index.php">Aagami</a>

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse"
                aria-label="Toggle navigation">
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
                        <a class="nav-link" href="index.php#invitation">Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="detail.html">Contact us</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="sell.html">Sell</a>
                    </li> -->
                </ul>
                <span class="nav-item">
                    <a class="btn-outline-sm" href="index.php">Home</a>
                </span>
            </div>
            <!-- end of navbar-collapse -->
        </div>
        <!-- end of container -->
    </nav>
</div>
    <!-- end of navbar -->
    <!-- end of navigation -->

    <!-- Your navigation and header code here -->
    <!-- ... -->

    <!-- Account Section -->
        <div class="ex-form-1 pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3">
                        <div class="text-box mt-5 mb-5">
                        </div>
                        <section class="account-section">
                            <div class="container">
                                <h2>Welcome, <?php echo $user['name']; ?></h2>
                                <form method="post" action="">
                                    <label for="name">Name:</label>
                                    <input type="text" id="name" name="newName" value="<?php echo $user['name']; ?>" required>
                    
                                    <label for="email">Email:</label>
                                    <input type="text" id="email" value="<?php echo $user['email']; ?>" readonly>
                    
                                    <label for="age">Age:</label>
                                    <input type="number" id="age" name="newAge" value="<?php echo $user['age']; ?>" required>
                    
                                    <label for="mobile">Mobile:</label>
                                    <input type="text" id="mobile" name="newMobile" value="<?php echo $user['mobile']; ?>" required>
                    
                                    <input type="submit" name="save" value="Save Changes" class="btn btn-save">
                                </form>
                            </div>
                        </section>
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

    <!-- Your footer and scripts here -->
    <!-- ... -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>