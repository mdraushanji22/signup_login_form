<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #a18cd1, #fbc2eb);
        }

        .card {
            width: 400px;
            border-radius: 20px;
        }

        .form-control {
            border-radius: 30px;
        }

        .btn {
            border-radius: 30px;
        }
    </style>
</head>

<body>

    <div class="card shadow-lg p-4">
        <h3 class="text-center mb-4">Welcome Back 👋</h3>

        <?php
        if (isset($error)) echo "<div class='alert alert-danger'>$error</div>";
        ?>

        <form method="POST">
            <input type="email" name="email" class="form-control mb-3" placeholder="Email">
            <input type="password" name="password" class="form-control mb-3" placeholder="Password">
            <button type="submit" name="login" class="btn btn-success w-100">Login</button>
        </form>

        <div class="text-center mt-3">
            <a href="register.php">Create new account</a>
        </div>
    </div>

</body>

</html>