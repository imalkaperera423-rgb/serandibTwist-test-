<?php
session_start();

// already logged in, redirect to admin panel
if(isset($_SESSION['loggedin'])) {
    header("Location: admin.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    
    if ($username === "admin" && $password === "1234") {
        $_SESSION['loggedin'] = true;
        header("Location: admin.php");
        exit;
    } else {
        $error = "incorrect Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Login - Serandib Twist</title>
    <style>
        body { 
            background: #f4f1ee; 
            height: 100 vertical-center;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .card { border-radius: 15px; }
        .btn-coffee { background-color: #6f4e37; color: white; }
        .btn-coffee:hover { background-color: #4b3621; color: white; }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow-lg border-0">
                <div class="card-body p-5">
                    <div class="text-center mb-4">
                        <h3 class="fw-bold" style="color: #6f4e37;">Admin Login</h3>
                        <p class="text-muted small">Serandib Twist Management</p>
                    </div>

                    <?php if(isset($error)): ?>
                        <div class="alert alert-danger py-2 small text-center"><?php echo $error; ?></div>
                    <?php endif; ?>

                    <form method="POST">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Enter username" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                        </div>
                        <button type="submit" class="btn btn-coffee w-100 shadow-sm">Login to Dashboard</button>
                        
                        <div class="text-center mt-4">
                            <a href="index.php" class="text-decoration-none text-muted small">← Back to Website</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>