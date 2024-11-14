<?php
session_start();

include 'connection.php';

$admin_id = $_SESSION['admin_name'] ?? null;

// Logout functionality
if (isset($_POST['logout'])) {
    session_destroy();
    header('location:login.php');
    exit();
}

// Delete products from database
if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    
    mysqli_query($conn, "DELETE FROM `users` WHERE id = '$delete_id'") or die('Query failed');
    $message[]='user removed successfully';
    header('location:admin_user.php');
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

    <div class="line"></div>
    <section class="message-container">
        <h1 class="title">Total Users Account</h1>
        <div class="box-container">

        <?php
        $select_users = mysqli_query($conn, "SELECT * FROM `users`") or die('Query failed');
        if(mysqli_num_rows($select_users) > 0) {
            while($fetch_users = mysqli_fetch_assoc($select_users)) {
                // Check if each expected field exists in $fetch_users to avoid undefined index errors
                $user_id = $fetch_users['id'] ?? 'N/A';
                $user_name = $fetch_users['name'] ?? 'N/A';
                $user_email = $fetch_users['email'] ?? 'N/A';
                $user_type = $fetch_users['user_type'] ?? 'N/A';
                ?>
                
                <div class="box">
                    <p>User ID: <span><?php echo htmlspecialchars($user_id); ?></span></p>
                    <p>Name: <span><?php echo htmlspecialchars($user_name); ?></span></p>
                    <p>Email: <span><?php echo htmlspecialchars($user_email); ?></span></p>
                    <p>User Type: <span style="color:<?php echo ($user_type == 'admin') ? 'orange' : '#333'; ?>">
                        <?php echo htmlspecialchars($user_type); ?></span></p>
                    <a href="admin_user.php?delete=<?php echo urlencode($user_id); ?>" onclick="return confirm('Delete this message?');">Delete</a>
                </div>
                <?php
            }
        } else {
            echo '<div class="empty"><p>No users found!</p></div>';
        }
        ?>
        </div>
    </section>

    <script src="admin.js"></script>
</body>
</html>
