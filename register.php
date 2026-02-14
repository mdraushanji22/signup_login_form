<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
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
        <h3 class="text-center mb-4">Create Account ✨</h3>

        <?php if (isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>

        <form method="POST">
            <input type="text" name="name" class="form-control mb-3" placeholder="Full Name">
            <input type="email" name="email" class="form-control mb-3" placeholder="Email">
            <input type="password" name="password" class="form-control mb-3" placeholder="Password">
            <button type="submit" name="register" class="btn btn-primary w-100">Register</button>
        </form>

        <div class="text-center mt-3">
            <a href="login.php">Already have an account?</a>
        </div>
    </div>

</body>

</html>