<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home - Fluencor</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>Welcome to Fluencor!</h1>
    <p>You are logged in.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
