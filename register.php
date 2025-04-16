<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
    $conn->query($sql);
    header("Location: login.php");
}
?>

<form method="post">
    Email: <input name="email" type="email" required><br>
    Password: <input name="password" type="password" required><br>
    <button type="submit">Register</button>
</form>