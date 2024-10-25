<?php
// Enable error reporting (optional for development)
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// Database connection
$host = 'localhost';
$dbname = 'user';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error connecting to database: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() == 0) {
        // Redirect to index.php with an error message
        header("Location: index.php?error=user_not_found");
        exit();
    } else {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_type'] = $user['user_type'];
            header("Location: dashboard.php");
            exit();
        } else {
            // Redirect for invalid password
            header("Location: index.php?error=invalid_password");
            exit();
        }
    }
}
?>
