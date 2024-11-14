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

// Adding product to the database
if (isset($_POST['add_product'])) {
    // Sanitize inputs
    $product_name = mysqli_real_escape_string($conn, $_POST['name']);
    $product_price = mysqli_real_escape_string($conn, $_POST['price']);
    $product_detail = mysqli_real_escape_string($conn, $_POST['detail']);
    
    // Check if an image is uploaded
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image = $_FILES['image']['name'];
        $image_size = $_FILES['image']['size'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = 'images/' . $image;

        // Check if product name already exists
        $select_product_name = mysqli_query($conn, "SELECT name FROM `product` WHERE name = '$product_name'") or die('query failed');
        if(mysqli_num_rows($select_product_name) > 0){
            $message[] = 'Product name already exists';
        } else {
            // Insert product into the database
            $insert_product = mysqli_query($conn, "INSERT INTO `product`(`name`, `price`, `product_details`, `image`) 
                VALUES ('$product_name', '$product_price', '$product_detail', '$image')") or die('query failed');
            
            if ($insert_product) {
                // Check image size before uploading
                if ($image_size > 2000000) {
                    $message[] = 'Image size is too large';
                } else {
                    // Move uploaded file
                    move_uploaded_file($image_tmp_name, $image_folder);
                    $message[] = 'Product added successfully';
                }
            }
        }
    } else {
        $message[] = 'Please upload an image';
    }
}

// Delete products from database
if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    $select_delete_image = mysqli_query($conn, "SELECT image FROM `product` WHERE id = '$delete_id'") or die('query failed');
    $fetch_delete_image = mysqli_fetch_assoc($select_delete_image);
    unlink('image/' . $fetch_delete_image['image']);

    mysqli_query($conn, "DELETE FROM `product` WHERE id = '$delete_id'") or die('query failed');
    mysqli_query($conn, "DELETE FROM `cart` WHERE pid = '$delete_id'") or die('query failed');
    mysqli_query($conn, "DELETE FROM `wishlist` WHERE pid = '$delete_id'") or die('query failed');

    header('location:admin_product.php');
}
/// Update product in the database
if (isset($_POST['update_product'])) {
    $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
    $product_name = mysqli_real_escape_string($conn, $_POST['name']);
    $product_price = mysqli_real_escape_string($conn, $_POST['price']);
    $product_details = mysqli_real_escape_string($conn, $_POST['product_detail']); // Corrected variable name

    // Update image if a new file is uploaded
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image = $_FILES['image']['name'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = 'images/' . $image;

        move_uploaded_file($image_tmp_name, $image_folder);

        // Update the database
        mysqli_query($conn, "UPDATE `product` SET name = '$product_name', price = '$product_price', product_details = '$product_details', image = '$image' WHERE id = '$update_id'") or die('Query failed');
    } else {
        mysqli_query($conn, "UPDATE `product` SET name = '$product_name', price = '$product_price', product_details = '$product_details' WHERE id = '$update_id'") or die('Query failed');
    }
    header('location:admin_product.php');
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
        <section class="add_products">
            <form class="form" method="post" action="" enctype="multipart/form-data">
                <div class="input_field">
                    <label>Product Name</label>
                    <input type="text" name="name" required>
                </div>
                <div class="input_field">
                    <label>Product Price</label>
                    <input type="text" name="price" required>
                </div>
                <div class="input_field">
                    <label>Product Detail</label>
                    <textarea name="detail" required></textarea>
                </div>
                <div class="input_field">
                    <label>Product Image</label>
                    <input type="file" name="image" accept="image/jpg, image/png,image/webp "required>
                </div>
                <input type="submit" name="add_product" value="Add Product" class="btn">
            </form>
        </section>
        
       <div class="line"></div>
        <section class="show_product">
        <div class="box-container">
    <?php
    $select_products = mysqli_query($conn, "SELECT * FROM `product`") or die('query failed');
    if (mysqli_num_rows($select_products) > 0) {
        while ($fetch_products = mysqli_fetch_assoc($select_products)) {
    ?>
    <div class="box1">
        <img src="image/<?php echo $fetch_products['image']; ?>" alt="product">
        <p>price : <?php echo $fetch_products['price']; ?> </p>
        <h3><?php echo $fetch_products['name']; ?></h3>
        <details class="product_details"> <?php echo $fetch_products['product_details']; ?></details>
        <a href="admin_product.php?edit=<?php echo $fetch_products['id']; ?>" class="edit">edit</a>
        <a href="admin_product.php?delete=<?php echo $fetch_products['id']; ?>" class="delete" onclick="return confirm('want to delete this product?')">delete</a>
    </div>
    <?php
        }
    } else {
        echo '<div class="empty"><p>No products found</p></div>';
    }
    ?>
</div>
        </section>

        <div class="line"></div>
    <section class="update-container">
        <?php
        if (isset($_GET['edit'])) {
            $edit_id = $_GET['edit'];
            $edit_query = mysqli_query($conn, "SELECT * FROM `product` WHERE id = '$edit_id'") or die('query failed');
            if (mysqli_num_rows($edit_query) > 0) {
                while ($fetch_edit = mysqli_fetch_assoc($edit_query)) {

                
        ?>

<form method="POST" enctype="multipart/form-data" class="update-container">
<img src="image/<?php echo $fetch_edit['image']; ?>">
<input type="hidden" name="update_id" value="<?php echo $fetch_edit['id']; ?>">
    <input type="text" name="name" value="<?php echo $fetch_edit['name']; ?>" required>
    <input type="number" name="price" min="0" value="<?php echo $fetch_edit['price']; ?>" required>
    <textarea name="product_detail" required><?php echo $fetch_edit['product_details']; ?></textarea>
    <input type="file" name="image" accept="image/jpg, image/jpeg, image/png, image/webp">
    <input type="submit" name="update_product" value="Update" class="edit">
    <input type="reset" value="Cancel" class="option-btn btn" id="close-form">
</form>


        <?php
                }

            }
              echo "<script>document.querySelector('.update-container').style.display = 'block';</script>";

        }
        ?>
    </section>

        <script src="admin.js"></script>
    
</body>
</html>
