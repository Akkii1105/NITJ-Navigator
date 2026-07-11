<?php
// Database credentials (checks environment variables first for production/Vercel)
define('DB_SERVER', getenv('MYSQL_ADDON_HOST') ?: getenv('DB_SERVER') ?: 'localhost');
define('DB_USERNAME', getenv('MYSQL_ADDON_USER') ?: getenv('DB_USERNAME') ?: 'root');
define('DB_PASSWORD', getenv('MYSQL_ADDON_PASSWORD') ?: getenv('DB_PASSWORD') ?: '');
define('DB_NAME', getenv('MYSQL_ADDON_DB') ?: getenv('DB_NAME') ?: 'user_db');
define('DB_PORT', getenv('MYSQL_ADDON_PORT') ?: getenv('DB_PORT') ?: '3306');

// Create connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
