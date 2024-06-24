<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h1>Welcome, Admin!</h1>
    <p>Ini adalah halaman dashboard admin di mana Anda dapat menambah, mengedit, atau menghapus skill, pengalaman, dan sebagainya.</p>
    <a href="manage_skills.php" class="btn btn-primary">Manage Skills</a>
    <a href="manage_experiences.php" class="btn btn-primary">Manage Experiences</a>
    <a href="logout.php" class="btn btn-danger">Logout</a>
  </div>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
