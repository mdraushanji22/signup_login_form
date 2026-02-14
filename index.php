<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #667eea, #764ba2);
        }

        .card {
            border-radius: 20px;
            width: 400px;
        }

        .btn {
            border-radius: 30px;
        }
    </style>
</head>

<body>

    <div class="card shadow-lg p-4 text-center">
        <h3 class="mb-3">🚀 Authentication System</h3>

        <?php if (isset($_SESSION['user_id'])): ?>
            <h5>Hello, <?php echo $_SESSION['user_name']; ?> 👋</h5>
            <a href="dashboard.php" class="btn btn-primary w-100 mt-3">Dashboard</a>
            <a href="logout.php" class="btn btn-danger w-100 mt-2">Logout</a>
        <?php else: ?>
            <a href="login.php" class="btn btn-success w-100 mt-3">Login</a>
            <a href="register.php" class="btn btn-warning w-100 mt-2">Register</a>
        <?php endif; ?>
    </div>

</body>

</html>