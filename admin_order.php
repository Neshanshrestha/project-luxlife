<?php
session_start(); // Start session at the top

include 'connection.php';

$admin_id = $_SESSION['admin_name'] ?? null; // Check if admin_name is set

// Redirect to login page if the admin is not logged in
// if (!$admin_id) {
//     header('location:login.php');
//     exit();
// }

// Logout functionality
if (isset($_POST['logout'])) {
    session_destroy();
    header('location:login.php');
    exit();
}

// Delete order from database
if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    
    mysqli_query($conn, "DELETE FROM `order` WHERE id = '$delete_id'") or die('query failed');
    header('location:admin_order.php');
    exit();
}

// Update payment status
if (isset($_POST['update_order'])) {
    $order_id = $_POST['order_id'];
    $update_payment = $_POST['update_payment'];

    mysqli_query($conn, "UPDATE `order` SET payment_status = '$update_payment' WHERE id = '$order_id'") or die("query failed");
}

?>

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
    if (isset($message)) {
        foreach ($message as $msg) {
            echo '<div class="message">
                    <span>' . $msg . '</span>
                    <i class="bi bi-x-circle" onclick="this.parentElement.remove()"></i>
                  </div>';
        }
    }
    ?>

    <div class="line"></div>
    <section class="order-container">
        <h1 class="title">Total Orders Placed</h1>
        <div class="box-container">

        <?php
        $select_orders = mysqli_query($conn, "SELECT * FROM `order`") or die('query failed');
        if (mysqli_num_rows($select_orders) > 0) {
            while ($fetch_orders = mysqli_fetch_assoc($select_orders)) {
        ?>

        <div class="box">
            <p>User Name: <span><?php echo $fetch_orders['name']; ?></span></p>
            <p>User ID: <span><?php echo $fetch_orders['user_id']; ?></span></p>
            <p>Placed On: <span><?php echo $fetch_orders['placed_on']; ?></span></p>
            <p>Number: <span><?php echo $fetch_orders['number']; ?></span></p>
            <p>Email: <span><?php echo $fetch_orders['email']; ?></span></p>
            <p>Total Price: <span><?php echo $fetch_orders['total_price']; ?></span></p>
            <p>Method: <span><?php echo $fetch_orders['method']; ?></span></p>
            <p>Address: <span><?php echo $fetch_orders['address']; ?></span></p>
            <p>Total Product: <span><?php echo $fetch_orders['total_products']; ?></span></p>
            
            <form method="post">
                <input type="hidden" name="order_id" value="<?php echo $fetch_orders['id']; ?>">
                <select name="update_payment">
                    <option value="<?php echo $fetch_orders['payment_status']; ?>" selected disabled><?php echo ucfirst($fetch_orders['payment_status']); ?></option>
                    <option value="pending">Pending</option>
                    <option value="completed">Completed</option>
                </select>
                <input type="submit" name="update_order" value="Update Payment">
            </form>

            <a href="admin_order.php?delete=<?php echo $fetch_orders['id']; ?>" onclick="return confirm('Delete this order?');" class="delete">Delete</a>
        </div>

        <?php
            }
        } else {
            echo '<div class="empty"><p>No orders placed yet!</p></div>';
        }
        ?>
        </div>
    </section>

    <script src="admin.js"></script>
</body>
</html>
