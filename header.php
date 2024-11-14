<?php
session_start();

// Check if the user is logged in
// if (!isset($_SESSION['user_id'])) {
//     header("Location: login.php"); // Redirect to login if not logged in
//     exit();
// }
if (isset($_POST['logout'])) {
    session_destroy();
    header('location:login.php');
    exit();
}
// ?>

<!DOCTYPE html>
<html>
    <head>
        <title>luxlife web application</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">  
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script src="script1.js"></script>
        <script src="user.js"></script>

        <script>
$(document).ready(function() {
    $("#khatra").hide(); // Hide on page load
    $(".bi-info-circle-fill").click(function() {
        $("#khatra").slideToggle("slow"); // Toggle slide up/down
    });
});
</script>
<style>
    .icons {
    display: flex;
    justify-content: flex-end;
    margin: 20px;
}

.icons i {
    font-size: 24px;
    margin-top: -10px;
    color: black;
    cursor: pointer;
    transition: color 0.3s;
}

.icons i:hover {
    color: green;
}

#khatra {
    background-color: #f4f4f4;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 200px;
    padding-top: 60px;
    margin-left: 1000px;
    font-family: Arial, sans-serif;
    color: #333;
    display: flex;
}

.user-box p {
    font-size: 16px;
    margin: 10px 0;
    color: #555;
}

.user-box span {
    font-weight: bold;
    color: #007bff;
}

.logout {
    display: inline-block;
    width: 100%;
    padding: 2px 0;
    background-color: black;
    border: none;
    color: #fff;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
}

.logout:hover {
    background-color: #c82333;
}
</style>
    </head>
    <body>
        <nav>
            <div id="navbar">
                <div id="navbar_logo">
                <a href="index.php"><img src="logo1.png" height="50px"></a>
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
    <!-- User Dropdown -->
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

    <!-- Wishlist Icon -->
    <?php
    include("connection.php");
    $user_id = '1'; // Replace this with the actual user ID
    $select_wishlist = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE user_id='$user_id'") or die('query failed');
    $wishlist_num_rows = mysqli_num_rows($select_wishlist);
    ?>
    <a id="buy1" href="wishlist.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-heart" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0M14 14V5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1M8 7.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132"/>
        </svg>
        <span><?php echo $wishlist_num_rows; ?></span>
    </a>

    <!-- Cart Icon -->
    <?php
    $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id='$user_id'") or die('query failed');
    $cart_num_rows = mysqli_num_rows($select_cart);
    ?>
    <a id="cart1" href="cart.html">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
            <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
        </svg>
        <span><?php echo $cart_num_rows; ?></span>
    </a>

    <!-- Search Icon -->
    <a id="srbtn" class="search1" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
        </svg>
    </a>

    <!-- Search Form -->
    <form id="search-form">
        <input type="search" id="search-box" placeholder="Search here...">
        <label for="search-box" class="search1"></label>
    </form>
</div>
<div class="icons">
<i class="bi bi-info-circle-fill"></i>
        </div>
    
        </nav>

    
             
        </body>
    

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>

<?php
// Example: Displaying an error message in PHP
if ($error) {
    echo "<div class='error-message'>Error: $error</div>";
}
?>

    <div class="background"></div> <!-- Your background div -->
    <?php if (isset($error)): ?>
        <div class="error-message">Error: <?php echo $error; ?></div>
    <?php endif; ?>


    <div id="khatra">
        <div class="user-box">
            <!-- Display session variables if set -->
            <p>Username: <span><?php echo htmlspecialchars($_SESSION['fullname']); ?></span></p>
            <p>Email: <span><?php echo htmlspecialchars($_SESSION['email']); ?></span></p>
                <form method="post">
                    <button type="submit" name="logout" class="logout">Log Out</button>
                </form>
        </div>
    </div>
</body>
</html>
