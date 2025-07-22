<?php
session_start();
require 'database/db_connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login - Fluencor</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="login-container">
        <form action="process_login.php" method="POST">
            <h2>Login</h2>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
