<?php
// Database connection
require 'db.php'; // This file should handle your DB connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form input
    $first_name = $_POST['fName'];
    $last_name = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Check if email is already in use
    $query = $pdo->prepare('SELECT * FROM users WHERE email = :email');
    $query->bindParam(':email', $email);
    $query->execute();

    if ($query->rowCount() > 0) {
        echo "This email is already registered!";
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert the new user
        $insert = $pdo->prepare("INSERT INTO users (first_name, last_name, email, password, user_type) VALUES (?, ?, ?, ?, ?)");
        if ($insert->execute([$first_name, $last_name, $email, $hashed_password, $role])) {
            echo "Registration successful!";
        } else {
            echo "Registration failed!";
        }
    }
}
?>
