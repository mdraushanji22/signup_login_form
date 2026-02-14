<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #89f7fe, #66a6ff);
        }

        .card {
            width: 400px;
            border-radius: 20px;
        }

        .btn {
            border-radius: 30px;
        }
    </style>
</head>

<body>

    <div class="card shadow-lg p-4 text-center">
        <h4>Welcome 🎉</h4>
        <h5><?php echo $_SESSION['user_name']; ?></h5>
        <p>You are logged in successfully.</p>
        <a href="logout.php" class="btn btn-danger w-100">Logout</a>
    </div>

</body>

</html>