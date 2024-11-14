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

// Delete products from database
if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    
    mysqli_query($conn, "DELETE FROM `message` WHERE id = '$delete_id'") or die('query failed');

    header('location:admin_message.php');
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
    if(isset($message)){
        foreach ($message as $msg) {
            echo '<div class="message">
                    <span>'.$msg.'</span>
                    <i class="bi bi-x-circle" onclick="this.parentElement.remove()"></i>
                  </div>';
        }
    }
    ?>

    <div class="line"></div>
       <section class="message-container">
        <h1 class="title"> Unread Message</h1>
        <div class="box-container">

        <?php
        $select_message = mysqli_query($conn, "SELECT * FROM `message`") or die('query field');
        if(mysqli_num_rows($select_message) > 0){
            while($fetch_message = mysqli_fetch_assoc($select_message)){
                ?>
                <div class="box">
                    <p>user id:<span><?php echo $fetch_message['id'];?></span></p>
                    <p>name:<span><?php echo $fetch_message['name'];?></span></p>
                    <p>email:<span><?php echo $fetch_message['email'];?></span></p>
                    <p><?php echo $fetch_message['message'];?></p>
                    <a href="admin_message.php?delete=<?php echo $fetch_message['id'];
                    ?>;"onclick="return confirm('delete this message');">delete</a>

                </div>
                <?php
                }
                    }else{
                echo '  
                <div class="empty">
                    <p>no product added yet!</p>
                </div> ';
        }
        ?>
        </div>
       </section>

        <script src="admin.js"></script>
    
</body>
</html>
