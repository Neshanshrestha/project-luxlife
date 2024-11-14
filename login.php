

<?php
session_start();

if (isset($_POST["submit"])) {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    
    $passwordhash = password_hash($password, PASSWORD_DEFAULT);
    $errors = array();

    // Validate inputs
    if (empty($fullname) || empty($email) || empty($password) || empty($cpassword)) {
        array_push($errors, "All fields are required.");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email is not valid.");
    }
    if (strlen($password) < 8) {
        array_push($errors, "Password must be at least 8 characters long.");
    }
    if ($password !== $cpassword) {
        array_push($errors, "Passwords do not match.");
    }

    require_once "connection.php";
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $rowcount = mysqli_num_rows($result);
    if ($rowcount > 0) {
        array_push($errors, "Email already exists.");
    }

    // Display errors if there are any
    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
    } else {
        // Proceed with registration
        $sql = "INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        $preparestmt = mysqli_stmt_prepare($stmt, $sql);
        if ($preparestmt) {
            mysqli_stmt_bind_param($stmt, "sss", $fullname, $email, $passwordhash);
            mysqli_stmt_execute($stmt);

            // Store success message in session and redirect to login page
            $_SESSION['success'] = "You are signed up successfully. Please log in.";
            header("Location: login.php");
            exit();
        } else {
            die("Something went wrong.");
        }
    }
}



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style1.css" />
    <link rel="stylesheet" href="style.css" />
    <script src="login.js"></script>


    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <title>Login Page</title>

  </head>
  <body>
   
  <nav>
            <div id="navbar">
                <div id="navbar_logo">
                <a href="index.html"><img src="logo1.png" height="50px"></a>
                </div>
                <div id="nav_link">
                    <ul>
                    <li>
                            <a href="index1.php">Home</a>
                        </li>
                        <li>
                            <a href="product.php">Product</a>
                        </li>
                        <li>
                            <a href="service.php">Service</a>
                        </li>
                        <li>
                            <a href="about.php">About</a>
                        </li>
                    
                    
                            
                        
                    </ul>
                    
                    <div id="nav_tools">
                        <label for="users">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                            </svg>
                        </label>
                    <select name="users" id="users" onchange="handleUserSelect(this.value)">
                         <option value="">Select</option>
                         <option value="welcome">Welcome</option>
                         <option value="Sign-Up">Sign Up</option>
                         <option value="Sign-In">Sign In</option>
                    </select>



                        <a id="cart1" href="cart.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                            <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                          </svg>
                        <span>0</span>
                    </a>
                    <a id="buy1" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-heart" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0M14 14V5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1M8 7.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132"/>
                          </svg>
                          <span>0</span>
                    </a>
                    <a  id="srbtn" class="search1" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"  viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                          </svg>
                    </a>
                    <form id="search-form">
                        <input type="search" id="search-box" placeholder="Search here...">
                        <label for="search-box" class="search1"></label>
                        </form>

                    </div>
                </div>
            </div>

        </nav>
        
        <?php
session_start();

if (isset($_SESSION['message'])) {
    foreach ($_SESSION['message'] as $msg) {
        echo '
        <div class="message">
            <span>' . htmlspecialchars($msg) . '</span>
            <i class="bi bi-x-circle" onclick="this.parentElement.remove()"></i>
        </div>
        ';
    }
    unset($_SESSION['message']); // Clear messages after displaying
}
?>

    <div class="background"></div> <!-- Your background div -->
    <?php if (isset($error)): ?>
        <div class="message">Error: <?php echo $error; ?></div>
    <?php endif; ?>


<?php include("signup.php");?>
<?php include("signin.php");?>
  <div id="login_cointainer">
    <img src="log1.png" class="img1" id="img1">  
    <div class="container" id="container">
    
      <div class="sign-up">
        <form method="post" action="signup.php">
          <h1>SIGN UP</h1>
          <select class="select" name="user_type">
            <option value="user">User</option>
            <option value="admin">Admin</option>
          </select>
          <input type="text" placeholder="Full Name" name="fullname"/>
          <input type="email" placeholder="Email" name="email" />
          <input type="password" placeholder="Password" name="password" />
          <input type="password" placeholder="Confirm Password" name="cpassword" />
          <button name="submit">Sign-Up</button>
        </form>
      </div>
      
      <div class="sign-in">
     
        <form  id="loginForm" onsubmit="loginUser(event)" action="signin.php" method="post">
          <h1>SIGN IN</h1>
          <input type="text" placeholder="Name" name="fullname"/>
          <input type="email" placeholder="Email" name="email"  id="email" required />
          <input type="password" placeholder="Password"  name="password" required/>
          <a href="#">Forgot password</a>
          <button name="submit">Sign-In</button>
        </form>
      </div>
      <div class="toogle-container">
        <div class="toogle">
          <div class="toogle-panel toogle-left">
            <h1>Welcome to LUXLIFE!</h1>
            <p>If you already have an account</p>
            <button class="hidden" id="login">Sign In</button>
          </div>
          <div class="toogle-panel toogle-right">
            <h1>Hello, User!</h1>
            <p>If you don't have an account</p>
            <button class="hidden" id="register">Sign Up</button>
          </div>
        </div>
      </div>
    </div>
    </div>
    
  </body>
<script src="script.js"></script>

</html>
