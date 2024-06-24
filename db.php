<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portofolio";

$conn = new mysqli("localhost", "root", "", "portofolio");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
