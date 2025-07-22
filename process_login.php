<?php
session_start();
require 'database/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare('SELECT id, password FROM users WHERE email = ?');
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header('Location: home.php');
        exit;
    } else {
        // simple error message, real app would be more secure
        $_SESSION['login_error'] = 'Invalid credentials';
        header('Location: login.php');
        exit;
    }
}
header('Location: login.php');
