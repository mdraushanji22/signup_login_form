<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Home - Auth System</title>
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
            padding: 30px;
        }

        .btn-custom {
            border-radius: 30px;
        }
    </style>
</head>

<body>

    <div class="card shadow-lg text-center" style="width: 400px;">
        <h2 class="mb-4">🚀 Welcome</h2>

        <?php if (isset($_SESSION['user_id'])): ?>
            <h5 class="mb-3">Hello, <?php echo $_SESSION['user_name']; ?> 👋</h5>
            <a href="dashboard.php" class="btn btn-primary btn-custom w-100 mb-2">Dashboard</a>
            <a href="logout.php" class="btn btn-danger btn-custom w-100">Logout</a>
        <?php else: ?>
            <a href="login.php" class="btn btn-success btn-custom w-100 mb-2">Login</a>
            <a href="register.php" class="btn btn-warning btn-custom w-100">Register</a>
        <?php endif; ?>
    </div>

</body>

</html>