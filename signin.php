<?php
session_start(); // Start the session at the beginning of the script

require_once "connection.php"; // Include the database connection

if (isset($_POST["submit"])) {
    // Enable error reporting for debugging
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Collect form input and sanitize
    $fullname = trim($_POST["fullname"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    // Validate required fields
    if (empty($fullname) || empty($email) || empty($password)) {
        echo "<div class='alert alert-danger'>All fields are required.</div>";
        exit();
    }

    // Use prepared statements for security
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Check if user exists
    if ($user) {
        // Verify the password
        if (password_verify($password, $user["password"])) {
            // Check if the full name matches
            if ($fullname === $user["fullname"]) {
                // Store user details in session
                $_SESSION["email"] = $user["email"];
                $_SESSION["fullname"] = $user["fullname"];
                $_SESSION["user_type"] = $user["user_type"];

                // Redirect based on user type
                if ($user["user_type"] === "admin") {
                    $_SESSION["admin_name"] = $user["fullname"];
                    $_SESSION["admin_email"] = $user["email"];
                    $_SESSION["admin_id"] = $user["id"];

                    // Clear output buffer and redirect to admin page
                    ob_clean();
                    header("Location: admin_pannel.php");
                    exit();
                } else {
                    // Clear output buffer and redirect to user page
                    ob_clean();
                    header("Location: index1.php");
                    exit();
                }
            } else {
                echo "<div class='alert alert-danger'>Name does not match.</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Password does not match.</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Email does not match.</div>";
    }
    $stmt->close();
}

?>
