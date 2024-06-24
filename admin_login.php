<?php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $admin = $result->fetch_assoc();

    if ($admin && hash('sha256', $password) === $admin['password']) {
        $_SESSION['admin_logged_in'] = true;
        header('Location: admin_dashboard.php');
    } else {
        echo "Login gagal. Silakan coba lagi.";
    }
}
?>
