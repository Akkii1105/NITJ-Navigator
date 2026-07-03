<?php
// Database credentials template
define('DB_SERVER', getenv('DB_SERVER') ?: 'localhost');
define('DB_USERNAME', getenv('DB_USERNAME') ?: 'root');
define('DB_PASSWORD', getenv('DB_PASSWORD') ?: 'your_mysql_password');
define('DB_NAME', getenv('DB_NAME') ?: 'user_db');
define('DB_PORT', getenv('DB_PORT') ?: '3306');

// Create connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
