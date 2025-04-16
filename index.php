<?php
session_start();
if (isset($_SESSION['admin'])) {
    header("Location: admin.php");
    exit;
} elseif (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to User System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to the User System</h1>
        <p>Manage your account, balance and more!</p>
        
        <a href="register.php">Register</a> | <a href="login.php">Login</a>
    </div>
</body>
</html>
