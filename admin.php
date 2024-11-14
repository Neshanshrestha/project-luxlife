
<?php
session_start(); // Start the session at the beginning

// Check if the admin session variables are set
if (!isset($_SESSION['admin_name']) || !isset($_SESSION['admin_email'])) {
    // Redirect to login page if not logged in
    // header('Location: login.php');
    // exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">  
    <link rel="stylesheet" href="admin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
     $(document).ready(function() {
     $("#khatra").hide(); // Hide on page load
     $("#user-btn").click(function() {
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
    align-items: center;
    width: 200px;
    padding-top: 60px;
    margin-left: 1100px;
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
    </style>
</head>
<body>
<header class="header">
    <div class="flex">
        <a href="admin_pannel.php" class="logo"><img src="logo1.png" alt="Logo"></a>
        <nav class="navbar">
            <a href="admin_pannel.php">Home</a>
            <a href="admin_product.php">Products</a>
            <a href="admin_order.php">Orders</a>
            <a href="admin_user.php">Users</a>
            <a href="admin_message.php">Messages</a>
        </nav>
        <div class="icons">
            <i class="bi bi-person" id="user-btn"></i>
            <i class="bi bi-list" id="menu-btn"></i>
        </div>

       
    </div>
</header>



<div id="khatra">
        <div class="user-box">
            <!-- Check if session variables are set before displaying them -->
            <p>Username: <span><?php echo htmlspecialchars($_SESSION['admin_name']); ?></span></p>
    <p>Email: <span><?php echo htmlspecialchars($_SESSION['admin_email']); ?></span></p>
            <form method="post">
                <button type="submit" name="logout" class="logout">Log Out</button>
            </form>
        </div>
</div> 
<div class="banner">
    <div class="details">
        <h1>Admin Panel</h1>
        <p>Manage products, orders, users, and more from the admin dashboard.</p>
    </div>
</div>


</body>

</html>
