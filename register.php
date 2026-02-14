<?php
session_start();
require 'db.php';

if (isset($_POST['register'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($name) || empty($email) || empty($password)) {
        $error = "All fields are required!";
    } else {

        // Check if email already exists
        $check = $pdo->prepare("SELECT id FROM users WHERE email = ?");
        $check->execute([$email]);

        if ($check->rowCount() > 0) {
            $error = "Email already registered!";
        } else {

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
            $stmt->execute([$name, $email, $hashedPassword]);

            $_SESSION['success'] = "Registration successful! Please login.";
            header("Location: login.php");
            exit();
        }
    }
}
?>

<form method="POST">
    <h2>Register</h2>
    <?php if (isset($error)) echo "<p style='color:red'>$error</p>"; ?>
    <input type="text" name="name" placeholder="Name"><br><br>
    <input type="email" name="email" placeholder="Email"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <button type="submit" name="register">Register</button>
</form>

<a href="login.php">Already have an account? Login</a>