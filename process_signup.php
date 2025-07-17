<?php
require 'database/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Sanitize Input
    $role = $_POST['role'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Initialize optional fields
    $bio = $_POST['bio'] ?? null;
    $category = $_POST['category'] ?? null;
    $date_of_birth = $_POST['date_of_birth'] ?? null;
    $agency_name = $_POST['agency_name'] ?? null;
    $agency_website = $_POST['agency_website'] ?? null;

    // Handle file uploads (simplified)
    $profile_image_path = null;
    $agency_logo_path = null;

    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] == 0) {
        $profile_image_path = 'uploads/' . basename($_FILES['profile_image']['name']);
        move_uploaded_file($_FILES['profile_image']['tmp_name'], $profile_image_path);
    }

    if (isset($_FILES['agency_logo']) && $_FILES['agency_logo']['error'] == 0) {
        $agency_logo_path = 'uploads/' . basename($_FILES['agency_logo']['name']);
        move_uploaded_file($_FILES['agency_logo']['tmp_name'], $agency_logo_path);
    }

    // Insert to Database
    $stmt = $pdo->prepare("INSERT INTO users (role, name, email, password, bio, category, profile_image, date_of_birth, agency_name, agency_website, agency_logo) VALUES (?,?,?,?,?,?,?,?,?,?,?)");

    $stmt->execute([
        $role,
        $name,
        $email,
        $password,
        $bio,
        $category,
        $profile_image_path,
        $date_of_birth,
        $agency_name,
        $agency_website,
        $agency_logo_path
    ]);

    header('Location: index.php');
}
