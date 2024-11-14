<?php
// session_start(); // Start session at the top

include 'connection.php';

// $admin_id = $_SESSION['admin_name']; // Check if admin_name is set

// // Redirect to login page if the admin is not logged in
// if (!isset($admin_id)) {
//     header('location:login.php');
// }

// Logout functionality
if (isset($_POST['logout'])) {
    session_destroy();
    header('location:login.php');
   
}
// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <?php include 'admin.php'; ?>

    <?php
    if(isset($message)){
        foreach ($message as $message)  {
            echo ' <div class="message">
            <span>'.$message.'</span>
            <i class=bi-bi-x-circle" onclick="this.parentElement.remove()"></i>
            </div>';
        }
    }
        ?>
    <div class="line"></div>
    <section class="dashboard">
        <div class="box_container">
            <div class="box">
                <?php
            $total_pending =0;
            $select_pending =mysqli_query($conn, "SELECT * FROM `order` WHERE payment_status = 'pending'") or die('query Failed');
            while ($fetch_pending =mysqli_fetch_assoc($select_pending)) {
                $total_pending += $fetch_pending['total_price'];
            }
            ?>
            <h3>Npr <?php echo $total_pending; ?>/-</h3>
            <p>total pending</p>
            </div>
            <div class="box">
    <?php
    $total_complete = 0;
    $select_complete = mysqli_query($conn, "SELECT * FROM `order` WHERE payment_status = 'completed'") or die('Query failed');

    while ($fetch_complete = mysqli_fetch_assoc($select_complete)) {
        $total_complete += $fetch_complete['total_price'];
    }
    ?>
    <h3>Npr <?php echo $total_complete; ?>/-</h3>
    <p>Total Complete</p>
</div>


            <div class="box">
                <?php
            $select_orders =mysqli_query($conn, "SELECT * FROM `order`") or die('query Failed');
            $num_of_orders = mysqli_num_rows($select_orders);
            ?>
            <h3><?php echo $num_of_orders; ?></h3>
            <p>order placed</p>
            </div>

            <div class="box">
                <?php
            $select_products =mysqli_query($conn, "SELECT * FROM `order`") or die('query Failed');
            $num_of_products = mysqli_num_rows($select_orders);
            ?>
            <h3><?php echo $num_of_products; ?></h3>
            <p>product added</p>
            </div>

            
            <div class="box">
                <?php
            $select_users =mysqli_query($conn, "SELECT * FROM `users` WHERE user_type ='user'") or die('query Failed');
            $num_of_users = mysqli_num_rows($select_users);
            ?>
            <h3><?php echo $num_of_users; ?></h3>
            <p>total normal users</p>
            </div>

            <div class="box">
                <?php
            $select_admins =mysqli_query($conn, "SELECT * FROM `users` WHERE user_type ='admin'") or die('query Failed');
            $num_of_admins = mysqli_num_rows($select_admins);
            ?>
            <h3><?php echo $num_of_admins; ?></h3>
            <p>total admins</p>
            </div>

            <div class="box">
                <?php
            $select_users =mysqli_query($conn, "SELECT * FROM `users`") or die('query Failed');
            $num_of_users = mysqli_num_rows($select_users);
            ?>
            <h3><?php echo $num_of_users; ?></h3>
            <p>total registred </p>
            </div>

            <div class="box">
                <?php
            $select_message =mysqli_query($conn, "SELECT * FROM `message`") or die('query Failed');
            $num_of_message = mysqli_num_rows($select_message);
            ?>
            <h3><?php echo $num_of_message; ?></h3>
            <p>Messages</p>
            </div>
             
        </div>

        <script src="admin.js"></script>
    </section>
</body>
</html>
