<?php
session_start();
include 'db.php';
if (!isset($_SESSION['admin'])) exit("Not admin.");

$result = $conn->query("SELECT email, balance FROM users");
echo "<h2>Registered Users</h2>";
while ($row = $result->fetch_assoc()) {
    echo "Email: {$row['email']} – Balance: \${$row['balance']}<br>";
}
echo '<a href="logout.php">Logout</a>';
?>