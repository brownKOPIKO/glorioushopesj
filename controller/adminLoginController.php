<?php
session_start(); // Make sure to start the session

include '../model/dbConnection.php'; // Include your database connection file

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Basic validation
    if (empty($username) || empty($password)) {
        header('Location: ../view/adminLogin.php?error=Please enter both username and password');
        exit();
    }

    // Query the database for the user with the provided username
    $sql = "SELECT * FROM admin WHERE username = '$username'";
    $result = mysqli_query($connection, $sql);

    if ($result && mysqli_num_rows($result) == 1) {
        // User found, check the password
        $row = mysqli_fetch_assoc($result);
        $storedPasswordHash = $row['password'];

        // Check if the entered password matches the stored hashed password
        if (password_verify($password, $storedPasswordHash)) {
            // Password is correct, proceed with login
            $_SESSION['admin_email'] = $username;
            $_SESSION['verification_status'] = 0; // Set to 0 initially, assuming it needs verification

            // Redirect to the verification page
            header('Location: ../view/authAdmin.php');
            exit();
        } else {
            // Incorrect password, show an error message
            header('Location: ../view/adminLogin.php?error=Incorrect password');
            exit();
        }
    } else {
        // User not found or other database error
        header('Location: ../view/adminLogin.php?error=Invalid username or password');
        exit();
    }
} else {
    header('Location: ../view/admin.php');
    exit();
}
?>
