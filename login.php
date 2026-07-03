<?php
// Start the session
session_start();

require_once 'config.php';

// Check if the form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form data
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']); // Hash the password for security

    // SQL query to check if the user exists
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    // Check if the user exists
    if ($result->num_rows > 0) {
        // Store email in session
        $_SESSION['email'] = $email;

        // Redirect to home page after successful login
        header("Location: home.php");
        exit(); // Stop further execution after redirect
    } else {
        // Display error if credentials are incorrect
        echo "Invalid email or password.";
    }
}

// Close the database connection
$conn->close();
?>
