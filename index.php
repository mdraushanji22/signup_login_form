<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Home - Auth System</title>
</head>

<body>

    <h1>Welcome to Authentication System 🚀</h1>

    <?php if (isset($_SESSION['user_id'])): ?>

        <h3>Hello <?php echo $_SESSION['user_name']; ?> 👋</h3>
        <a href="dashboard.php">Go to Dashboard</a> |
        <a href="logout.php">Logout</a>

    <?php else: ?>

        <a href="login.php">Login</a> |
        <a href="register.php">Register</a>

    <?php endif; ?>

</body>

</html>