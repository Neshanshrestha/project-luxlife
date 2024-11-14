<?php
// session_start();

if (isset($_POST["submit"])) {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $user_type = $_POST["user_type"];  
    
    $passwordhash = password_hash($password, PASSWORD_DEFAULT);
    $errors = array();

    // Validate inputs
    if (empty($fullname) || empty($email) || empty($password) || empty($cpassword) || empty($user_type)) {
        array_push($errors, "All fields are required.");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email is not valid.");
    }
    if (strlen($password) < 4) {
        array_push($errors, "Password must be at least 4 characters long.");
    }
    if ($password !== $cpassword) {
        array_push($errors, "Passwords do not match.");
    }

    // Database connection
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
        $sql = "INSERT INTO users (fullname, email, password, user_type) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        $preparestmt = mysqli_stmt_prepare($stmt, $sql);
        if ($preparestmt) {
            mysqli_stmt_bind_param($stmt, "ssss", $fullname, $email, $passwordhash, $user_type); // Corrected binding
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
